@extends('layouts.admin')


@section('content')



  <div class="container-fluid mt-5">

       {{-- Heading --}}

        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#" >Collections</a>
            <span>/</span>
            <span>Category</span>

             <a href="{{ url('category-deleted-records') }}" class=" badge py-2 btn btn-primary text-white float-right ml-2">Deleted Records</a>
            <a href="{{ url('category-add') }}" class="badge py-2 btn btn-primary text-white float-right">Add Category</a>


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
              <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                
                   <th>ID</th>
                   <th>Name</th>
                   <th>Group name</th>
                  {{--  <th>Descriptions</th> --}}
                    <th>Image</th>
                    <th>Icon</th>
                   <th>Show/Hide</th>
                   <th>Actions</th>
                    </tr>
                    </thead>
                    @foreach ($category as $item)

                      <tbody>
                    <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->group->name }}</td>

                    {{-- <td>{{ $item->description }}</td> --}}

                    <td>
                      <img src="{{ asset('uploads/category_image/'.$item->category_image) }}" width="50px" alt="">
                    </td>

                    <td>
                      <img src="{{ asset('uploads/category_icon/'.$item->category_icon) }}" width="75px" alt="">
                    </td>
                    <td>
                     <input type="checkbox"{{ $item->status == '1' ? 'checked' : '' }}>
                    </td>
                    <td>
                     <a href="{{ url('category-edit/'.$item->id) }}" class="badge btn-primary"> Edit</a>
                     <a href="{{ url('category-delete/'.$item->id) }}" class="badge btn-danger"> Delete</a>
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