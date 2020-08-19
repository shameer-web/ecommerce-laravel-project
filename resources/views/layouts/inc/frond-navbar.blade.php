<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
       <h2> <strong class="blue-text font-weight-bold deep-orange-lighter-hover mb-3 logo-wrapper">FABCART</strong></h2>

      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
       

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons ml-auto">
        
          <li class="nav-item">
            <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank">Collections</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">New Arrivals</a>
          </li>

           <li class="nav-item">
            <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">All Products</a>
          </li>


          <li class="nav-item">
            <a class="nav-link waves-effect">
              
              <i class="fas fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Cart </span>
              <span class="badge red z-depth-1 mr-1"> 1 </span>
            </a>
          </li>
          

          <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

            <!-- End Authentication Links -->

        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
