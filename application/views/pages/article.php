<!DOCTYPE html>
<html lang="en">
<head>
  <title>SAMPLE PAGE</title>
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
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>

<div class="container-fluid">
  <div class="column">
    <div class="col-sm-8 col-md-8 col-lg-8" >
    	<div class="panel panel-default">
        <div class="panel-body">
        <h3 style="color:  #0CBD0D ;" align=""><u><mark>TECHNOLOGY</mark></u></h3>
        <h2 style="font-family: courier;"><strong>Drones, AI, and smart meetings at the beginning of the Microsoft Build conference</strong></h2><br>
		<h4><small>What you need to know about the company's developers' event.</small></h4>
		<h5> <small>By Rob Verger May 30, 2018</small></h5>
		 <img src="<?php echo base_url("assets/images/drone.jpg"); ?>" alt="no image" width="100%" height="400">
		 <h4><small>Microsoft highlighted its collaboration with drone-maker DJI.</small></h4>
		 <h5><small>Microsoft</small></h5>
		 <hr>
		 <p>
		 	Microsoft kicked off its annual conference for developers, called Build, on Monday. “The world is becoming a computer,” Satya Nadella, the company’s CEO, said towards the beginning of his keynote address, describing the way that computing power is starting to be found everywhere, from cars to drones to homes. That pretty unsurprising idea, plus heavy doses of talk about artificial intelligence, AI and accessibility, mixed reality, chatbots, the cloud, and the “edge”—the computers and phones you actually interact with—defined the first hours of the event.
		 	<br>
			<h3><strong><mark>We got to see Alexa and Cortana hanging out</mark></strong></h3><br>
			We live in a world of talking digital helpers, from Siri, to the Google Assistant, to Amazon Alexa, and Microsoft’s version, Cortana. While Amazon and Microsoft announced back in August of last year that the two companies would be collaborating to make their two virtual assistants work together, today we saw a version of that in action.<br>
			If you’re imagining Alexa and Cortana freely talking to each other like two robotic hosts in Westworld, you are out of luck. However, what they showed was still interesting.<br>
			Meghan Saunders, general manager for Cortana at Microsoft, and Tom Taylor, a senior vice president for Alexa at Amazon, joined each other on stage for a demonstration. Speaking into an Echo, Saunders added an item to her shopping list through Alexa, then asked Alexa to open Cortana. From there, Cortana spoke to Saunders through the Echo, read her schedule out loud, then helped her send an email to Taylor.<br>
            Taylor then started speaking with Cortana from a computer, then asked it to open Alexa. Alexaspoke to him through the computer, then called him an Uber to a restaurant called Harvest Vine.<br>
		 </p>
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