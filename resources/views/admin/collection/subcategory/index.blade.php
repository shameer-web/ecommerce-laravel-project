@extends('layouts.admin')


@section('content')

 <!-- Modal -->
<div class="modal fade" id="subcategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sub-Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
        <form action="{{ url('sub-category-store') }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="row">

              <div class="col-md-6">
                <div class="form-group">
                  <label>Category Id(Name)</label>
                        <select name="category_id" class="form-control">

                             <option value="">Select</option>}
                            
                              @foreach($category as $cat_item)

                                 <option value="{{ $cat_item->id }}">{{ $cat_item->name }}</option>
                              @endforeach
                                 
                        </select>        
                </div>
                
              </div>

              <div class="col-md-6">
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


              <div class="col-md-6">
                <div class="form-group">
                  <label> Image</label>
                                <input type="file" name="subcategory_image" class="form-control" placeholder="">             
                </div>
                
              </div>
             

              <div class="col-md-6">
                <div class="form-group">
                  <label> Priority </label>
                                <input type="number" name="priority" class="form-control" placeholder="Enter the Priority">             
                </div>
                
              </div>

              


              <div class="col-md-12">
                <div class="form-group">
                  <label> Show/Hide</label>
                                <input type="checkbox" name="status">             
                </div>
                
              </div>


             
              
            </div>           
         


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal -->



  <div class="container-fluid mt-5">

       {{-- Heading --}}

        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#" >Collections</a>
            <span>/</span>
            <span>Sub Category</span>

             <a href="{{ url('sub-category-deleted-records') }}" class=" badge py-2 btn btn-primary text-white float-right ml-2">Deleted Records</a>
            <a href="#" data-toggle="modal" data-target="#subcategoryModal" class="badge py-2 btn btn-primary text-white float-right">Add Category</a>


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
                   <th>Category name</th>
                  {{--  <th>Descriptions</th> --}}
                    <th>Image</th>
                   <th>Show/Hide</th>
                   <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                      @foreach($subcategory as $items)
                      <tr>
                        <td>{{ $items->id }}</td>
                        <td>{{ $items->name }}</td>
                        <td>{{ $items->category->name }}</td>
                        <td>
                           
                            <img src="{{ asset('uploads/subcategory/'.$items->subcategory_image) }}" width="75px" alt="">
                        </td>
                        


                        <td>
                           <input type="checkbox"{{ $items->status == '1' ? 'checked' : '' }}>
                        </td>
                        <td>
                          <a href="{{ url('sub-category-edit/'.$items->id) }}" class="badge btn-primary"> Edit</a>
                          <a href="{{ url('sub-category-delete/'.$items->id) }}" class="badge btn-danger"> Delete</a>
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