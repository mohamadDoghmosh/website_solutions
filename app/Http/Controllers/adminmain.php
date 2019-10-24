<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminmain extends Controller
{
    //
	public function index(){
		
		return view ('admin.main');
	}
}
