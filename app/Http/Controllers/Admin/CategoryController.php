<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Group;
use App\models\Category;
use File;

class CategoryController extends Controller
{
    //
    public function index()

    {   
    	$category =Category::where('status','!=','2')->get();
    	return view('admin.collection.category.index')->with('category',$category);
    }

    public function create(){

         $group =Group::where('status','!=','3')->get(); //3 is deleted data
    	return view('admin.collection.category.create')->with('group',$group);
    }

    public function store(Request $request)
    {
    	//dd($request->all());
    	$category =new Category();

    	$category->group_id =$request->group_id;
    	$category->name =$request->name;
    	$category->description =$request->description;
    	//$category->category_image =$request->category_image;

    	if($request->hasfile('category_image')){
    		$image_file =$request->file('category_image');
    		$image_extension = $image_file->getClientOriginalExtension();
    		$image_filename = time(). '.' .$image_extension;
    		$image_file->move('uploads/category_image/',$image_filename);
    		$category->category_image =$image_filename;
    	}
    	//$category->category_icon =$request->category_icon;

    	if($request->hasfile('category_icon')){
    		$icon_file =$request->file('category_icon');
    		$icon_extension = $icon_file->getClientOriginalExtension();
    		$icon_filename = time(). '.' .$icon_extension;
    		$icon_file->move('uploads/category_icon/',$icon_filename);
    		$category->category_icon =$icon_filename;
    	}

    	$category->status =$request->status == true ? '1' : '0';//0=show 1=hide

    	$category->save();
    	return redirect()->back()->with('status','Category added Succesfully');





    }
    public function edit($id)
    {

    	$category =Category::find($id);
    	$group =Group::where('status','!=','3')->get();
    	return view('admin.collection.category.edit')->with('category',$category)->with('group',$group);
    }

    public function update(Request $request , $id)
    {

    	$category =Category::find($id);


    	$category->group_id =$request->group_id;
    	$category->name =$request->name;
    	$category->description =$request->description;
    	

    	if($request->hasfile('category_image')){

    		$filepath ='uploads/category_image/'.$category->category_image;
    		if(File::exists($filepath)){
               File::delete($filepath);
    		}
    		$image_file =$request->file('category_image');
    		$image_extension = $image_file->getClientOriginalExtension();
    		$image_filename = time(). '.' .$image_extension;
    		$image_file->move('uploads/category_image/',$image_filename);
    		$category->category_image =$image_filename;
    	}
    	

    	if($request->hasfile('category_icon')){

    		$filepath_icon ='uploads/category_icon/'.$category->category_icon;
    		if(File::exists($filepath_icon)){
               File::delete($filepath_icon);
    		}
    		$icon_file =$request->file('category_icon');
    		$icon_extension = $icon_file->getClientOriginalExtension();
    		$icon_filename = time(). '.' .$icon_extension;
    		$icon_file->move('uploads/category_icon/',$icon_filename);
    		$category->category_icon =$icon_filename;
    	}

    	$category->status =$request->status == true ? '1' : '0';//0=show 1=hide

    	$category->update();
    	return redirect()->back()->with('status','Category Updated Succesfully');


    }

    public function delete($id){

    	$category =Category::find($id);

    	 $category->status ='2'; //delete =3
    	 $category->update();
    	 return redirect()->back()->with('status','Category Deleted Succesfully');
    }


    public function deletedrecorde(){
    	  $category =Category::where('status','2')->get();
    	return view('admin.collection.category.deleted')->with('category',$category);
    }

     public function restore($id){

        $group =Category::find($id);
        $group->status ="0"; //0->show  1 ->hide 2->delete
        $group->update();
        return redirect('category')->with('status', 'data Restore');
    }
}
