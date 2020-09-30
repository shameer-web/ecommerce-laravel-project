@extends('layouts.admin')


@section('content')



  <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
           
            <span>Registered Users - Edit Role</span>
          </h4>

          
        </div>

      </div>
      <!-- Heading -->

     
      <div class="row wow fadeIn">
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-body">

                   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <h4>Current Role : {{ $user_role->role_as }} </h4>
                 <h5>
                   isBan Status :
                    @if($user_role->isban == '0')
                      <label class="py-2 px-3 badge   btn-primary">Not Banned</label>
                    
                    @elseif($user_role->isban == '1')
                      <label class="py-2 px-3 badge  btn-danger">Banned</label>
                      
                    @endif

                 </h5>



                  <form action="{{ url('role-update',$user_role->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                      <input type="text" name="name"  class="form-control" value="{{ $user_role->name }}">
                    </div>

                    <div class="form-group">
                      <input type="text"  readonly class="form-control" value="{{ $user_role->email }}">
                    </div>

                    <div class="form-group">
                      <select name="roles" class="form-control">
                        <option value="">--Select Roles--</option>
                        <option value="">Default</option>
                        <option value="admin">Admin</option>
                        <option value="vendor">Vendor</option>
                       
                      </select>

                    </div>


                    <div class="form-group">
                      <select name="isban" class="form-control">
                        <option value="">--Select Ban or UnBan--</option>
                        <option value="0">Un-Banned</option>
                        <option value="1">Banned</option>
                       
                      </select>

                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>


                    <div class="form-group">
                    <input type="text" name="email"  class="form-control">
                   </div>




            </div>
          </div>
        </div>
      </div>
     
    
   

</div>
@endsection