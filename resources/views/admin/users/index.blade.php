@extends('layouts.admin')


@section('content')



  <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a>
            <span>/</span>
            <span>Registered Users</span>
          </h4>

          
        </div>

      </div>
      <!-- Heading -->

     
      <div class="row wow fadeIn">
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-body">

             <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach($users as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                   <td>{{ $item->role_as }}</td>
                  <td>
                    <a href="" class="badge badge-pill btn-primary px-3 py-2">EDIT</a>
                    <a href="" class="badge badge-pill btn-danger px-3 py-2">DELETE</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
               
             </table>
            </div>
          </div>
        </div>
      </div>
     
    
   

    </div>

  
@endsection