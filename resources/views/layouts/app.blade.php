<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/assets/images/favicon.png')}}">
    <title>@yield('title')</title>
    
    <link href="{{asset('assets/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <link href="{{asset('assets/assets/plugins/morrisjs/morris.css')}}" rel="stylesheet">
    
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    
    <link href="{{asset('assets/css/colors/blue.css')}}" id="theme" rel="stylesheet">
   @yield('css') 
</head>

<body class="fix-header fix-sidebar card-no-border">
    
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
   
    <div id="main-wrapper">
      
        @include('layouts.header')
       
        @include('layouts.sidebar')
        
        <div class="page-wrapper">
           
            
            <div class="container-fluid pt-3">
                @yield('content')
            </div>
           
           @include('layouts.footer')
           
        </div>
        
    </div>
    
    <script src="{{asset('assets/assets/plugins/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('assets/assets/plugins/morrisjs/morris.min.js')}}"></script>
   
    
    <script src="{{asset('assets/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
   
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
   
    <script src="{{asset('assets/js/waves.js')}}"></script>
   
    <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
   
    <script src="{{asset('assets/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
   
    
   
    <script src="{{asset('assets/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
   
    <script src="{{asset('assets/assets/plugins/raphael/raphael-min.js')}}"></script>
    
    <script src="{{asset('assets/js/dashboard1.js')}}"></script>
   
    <script src="{{asset('assets/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
     <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/validation.js')}}"></script>
    <script src="{{asset('assets/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
    @yield('script')

</body>

</html>