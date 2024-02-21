
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="PfDFTodLBcCGQQ7kEQhtYehJZSKjozldDeORGSiy">
<title>  SANHS VMIS</title>

<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<link href="https://hrms.depedbohol.org/css/app.css" rel="stylesheet">
<style>
    #container {
        width: 100%;
        height: 100%;
    }

    #container img {
        width: 100%;
    }
</style>
</head>
<body class="hold-transition sidebar-collapse layout-fixed layout-footer-fixed layout-navbar-fixed">
<div class="wrapper" id="app">
<nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top ">
<a class="navbar-brand" href="#">
<img src="img/sanhslogo.jpg" alt="Logo" style="width:30px;">
SANHS VMIS
</a>
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" href="/">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/reg">Register</a>
</li>
</ul>
</nav>
<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0 text-dark">Registration</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Registration</li>
</ol>
</div>
</div>
</div>
</div>
<div class="content load-register-modal">
<div class="container-fluid">
<div class="row">
<div class="col-md-9">
<div class="card card-outline card-primary" >
<div class="card-body">
<div class="row">
<div class="col-md-8">
<form method="POST" action="#">
<input type="hidden" name="_token" value="PfDFTodLBcCGQQ7kEQhtYehJZSKjozldDeORGSiy">
<h5>Personal Information</h5>
<div class="form-group row">
<label for="firstname" class="col-md-3 col-form-label text-md-right">Name</label>
<div class="col-md-8">
<input id="firstname" type="text" class="form-control " name="firstname" value autocomplete="firstname">
</div>
</div>
<div class="form-group row">
<label for="middlename" class="col-md-3 col-form-label text-md-right">Email Address</label>
<div class="col-md-8">
<input id="middlename" type="text" class="form-control " name="middlename" value autocomplete="middlename">
</div>
</div>
<div class="form-group row">
<label for="password" class="col-md-3 col-form-label text-md-right">Password</label>
<div class="col-md-8">
<input id="password" type="password" class="form-control " name="password" value autocomplete="new-password">
</div>
</div>
<div class="form-group row">
<label for="password-confirm" class="col-md-3 col-form-label text-md-right">Confirm Password</label>
<div class="col-md-8">
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
</div>
</div>
<div class="form-group row">
<div class="col-md-3">
</div>
<div class="col-md-8">
<input type="checkbox" id="confirmdataprivacy" name="confirmdataprivacy" value autocomplete="password">
<small>I agree to the data privacy terms of SANHS VMIS.</small>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-8">
<button type="submit" class="btn btn-primary float-right">
Register
</button>
<a href="#" class="btn btn-default">
Cancel
</a>
</div>
</div>
</div>
</form>
</div>
<div class="col-md-4">
<img src="img/sanhslogo.jpg" alt="Logo" style="width:250px;">
<footer class="main-footer">
<div class="float-right d-none d-sm-inline">
Developed by <strong><a href="#">12-ICT Researchers</a></strong>
</div>
<strong>Copyright &copy; 2020 <a href="#">SANHS VMIS</a>.</strong> All rights reserved.
</footer> </div>
</body>
</html>
