<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.1.0.js');?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">

   <script src="<?php echo base_url('assets/sweetalert/sweetalert.min.js');?>"></script>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css');?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Basic Contact List</a> 
   <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <?php echo anchor('welcome','Home',['class' => 'nav-link']);?>
      </li>
      <li class="nav-item">
        <?php echo anchor('welcome/logs','Logs',['class' => 'nav-link']);?>
      </li>
      <li class="nav-item">
        <?php echo anchor('welcome/recentdeleted','Recently Deleted',['class' => 'nav-link']);?>
      </li>
    </ul>
  </div>
</nav>
