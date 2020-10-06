@extends('layouts.admin')


@section('content')



  <div class="container-fluid mt-5">

       {{-- Heading --}}

        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#" >Collections</a>
            <span>/</span>
            <span>Group</span>

             <a href="{{ url('group-deleted-records') }}" class=" badge py-2 btn btn-primary text-white float-right ml-2">Deleted Records</a>
            <a href="{{ url('group-add') }}" class="badge py-2 btn btn-primary text-white float-right">Add Group</a>


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
       	 				   <th>Descriptions</th>
       	 				   <th>Show/Hide</th>
       	 				   <th>Actions</th>
       	 			      </tr>
       	 		        </thead>
       	 		        @foreach ($group as $item)

       	 		          <tbody>
       	 			      <tr>
       	 				    <td>{{ $item->id }}</td>
       	 				    <td>{{ $item->name }}</td>
       	 				    <td>{{ $item->description }}</td>
       	 				    <td>
       	 					   <input type="checkbox"{{ $item->status == '1' ? 'checked' : '' }}>
       	 				    </td>
       	 				    <td>
       	 					   <a href="{{ url('group-edit/'.$item->id) }}" class="badge btn-primary"> Edit</a>
       	 					   <a href="{{ url('group-delete/'.$item->id) }}" class="badge btn-danger"> Delete</a>
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