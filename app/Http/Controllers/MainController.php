<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index() 
	{
		return view('main');
	}

	public function store(Request $request)
	{
		$info = new Info();
		$info->name = $request->name;
		$info->sity = $request->sity;
		$info->phone = $request->phone;
		$info->email = $request->email;
		$info->save();
		return redirect()->back();
	}

	public function getProducts()
	{
		$products = Product::all();
		return view('services', compact('products'));
	}
}
