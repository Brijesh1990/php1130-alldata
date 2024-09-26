<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Laravel crud operations : @yield('title_name')</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- bootstrap stylesheet -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- bootstrap icons stylesheet -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{asset('assets/crud/css/style.css')}}" />
<!-- bootstrap js file -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
<!-- header start here -->
<div class="container-fluid p-4 bg-white">
<div class="row">
<div class="col-md-3"><h4>Call Us:(+91)9998003879</h4></div>
<div class="col-md-6 ms-3"><input type="text" placeholder="search anything here" class="form-control" /></div>
<div class="col-md-2 ms-3">
<a href="/create-account"><button type="button" class="btn btn-md btn-dark bg-dark text-white">CreateAccount</button></a>
</div>
</div>
</div>

<!-- navbar start here -->
<nav class="nav navbar navbar-expand-md p-2 bg-dark text-white">
<a href="" class="navbar-brand ms-4 text-white">Laravel Crud App</a>
<ul class="navbar-link">
<li><a href="/">Home</a></li>
<li><a href="/about-us">About</a></li>
<li><a href="#" data-bs-toggle="modal" data-bs-target="#ademp">AddEmployee</a></li>
<li><a href="#">Manage Employee</a></li>
<li><a href="/contact-us">Contact us</a></li>
</ul>
</nav>
<!-- content start here -->
@yield('content')
<!-- content end here -->
<!-- footer start here -->
<div class="bg-dark text-white mt-5 p-5">
<p class="text-white">Copyright@2024 all right reserved</p>
</div> 
</body>
</html>