<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/style.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>"/>
<title>My Home Page</title>
</head> 
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?=site_url('home')?>">HOME</a></li>
        <li><a href="<?=site_url('auth/login')?>">LOGIN</a></li>
        <li><a href="<?=site_url('auth/register')?>">Register</a></li>
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
	<div class="row">
		
	</div>
</div>
<?php $this->load->view('partials/messages'); ?>