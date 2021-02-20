<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;


class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		return view('admin-panel.home.home');
	}

	public function getInfo()
	{
		$infos = Info::all();
		return view('admin-panel.info.info', compact('infos'));
	}

	public function destroy($id)
	{
		$info = Info::find($id);
		if ($info) {
			$info->delete();
		}
		return redirect()->route('admin.info');
	}
}
