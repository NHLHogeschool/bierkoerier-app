<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use App\Product;

class ApiController extends Controller
{
	public function listProducts() {
		return Product::all();
	}
}