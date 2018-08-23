<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Cargo Plus</title>
  <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />

  <style type="text/css">
    body{
      height: 100%;
      min-height: 51.5rem;
      padding-top: 4.8rem;
    }
    .flex-container {
        display: flex;
        position: relative;
        
        
      }

      .main-content
      { background-color: red;
        min-height:600px !important;
      }

      .Zebra_DatePicker_Icon_Wrapper{
        width: 100% !important;
      }

      .dataTables_wrapper
      {
     
        margin:40px;
        position: relative;
        
      }

       .form-line:hover{
    background-color:  #eeeeee;
  }
  
  </style>
  
   
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    
  <link rel="stylesheet" href="{{ asset('css_js/css/zebra_datepicker.min.css') }}">
<link href="{{ asset('css_js/select2/css/select2.min.css') }}" rel="stylesheet" />
<link href="{{asset('css_js/css/bootstrap.css')}}" rel="stylesheet" />
<link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css_js/css/bootstrap.min.css')}}">
  <script src="{{ asset('css_js/js/jquery-min.js') }}"></script>
   <script src="{{ asset('css_js/js/popper.min.js')}}"></script>
    <script src="{{ asset('vendorbootstrap/js/bootstrap.min.js') }}"></script>



    <script src="{{ asset('css_js/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('css_js/js/zebra_datepicker.min.js') }}"></script>
    <script type="text/javascript"src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">



    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
   
  
 
 
   
</head>
<body class="bg-dark">
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Money Transfer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            
            <li class="nav-item">
              <a class="nav-link" href="{{url('page_1')}}">Send Money</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Prev Txns</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#">Contact List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Add Receivers</a>
            </li>

            
    </ul>
    

     <ul class="navbar-nav ml-auto">
       @guest

                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>

          @else
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} 
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">My Account</a>
                    <div class="dropdown-divider"></div>
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
   
    </ul>

        </div>
      </div>
    </nav>




<div class="container-fluid"> 
            @yield('content')
    
</div>

<script type="text/javascript">
  $(function() {

  console.log("Master ");
});

function confSubmit(form) {
if (confirm("Are you sure you want to delete?")) {
return true;
}

else {
return false;
}
}

</script> 




</body>
</html>