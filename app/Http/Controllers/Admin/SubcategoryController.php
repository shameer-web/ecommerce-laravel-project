<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use App\Models\Category;
use File;

class SubcategoryController extends Controller
{
    //
    public function  index(){
        
        $category =Category::where('status','!=','2')->get(); //2is deleted data
    	$subcategory = Subcategory::where('status','!=','3')->get(); //deleted records

    	return view('admin.collection.subcategory.index')->with('subcategory',$subcategory)->with('category',$category);
    }

    public function store(Request $request)
    {
    	$subcategory =new Subcategory();
        
        $subcategory->category_id = $request->category_id;
    	$subcategory->name = $request->name;
    	$subcategory->description = $request->description;

    	if($request->subcategory_image){
    		$image_file =$request->file('subcategory_image');
    		$image_extension = $image_file->getClientOriginalExtension();
    		$image_filename =time() . '.' . $image_extension;
    		$image_file->move('uploads/subcategory/',$image_filename);
    		$subcategory->subcategory_image = $image_filename;

    	}

    	$subcategory->priority = $request->priority;
    	$subcategory->status = $request->status == true ? '1' :'0';
    	$subcategory->save();
    	return redirect()->back()->with('status','Sub category added succesfully');



    }


    public function edit($id){
    	$subcategory =Subcategory::find($id);
    	 $category =Category::where('status','!=','2')->get(); //2is deleted data

    	return view('admin.collection.subcategory.edit')->with('subcategory',$subcategory)->with('category',$category); 
    }

    public function update(Request $request , $id){

    	$subcategory =Subcategory::find($id);


    	$subcategory->category_id = $request->category_id;
    	$subcategory->name = $request->name;
    	$subcategory->description = $request->description;

    	if($request->subcategory_image){

    		$filepath_image ='uploads/subcategory/'.$subcategory->subcategory_image;
    		 if(File::exists($filepath_image)){
    		 	File::delete($filepath_image);
    		 }
    		$image_file =$request->file('subcategory_image');
    		$image_extension = $image_file->getClientOriginalExtension();
    		$image_filename =time() . '.' . $image_extension;
    		$image_file->move('uploads/subcategory/',$image_filename);
    		$subcategory->subcategory_image = $image_filename;

    	}

    	$subcategory->priority = $request->priority;
    	$subcategory->status = $request->status == true ? '1' :'0';
    	$subcategory->update();
    	return redirect('/sub-category')->with('status','Sub category Updated succesfully');


    }

    public function delete($id){

    	$subcategory =Subcategory::find($id);

    	$subcategory->status ='3';//delete records
    	$subcategory->update();

    	return redirect()->back()->with('status','Subcategory deletedsuccesfully');
    }

    public function deletedrecordes(){

    	 $subcategory =Subcategory::where('status','3')->get();
    	return view('admin.collection.subcategory.deleted')->with('subcategory',$subcategory);
    }
    public function restore($id){

    	 $subcategory =Subcategory::find($id);

    	$subcategory->status ='0';
    	$subcategory->update();

    	return redirect('sub-category')->with('status','Subcategory Restore succesfully');
    }
}
