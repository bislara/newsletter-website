<!DOCTYPE html>
<html lang="en">
<head>
 <title> ADMIN PANEL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="icon" href="<?php echo base_url("assets/images/icon1.jpg"); ?>" type="image/icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

</style>
</head>
​<body>
  <div id="preloader">
  <div id="status">&nbsp;</div>
</div>

<h2 style="text-align: center; color: #ff6347"><mark>DASHBOARD</mark></h2><br><br>
<div class="container-fluid">
  <div class="column">
    <div class="col-sm-4 col-md-4 col-lg-4" >
     
    <div class="container-fluid">

    <ul class="list-group">
    <li class="list-group-item list-group-item-action list-group-item-danger"><i class="glyphicon glyphicon-home"></i><a href="<?php echo base_url(); ?>/admin"> Home</a></li>
    <li href="#" class="list-group-item list-group-item-action list-group-item-warning"><p style="text-align: right;"><img src="<?php echo base_url("assets/images/icon.jpg"); ?>" align="left" width="13%"><u>Biswajeet Sahoo</u>
      <?php if(!$this->session->userdata('logg_in')) : ?>
      <u><a href="<?php echo base_url(); ?>/admin_user/login">Login</a></u>
    <?php endif; ?>
      <?php if($this->session->userdata('logg_in')) : ?>
      <u><a href="<?php echo base_url(); ?>/admin_user/logout">Logout</a></u>
    <?php endif; ?>
    </p>
  </li>
      <li class="list-group-item list-group-item-action">
      <div class="dropdown dropright">
          
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Article &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="<?php echo base_url(); ?>/posts/admin/browse">Browse</a><hr>
      <a class="dropdown-item" href="<?php echo base_url(); ?>/posts/admin/add">Add new</a><hr>
      <!--a class="dropdown-item" href="#">Add image</a-->
      </div>
      </div>
    </li>
    <li class="list-group-item list-group-item-action">
      <div class="dropdown">
          
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Student Pulse &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Browse</a><hr>
      <a class="dropdown-item" href="#">Add new</a>
      </div>
      </div>
    </li>
    <li class="list-group-item list-group-item-action">
      <div class="dropdown dropright">
          
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Comments &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="<?php echo base_url(); ?>/admin/comments">All</a>
      </div>
      </div>
    </li>

    </ul>
    </div>
  </div>
    </div>

     <?php if($this->session->flashdata('admin_registered')): ?>
         <?php echo '<p class="alert alert-success">'.$this->session->flashdata('admin_registered').'</p>'; ?>
      <?php endif; ?>

      s<?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('admin_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('admin_loggedin').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('admin_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('admin_loggedout').'</p>'; ?>
      <?php endif; ?>


