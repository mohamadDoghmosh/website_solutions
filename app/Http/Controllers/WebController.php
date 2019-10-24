<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Service;
use App\Category;
class WebController extends Controller
{
    //
	public function index (){
        
         $service=Service::all();   
         $product=Product::all();
         $category=Category::all();
         $arr['service']=$service;
         $arr['product']=$product;
         $arr['category']=$category;
        return view('web.index',$arr);
        

        
        
        
    }
    
	
	
	
	
}
