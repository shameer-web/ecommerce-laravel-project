@extends('layouts.admin')


@section('content')



  <div class="container-fluid mt-5">

  	<div class="row">
  		<div class="col-md-12">
  			<div class="card">
  				<div class="card-body">
  					<h6>
  						Collection/Category Edit
  					</h6>
  					
  				</div>
  				
  			</div>
  			
  		</div>
  		
  	</div>


  	<div class="row">
  		<div class="col-md-12">
  			<div class="card">
  				<div class="card-body">

  					 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                     @endif
  				 <form action="{{ url('category-update/'.$category->id) }}" method="post" enctype="multipart/form-data">
  				 	@csrf
            @method('put')

  					<div class="row">

              <div class="col-md-6">
                <div class="form-group">
                  <label>Group Id(Name)</label>
                        <select name="group_id" class="form-control">

                             <option value="{{ $category->group_id }}">{{ $category->group->name }}</option>}
                            
                              @foreach($group as $g_item)

                                 <option value="{{ $g_item->id }}">{{ $g_item->name }}</option>
                              @endforeach
                                 
                        </select>        
                </div>
                
              </div>

  						<div class="col-md-6">
  							<div class="form-group">
  								<label> Name</label>
                                <input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="Enter the Name">  						
  							</div>
  							
  						</div>


  						<div class="col-md-12">
  							<div class="form-group">
  								<label> Descriptions</label>
                                <textarea row="4"  name="description" class="form-control" placeholder="Enter the Descriptions">{{ $category->description }}</textarea> 						
  							</div>
  							
  						</div>


              <div class="col-md-6">
                <div class="form-group">
                  <label> Image</label>
                                <input type="file" name="category_image" class="form-control" placeholder=""> 
                                 <img src="{{ asset('uploads/category_image/'.$category->category_image) }}" width="50px" alt="">            
                </div>
                
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label> Icon</label>
                                <input type="file" name="category_icon" class="form-control" placeholder=""> 
                                <img src="{{ asset('uploads/category_icon/'.$category->category_icon) }}" width="50px" alt="">            
                </div>
                
              </div>


  						<div class="col-md-12">
  							<div class="form-group">
  								<label> Show/Hide</label>
                                <input type="checkbox" name="status" {{ $category->status =='1' ? 'checked' : '' }}>  						
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