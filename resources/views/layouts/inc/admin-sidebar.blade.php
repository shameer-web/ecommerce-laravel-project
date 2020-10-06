 <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

     
        <div>
          
       <h2 class="text-primary font-weight-bold deep-orange-lighter-hover mb-3 logo-wrapper"><b>FABCART</b></h2>
        </div>
      

      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item active waves-effect">
          <i class="fa fa-pie-chart mr-3"></i>Dashboard
        </a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fa fa-user mr-3"></i>Profile</a>


        <div class="dropdown">
                   <a href="" class="list-group-item list-group-item-action waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fa fa-user mr-3"></i> Collections
                   </a>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="{{ url('/group') }}">Group</a>
                    <a class="dropdown-item" href="{{ url('/category') }}">Category</a>
                    <a class="dropdown-item" href="{{ url('/sub-category') }}">Sub Category</a>
                    <a class="dropdown-item" href="#">Products(Items)</a>
                   
                       
                </div>
              </div>  
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fa fa-table mr-3"></i>Tables</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fa fa-map mr-3"></i>Maps</a>
        <a href="{{ url('registered-user') }}" class="list-group-item list-group-item-action waves-effect">
          <i class="fa fa-users mr-3"></i>Registered User</a>
      </div>

    </div>
    <!-- Sidebar -->
