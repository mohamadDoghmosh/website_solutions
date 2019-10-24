<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
      public function index()
    {
        //
         $user=User::all();  
          $arr['user']=$user;
                return view ('admin.user.index',$arr);

        
    }
    
    
    
    public function create()
    {
        //
        
        return view ('admin.user.create');

        
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
$input=$request->only('name','email','role');
$input['password']=Hash::make($request->input('password'));

  $user=User::Create($input); 
			return redirect()->back();     
        
        
        
        
        
        
        
        
    }
    
     public function edit($id)
    {
        //        
       $user = User::find($id);
        return view('admin.user.edit', compact('user'));
   
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
 
      $input=$request->only('name','email','role');
if (!is_null($request->input('password'))){
 $input['password']=Hash::make($request->input('password'));
   
    
}
        
  $user->update($input);      
     return redirect ('/admin/user');  
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
 
                      $user = User::find($id);
$user->delete();
        
        
    }  
    
    
    
    
    
    
    
    
}
