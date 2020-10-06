@extends('layouts.admin')


@section('content')



  <div class="container-fluid mt-5">

       {{-- Heading --}}

        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#" >Collections</a>
            <span>/</span>
            <span>Sub Category Deleted Records</span>

            


          </h4>

          
        </div>
       
       {{-- end Heading --}}

       <div class="row">
       	 <div class="col-md-12">
       	 	<div class="card">
       	 		<div class="card-body">
       	 			<table class="table table-striped table-bordered">
       	 		      <thead>
       	 			      <tr>
       	 				
       	 				   <th>ID</th>
       	 				   <th>Name</th>

       	 				   <th>Category Name</th>
                   <th>Image</th>

       	 				   <th>Show/Hide</th>
       	 				   <th>Actions</th>
       	 			      </tr>
       	 		        </thead>
       	 		        @foreach ($subcategory as $item)

       	 		          <tbody>
       	 			      <tr>
       	 				    <td>{{ $item->id }}</td>
       	 				    <td>{{ $item->name }}</td>
       	 				    <td>{{ $item->category->name }}</td>
                    <td>
                       
                          <img src="{{ asset('uploads/subcategory/'.$item->subcategory_image) }}" width="75px" alt="">
                    </td>

       	 				    <td>
       	 					   <input type="checkbox"{{ $item->status == '1' ? 'checked' : '' }}>
       	 				    </td>
       	 				    <td>
       	 					  
       	 					   <a href="{{ url('subcategory-re-store/'.$item->id) }}" class="badge btn-danger py-2 px-2"> Restore</a>
       	 				    </td>
       	 			      </tr>
       	 		          </tbody>
       	 		        	
       	 		        @endforeach
       	 		        
       	 		
       	 	        </table>
       	 			
       	 		</div>
       	 		
       	 	</div>
       	 	
       	 </div>
       	
       </div>

       





  </div>


@endsection  