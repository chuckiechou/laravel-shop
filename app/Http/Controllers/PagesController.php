<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{
	//
	public function root(){
		return view('pages.root');
	}

	public function index(){
		return view('pages.root');
	}
}
