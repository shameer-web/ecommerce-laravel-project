@extends('layouts.frondend')
@section('title')

My Profile

@endsection

@section('content')


<section class="pt-5">
      <div class="container">
        <div class="row">
        	<div class="col-md-12">
        		

        		<div class="card pt-5">
        			<div class="card-body">
        				<h4>My Profile page</h4>
        				<hr>
        				<form action="{{ url('my-profile-update') }}" method="post" enctype="multipart/form-data">
        					@csrf
        					
        					<div class="row">
        						<div class="col-md-4">
        							<div class="form-group">
        						       <label>First name</label>
        						       <input type="text" name="fname" value="{{ Auth::user()->name }}" class="form-control">
        					        </div>
        							
        						</div>


        						<div class="col-md-4">
        							<div class="form-group">
        						       <label>Last name</label>
        						       <input type="text" name="lname" value="{{ Auth::user()->lname }}" class="form-control">
        					        </div>
        							
        						</div>

        						<div class="col-md-4">
        							<div class="form-group">
        						       <label>Email Id</label>
        						       <input type="text" name="" readonly value="{{ Auth::user()->email }}" class="form-control">
        					        </div>
        							
        						</div>


        						

        						<div class="col-md-6">
        							<div class="form-group">
        						       <label>Address 1 (Flatno,Apt No & Address)</label>
        						       <input type="text" name="address1" value="{{ Auth::user()->address1 }}" class="form-control">
        					        </div>
        							
        						</div>

        						<div class="col-md-6">
        							<div class="form-group">
        						       <label>Address 2 (Land mark,near by)</label>
        						       <input type="text" name="address2" value="{{ Auth::user()->address2 }}" class="form-control">
        					        </div>
        							
        						</div>



        						<div class="col-md-4">
        							<div class="form-group">
        						       <label>Citty</label>
        						       <input type="text" name="city" value="{{ Auth::user()->city }}" class="form-control">
        					        </div>
        							
        						</div>


        						<div class="col-md-4">
        							<div class="form-group">
        						       <label>State</label>
        						       <input type="text" name="state" value="{{ Auth::user()->state }}" class="form-control">
        					        </div>
        							
        						</div>


        						<div class="col-md-4">
        							<div class="form-group">
        						       <label>PinCode/Zip code</label>
        						       <input type="text" name="pincode" value="{{ Auth::user()->pincode }}" class="form-control">
        					        </div>
        							
        						</div>



        						<div class="col-md-4">
        							<div class="form-group">
        						       <label>Phone Number</label>
        						       <input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control">
        					        </div>
        							
        						</div>

        						<div class="col-md-4">
        							<div class="form-group">
        						       <label> Alternative Phone Number</label>
        						       <input type="text" name="alternate_phone" value="{{ Auth::user()->alternate_phone }}" class="form-control">
        					        </div>
        							
        						</div>

        						<div class="col-md-4">
        							<div class="form-group">
        						       
        						       <button type="submit" class="btn btn-primary"> Update Profile</button>
        					        </div>
        							
        						</div>

        						<div class="col-md-4">
        							<input type="file" name="image" class="form-control">
        							<img  name="image"src="{{ asset('uploads/profile/'.Auth::user()->image) }}" class="w-75 pt-3" alt="">
        							
        						</div>


        						
        						
        					</div>
        					
        					
        				</form>
        				
        			</div>
        			
        		</div>
        		
        	</div>

        </div>
          
    </div>
</section>
@endsection  	