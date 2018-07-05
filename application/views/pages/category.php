<!DOCTYPE html>
<html lang="en">
<head>
  <title> CATEGORY PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="icon" href="<?php echo base_url("assets/images/icon1.jpg"); ?>" type="image/icon">
  <link rel="stylesheet"  href="<?php echo base_url();?>/assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	.logo_area{width:100%;height: 15% display:inline;background-color: #EEEFEE}
    .logo{font-size:65px; line-height:50px; font-family:georgia; color:#F92503;}
    .logo:hover, .logo:focus{text-decoration:none; outline:none}
    a.logo b{color:#09c}
  	.logo > span{font-size:20px; font-family:georgia;display:block}
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
         <li>
       <?php if(!$this->session->userdata('logged_in')) : ?>
         <li>
        <a href="<?php echo base_url(); ?>users/register" style="color:; background-color:;" ><h4>Register</h4></a>
        </li>
        <?php endif; ?>


     </ul>
      <form class="navbar-form navbar-right">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <?php if(!$this->session->userdata('logged_in')) : ?>
        <li><a href="<?php echo base_url(); ?>users/login"><span class="glyphicon glyphicon-user"></span> Log In</a></li>
        <?php endif; ?>
        <?php if($this->session->userdata('logged_in')) : ?>
          <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
        <?php endif; ?>
      </ul>
    </div>
   </div>
  </nav> 

  <br><hr>

 <div class="header_bottom">

        <img src="<?php echo base_url("assets/images/icon.jpg"); ?>" alt="no icon" align="right" width= "15%" height="150">
        <div class="logo_area"><a class="logo" href="#"><b>T</b>he News World <span><b>It's Time To Get Connected...</b></span></a>


 <div class="navbar-collapse collapse">
 <ul class="nav navbar-nav navbar-left">
      <li><a href="<?php echo base_url(); ?>categories"><p style="color: blue" >Categories &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-option-vertical"></i></p></a></li>
      <li><a href="<?php echo base_url(); ?>/posts"><p style="color: blue" >Popular posts &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-option-vertical"></i></p></a></li>
      <li><a href="<?php echo base_url(); ?>posts/featured"><p style="color: blue" >Featured posts &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-option-vertical"></i></p></a></li>
      <li><a href="<?php echo base_url(); ?>posts/editor"><p style="color: blue" >Editor's Pick &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-option-vertical"></i></p></a></li>
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
    <br>
<h3 style="text-align: center; color:#082843; "><strong><u><mark> TECHNOLOGY</mark></u></strong></h3>
<br>
<div class="container-fluid">
  <div class="column">
    <div class="col-sm-8 col-md-8 col-lg-8" >
      <div class="panel panel-default">
        <div class="panel-body">
        <div class="navbar-collapse collapse">
      <!--ul class="nav navbar-nav navbar-left">
      <li class="active"><a href="#"><p  style="color:#082843" ><strong>All</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-option-vertical"></i></p></a></li>
      <li><a href="#"><p style="color: #082843" ><strong>Articles </strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-option-vertical"></i></p></a></li>
      <li><a href="#"><p style="color: #082843" ><strong>Slideshows </strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-option-vertical"></i></p></a></li>
      <li><a href="#"><p style="color: #082843" ><strong>Videos </strong></p></a></li>
    </ul>
   </div-->
         <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#"><h4><strong>All</strong></h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><h4><strong>Articles</strong></h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><h4><strong>Slideshows</strong></h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><h4><strong>Videos</strong></h4></a>
        </li>
      </ul> 
      </div>
      
      <div class="col-sm-4 col-md-4 col-lg-4">
        
        <img src="<?php echo base_url("assets/images/flight.jpg"); ?>" width="100%">
        <br><br>
        <p>TECH BUZZ</p>
        <a href="<?php echo base_url(); ?>/article"><p><strong>Investigators insist MH370 crash was an accident</strong></p></a>
        <small> May 30,2018 | XYZ</small>
        <p>Four years after MH370 vanished, the debate has reignited over what, exactly, happened to the plane.
          The back-and-forth comes after a panel of aviation experts .......</p>

        <p> <span class="glyphicon glyphicon-eye-open"></span><strong>Views <span class="badge">5</span></strong> &nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-thumbs-up"></span><strong>Likes</strong> <span class="badge">2</span>  &nbsp;&nbsp;&nbsp;&nbsp; <strong>Comments </strong><span class="badge">0</span> </p>
        <hr>
        <br>
         <img src="<?php echo base_url("assets/images/flight.jpg"); ?>" width="100%">
        <br><br>
        <p>TECH BUZZ</p>
        <a href="#"><p><strong>Investigators insist MH370 crash was an accident</strong></p></a>
        <small> May 30,2018 | XYZ</small>
        <p>Four years after MH370 vanished, the debate has reignited over what, exactly, happened to the plane.
          The back-and-forth comes after a panel of aviation experts .......</p>

        <p> <span class="glyphicon glyphicon-eye-open"></span><strong>Views <span class="badge">5</span></strong> &nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-thumbs-up"></span><strong>Likes</strong> <span class="badge">2</span>  &nbsp;&nbsp;&nbsp;&nbsp; <strong>Comments </strong><span class="badge">0</span> </p>

      </div>
      
      <div class="col-sm-4 col-md-4 col-lg-4">
       <img src="<?php echo base_url("assets/images/flight.jpg"); ?>" width="100%">
        <br><br>
        <p>TECH BUZZ</p>
        <a href="#"><p><strong>Investigators insist MH370 crash was an accident</strong></p></a>
        <small> May 30,2018 | XYZ</small>
        <p>Four years after MH370 vanished, the debate has reignited over what, exactly, happened to the plane.
          The back-and-forth comes after a panel of aviation experts .......</p>

        <p> <span class="glyphicon glyphicon-eye-open"></span><strong>Views <span class="badge">5</span></strong> &nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-thumbs-up"></span><strong>Likes</strong> <span class="badge">2</span>  &nbsp;&nbsp;&nbsp;&nbsp; <strong>Comments </strong><span class="badge">0</span> </p>
        
        <hr><br>
         <img src="<?php echo base_url("assets/images/flight.jpg"); ?>" width="100%">
        <br><br>
        <p>TECH BUZZ</p>
        <a href="#"><p><strong>Investigators insist MH370 crash was an accident</strong></p></a>
        <small> May 30,2018 | XYZ</small>
        <p>Four years after MH370 vanished, the debate has reignited over what, exactly, happened to the plane.
          The back-and-forth comes after a panel of aviation experts .......</p>

        <p> <span class="glyphicon glyphicon-eye-open"></span><strong>Views <span class="badge">5</span></strong> &nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-thumbs-up"></span><strong>Likes</strong> <span class="badge">2</span>  &nbsp;&nbsp;&nbsp;&nbsp; <strong>Comments </strong><span class="badge">0</span> </p>
      </div>
      
      <div class="col-sm-4 col-md-4 col-lg-4">
       <img src="<?php echo base_url("assets/images/flight.jpg"); ?>" width="100%">
        <br><br>
        <p>TECH BUZZ</p>
        <a href="#"><p><strong>Investigators insist MH370 crash was an accident</strong></p></a>
        <small> May 30,2018 | XYZ</small>
        <p>Four years after MH370 vanished, the debate has reignited over what, exactly, happened to the plane.
          The back-and-forth comes after a panel of aviation experts .......</p>

        <p> <span class="glyphicon glyphicon-eye-open"></span><strong>Views <span class="badge">5</span></strong> &nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-thumbs-up"></span><strong>Likes</strong> <span class="badge">2</span>  &nbsp;&nbsp;&nbsp;&nbsp; <strong>Comments </strong><span class="badge">0</span> </p>
        <hr><br>
         <img src="<?php echo base_url("assets/images/flight.jpg"); ?>" width="100%">
        <br><br>
        <p>TECH BUZZ</p>
        <a href="#"><p><strong>Investigators insist MH370 crash was an accident</strong></p></a>
        <small> May 30,2018 | XYZ</small>
        <p>Four years after MH370 vanished, the debate has reignited over what, exactly, happened to the plane.
          The back-and-forth comes after a panel of aviation experts .......</p>

        <p> <span class="glyphicon glyphicon-eye-open"></span><strong>Views <span class="badge">5</span></strong> &nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-thumbs-up"></span><strong>Likes</strong> <span class="badge">2</span>  &nbsp;&nbsp;&nbsp;&nbsp; <strong>Comments </strong><span class="badge">0</span> </p>
        <br>
      </div>

        </div>
      </div>
    </div>
  </div>

 <div class="column">
    <div class="col-sm-4 col-md-4 col-lg-4" >
      <div class="panel panel-default">
        <div class="panel-body">

          <div style="text-align: center;">
        <button type="button" class="btn btn-info" style="text-align: center;"><i class="glyphicon glyphicon-flash"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-flash">&nbsp;</i><i class="glyphicon glyphicon-flash"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-flash">&nbsp;</i><u>ADS</u>&nbsp;&nbsp;<i class="glyphicon glyphicon-flash"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-flash"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-flash"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-flash"></i></button>
        <br><br>
        <div class="col-sm-6 col-md-6 col-lg-6" >
        <img src="<?php echo base_url("assets/images/ads.png"); ?>" alt="no iamge" width="100%" height="100">
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6" >
        <img src="<?php echo base_url("assets/images/ads.png"); ?>" alt="no iamge" width="100%" height="100">
        </div>

        <br>
        <div class="col-sm-6 col-md-6 col-lg-6" >
        <br>
        <img src="<?php echo base_url("assets/images/ads.png"); ?>" alt="no iamge" width="100%" height="100">
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6" >
        <br>
        <img src="<?php echo base_url("assets/images/ads.png"); ?>" alt="no iamge" width="100%" height="100">
        <br><br>
        </div>
        <hr>
        <button type="button" class="btn btn-warning" style="text-align: center;"><i class="glyphicon glyphicon-flash"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-flash">&nbsp;</i><i class="glyphicon glyphicon-flash"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-flash">&nbsp;</i><u>FEATURED VIDEO</u>&nbsp;&nbsp;<i class="glyphicon glyphicon-flash"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-flash"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-flash"></i>&nbsp;&nbsp;<i class="glyphicon glyphicon-flash"></i></button>
        <br><br>
        <img src="<?php echo base_url("assets/images/video.png"); ?>" alt="no image" width="100%" height="200">        

        </div>
       </div>
      </div>
    </div> 

  </div>

  <br><br><br>

  <nav class="navbar navbar-inverse navbar-fixed-bottom" style="background-color:#082843">
  <div class="container-fluid">

  <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar1" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
              </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar1" >
    <ul class="nav navbar-nav" style="position: absolute;left: 30%;right:30%">
      <li><a href="<?php echo base_url(); ?>posts/questions" >Ask A Question</a></li>
      <li><a href="<?php echo base_url(); ?>forum">Forum<span class="badge">new</span></a></li>
      <li><a href="#">Feedback</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    </div>
  </div>
</nav> 
 
</body>
</html>