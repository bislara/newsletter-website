<!DOCTYPE html>
<html lang="en">
<head>
  <title>THE NEWS WORLD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="icon" href="<?php echo base_url("assets/images/icon1.jpg"); ?>" type="image/icon">
  <link rel="stylesheet"  href="<?php echo base_url();?>/assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style >
    .logo_area{width:100%;height: 15% display:inline;background-color: #EEEFEE}
    .logo{font-size:65px; line-height:50px; font-family:georgia; color:#F92503;}
    .logo:hover, .logo:focus{text-decoration:none; outline:none}
    a.logo b{color:#09c}
  	.logo > span{font-size:20px; font-family:georgia;display:block}
    .top-right {
    position: absolute;
    top: 8px;
    right: 8px;
}
  .container {
    position: relative;
    text-align: center;
    color: white;
}
.centered {
    position: absolute;
    top: 80%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.month {
    padding: 40px 10px;
    width: 100%;
    background: #082843;
    text-align: center;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 15px;
}

.month .next {
    float: right;
    padding-top: 15px;
}

.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:15px;
    color: #777;
}

.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:900px) {
    .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
    .weekdays li, .days li {width: 12.5%;}
    .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}
}

  </style>
 </head>
 <body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
 <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#082843">
  <div class="container-fluid">
    <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
              </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><h4 style="color: #09F619 ;font-family:georgia;">THE NEWS WORLD</h4> </a>   
        
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav">

        <li class="active" ><a href="<?php echo base_url(); ?>" style="color:"><h4><span class="glyphicon glyphicon-home"></span>Home</h4></a></li>
        <li>
        <a href="<?php echo base_url(); ?>/category" style="color:; background-color:;" ><h4>Technology</h4></a>
        </li>
         <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:; background-color:;" ><h4>Entertainment<span class="caret"></span></h4></a>
        <ul class="dropdown-menu">
          <li><a href="#">Music</a></li>
          <li><a href="#">Comedy</a></li>
          <li><a href="#">Magic</a></li>
          <li><a href="#">Dance</a></li>
          <li><a href="#">Circus</a></li>
        </ul>
        </li>
         <li>
        <a href="#" style="color:; background-color:;" ><h4>Sports</h4></a>
        </li>
         <li>
        <a href="#" style="color:; background-color:;" ><h4>Health</h4></a>
        </li>
         <li>
        <a href="#" style="color:; background-color:;" ><h4>Weather</h4></a>
        </li>
        <?php if(!$this->session->userdata('logged_in')) : ?>
         <li>
        <a href="<?php echo base_url(); ?>users/register" style="color:; background-color:;" ><h4>Register</h4></a>
        </li>
        <?php endif; ?>


     </ul>
     
     <?= form_open('posts/search',['class'=>'navbar-form navbar-right','role'=>'search']) ?>
      <!--form class="navbar-form navbar-right" action="<?php echo base_url('posts/search');?>" method="post"-->
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
      <?= form_close(); ?>
      <?= form_error('search',"<p class='navbar-text'>",'</p>') ?>
    
      <ul class="nav navbar-nav navbar-right">
        <?php if(!$this->session->userdata('logged_in')) : ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Log In</a>
          <ul class="dropdown-menu">
          <li><a href="<?php echo base_url(); ?>users/login">As a user</a></li>
          <li><a href="<?php echo base_url(); ?>admin/login">As a admin</a></li>
        </ul>
        </li>
        <?php endif; ?>
        <?php if($this->session->userdata('logged_in')) : ?>
          <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
        <?php endif; ?>

      </ul>
    </div>
   </div>
  </nav> 

  <hr><hr>

 <div class="header_bottom">

        <img src="<?php echo base_url("assets/images/icon.jpg"); ?>" alt="no icon" align="right" width= "15%" height="150">
        <div class="logo_area"><a class="logo" href="#"><b>T</b>he News World <span><b>It's Time To Get Connected...</b></span></a>


 <div class="navbar-collapse collapse">
 <ul class="nav navbar-nav navbar-left">
      <li><a href="#"><p style="color: blue" >Advertising &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-option-vertical"></i></p></a></li>
      <li><a href="<?php echo base_url(); ?>posts"><p style="color: blue" >Popular posts &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-option-vertical"></i></p></a></li>
      <li><a href="<?php echo base_url(); ?>posts/featured"><p style="color: blue" >Featured posts &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-option-vertical"></i></p></a></li>
      <li><a href="#"><p style="color: blue" >Photos &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-option-vertical"></i></p></a></li>
      <li><a href="#"><p style="color: blue" >Videos </p></a></li>
    </ul>
   </div>
   </div>
  </div>
 <div class="navbar-collapse collapse" style="background-color: #8BA6E6">


        
       <ul class="nav navbar-nav navbar-left">
      <li> <p style="text-decoration-color: blue"><h4>Latest News<i class="glyphicon glyphicon-chevron-right"></i></h4></p></li>
        <li><a href="<?php echo base_url(); ?>/article"><span class="glyphicon glyphicon-record"></span><strong> My First News Item</strong></a></li>
      <?php foreach($posts as $post) : ?>
        
        <li><a href="<?php echo site_url('/posts/'.$post['slug']);?>"><span class="glyphicon glyphicon-record"></span><strong><?php echo $post['title']; ?></strong></a></li>
        <!--li><a href="#"><span class="glyphicon glyphicon-record"></span><strong> My Third News Item</strong></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-record"></span><strong>My Four News Item</strong></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-record"></span><strong>My Five News Item</strong></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-record"></span><strong>My Six News Item</strong></a></li-->
      <?php endforeach; ?>
      
      </ul>
    
    </div>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
 <div class="container-fluid">
      <?php if($this->session->flashdata('user_registered')): ?>
         <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>
      
      <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('forum_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('forum_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('comment_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('comment_deleted').'</p>'; ?>
      <?php endif; ?>