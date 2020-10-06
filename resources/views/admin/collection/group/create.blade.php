@extends('layouts.admin')


@section('content')



  <div class="container-fluid mt-5">

  	<div class="row">
  		<div class="col-md-12">
  			<div class="card">
  				<div class="card-body">
  					<h6>
  						Collection/Groups
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
  				 <form action="{{ url('group-store') }}" method="post">
  				 	@csrf

  					<div class="row">
  						<div class="col-md-12">
  							<div class="form-group">
  								<label> Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter the Name">  						
  							</div>
  							
  						</div>


  						<div class="col-md-12">
  							<div class="form-group">
  								<label> Descriptions</label>
                                <textarea row="4"  name="description" class="form-control" placeholder="Enter the Descriptions"></textarea> 						
  							</div>
  							
  						</div>


  						<div class="col-md-12">
  							<div class="form-group">
  								<label> Show/Hide</label>
                                <input type="checkbox" name="status">  						
  							</div>
  							
  						</div>


  						<div class="col-md-12">
  							<div class="form-group">
  								
                                <button type="submit"  class=" btn btn-primary " > Save</button>  						
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