<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Group;

class GroupController extends Controller
{
    //
    public function index(){

    	// return "hiii";
    	// $group =Group::all();
    	$group =Group::where('status','!=','2')->get();
    	return view('admin.collection.group.index')->with('group',$group);

    }
    public function create(){
    	return view('admin.collection.group.create');
    }
    public function store(Request $request){

        $group = new Group();
        $group->name =$request->name;
    	$group->description =$request->description;
    	
    	if($request->status == true){
              $group->status = "1";
    	}
    	else{

    		 $group->status = "0";
    	}

    	$group->save();
    	return redirect()->back()->with('status','Group Data Added succesfully');
    	



    }

    public function edit($id){
    	$group =Group::find($id);
    	return view('admin.collection.group.edit')->with('group',$group);


    	// $group->name =
    }

    public function update(Request $request, $id){


    	$group =Group::find($id);
    	$group->name = $request->name;
    	$group->description =$request->description;


    	$group->status =$request->status ==true ? '1' :'0';
    	$group->update();
    	return redirect()->back()->with('status','Group Data Updated succesfully');

    }


    public function delete($id){
    	$group =Group::find($id);
    	$group->status ="2"; //0->show  1 ->hide 2->delete
    	$group->update();
    	return redirect()->back()->with('status', 'data deleted');

    }

    public function deletedrecorde(){

      $group =Group::where('status','2')->get();
    	return view('admin.collection.group.deleted')->with('group',$group);	
    }

    public function restore($id){

        $group =Group::find($id);
        $group->status ="0"; //0->show  1 ->hide 2->delete
        $group->update();
        return redirect('group')->with('status', 'data Restore');
    }
}
