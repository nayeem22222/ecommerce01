
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Dashboard Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="{{asset('assets/backend/css/bootstrap.min.css')}}" rel="stylesheet" >

<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/backend/css/dashboard.css')}}" rel="stylesheet">
  </head>
  <body>
    
@include('backend.partials._header')

<div class="container-fluid">
  <div class="row">
    
  @include('backend.partials._navbar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
@yield('main')    
    </main>
  </div>
</div>


    <script src="{{asset('assets/backend/js/bootstrap.bundle.min.js')}}" ></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" ></script>
      <script src="{{asset('assets/backend/js/dashboard.js')}}"></script>
  </body>
</html>
