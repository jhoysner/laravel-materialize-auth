<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <script src="{{ url('/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('/bower_components/materialize/dist/js/materialize.min.js') }}"></script>
    <link href="{{ url('/bower_components/materialize/dist/css/materialize.min.css') }}" rel="stylesheet">
    
    <!-- Scripts -->
    <script src="{{ url('/bower_components/angular/angular.min.js') }}"></script>
    

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

        </script>

       <!-- Reset css--> 
        <style type="text/css">
          h1{font-weight:210;font-size: 1.9em}
        </style>
   
</head>
<body>


<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li>
    <a href="{{ url('/logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      Logout
    </a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
  </li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>

<nav class="blue">
  <div class="nav-wrapper">
    <ul class="left hide-on-med-and-down">
    <li>
      <a href="#!" class="brand-logo">Logo</a>
    </li>
      <li>
    <form>
        <div class="input-field">
          <input id="search" type="search" value='nemo en barinas' required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </li>  
    </ul>

    <ul class="right hide-on-med-and-down">

    

      @if (Auth::guest())
         <li><a href="{{ url('/login') }}">Login</a></li>
         <li><a href="{{ url('/register') }}">Register</a></li>
        @endif

      @if (!Auth::guest())
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
      @endif


      

      <!-- Dropdown Trigger -->
    </ul>
  </div>
</nav>
      

      <style type="text/css">
        nav .brand-logo {
          margin-left: 20px;
        }
nav form {
  margin-left: 140px;
  width: 60%;
  height: 64px;
  
}

      </style>     

    @yield('content')
    
</body>
</html>
