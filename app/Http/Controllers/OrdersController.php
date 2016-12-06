<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\OrderLine;
use App\User;
use App\Notifications\OrderCreated;

class OrdersController extends Controller
{
	public function create()
	{
		$products = Product::all();
		return view('orders.create', compact('products'));
	}


	public function store(Request $request)
	{

		$order = Order::create([
			'user_id' => 1,
			'payment_id' => 1,
			'amount' => 1,
			'status' => 0,
			'lat' => 53.201233,
			'long' => 5.799913,
		]);

		$orderline = New OrderLine([
			'product_id' => $request->product,
			'quantity' => 1,
			'amount' => 10.00,
		]);

		$order->orderlines()->save($orderline);

		$user = User::first();
		$user->notify(New OrderCreated($order));
		return "success";

	}

}