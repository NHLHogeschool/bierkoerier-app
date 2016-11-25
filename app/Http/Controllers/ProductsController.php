<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductsController extends Controller
{

	public function index() {
		$products = Product::all();
		return view('products.index', compact('products'));
	}


	public function create() {
		return view('products.new');
	}

	public function store(Request $request) {

		$product = new Product;

		$this->validate($request,
		[
			'name' => 'required|max:255',
			'price' => 'required',
			'description' => 'max:255',
			'status' => 'required',
		]);

		$product->name = $request->name;
		$product->price = $request->price;
		$product->status = $request->status;
		$product->description = $request->description;
		$product->save();

		return redirect('/products');
	}

}
