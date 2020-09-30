<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\User;

class RegisteredController extends Controller
{
    //
    public function index(){
    	//$users=User::paginate(2);
        //$users=User::all();
        $users=User::where('role_as',Input::get('roles'))->get();
    	return view('admin.users.index')->with('users',$users);
    }
    public function edit($id){
    	//dd($id);
    	$user_role =User::find($id);
    	return view('admin.users.edit')->with('user_role',$user_role);
    }



    public function update( Request $request, $id){
    	$user=User::find($id);
    	$user->name =$request->name;
    	$user->role_as =$request->roles;
        $user->isban =$request->isban;
    	$user->update();
    	return redirect()->back()->with('status','Role is Updated');

    }
}
