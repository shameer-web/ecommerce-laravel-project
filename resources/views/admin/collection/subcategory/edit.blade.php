@extends('layouts.admin')


@section('content')


 <div class="container-fluid mt-5">

       {{-- Heading --}}

        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#" >Collections</a>
            <span>/</span>
            <span> Edit Sub Category</span>

             
            <a href="{{ url('/sub-category') }}"  class="badge bg-danger py-2 btn btn-primary text-white float-right">Back</a>


          </h4>

          
        </div>
       
       {{-- end Heading --}}


      <div class="row">
         <div class="col-md-12">
            @if(session('status'))
               <div class="alert alert-success" role="alert">
                            {{ session('status') }}
               </div>
            @endif
          <div class="card">
            <div class="card-body">


         <form action="{{ url('sub-category-update/'.$subcategory->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
          <div class="row">

              <div class="col-md-6">
                <div class="form-group">
                  <label>Category Id(Name)</label>
                        <select name="category_id" class="form-control">

                             <option value="{{ $subcategory->category_id }}">{{ $subcategory->category->name }}</option>}
                            
                              @foreach($category as $cat_item)

                                 <option value="{{ $cat_item->id }}">{{ $cat_item->name }}</option>
                              @endforeach
                                 
                        </select>        
                </div>
                
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label> Name</label>
                                <input type="text" name="name" value="{{ $subcategory->name }}" class="form-control" placeholder="Enter the Name">             
                </div>
                
              </div>


              <div class="col-md-12">
                <div class="form-group">
                  <label> Descriptions</label>
                                <textarea row="4"  name="description" class="form-control" placeholder="Enter the Descriptions">{{ $subcategory->description }}</textarea>             
                </div>
                
              </div>


              <div class="col-md-6">
                <div class="form-group">
                  <label> Image</label>
                                <input type="file" name="subcategory_image" class="form-control" placeholder="">
                                <div class="pt-4">
                                  	 <img src="{{ asset('uploads/subcategory/'.$subcategory->subcategory_image) }}" width="100px" alt=""> 
                                </div>  
                                          
                </div>
                
              </div>
             

              <div class="col-md-6">
                <div class="form-group">
                  <label> Priority </label>
                                <input type="number" name="priority" value="{{ $subcategory->priority }}" class="form-control" placeholder="Enter the Priority">             
                </div>
                
              </div>

              


              <div class="col-md-12">
                <div class="form-group">
                  <label> Show/Hide</label>
                                <input type="checkbox" name="status"{{ $subcategory->status == '1'? 'checked' : '' }}>             
                </div>
                
              </div>


              <div class="col-md-12">
  							<div class="form-group">
  								
                                <button type="submit"  class=" btn btn-primary " > Update</button>  						
  							</div>
  							
  			  </div>


             
              
        </div> 
       </form>



             </div>
            
          </div>
          
         </div>
        
       </div>
  

      
       





  </div>


@endsection  	