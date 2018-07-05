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

  <hr><hr>

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
  <div class="row">
    <div class="col-sm-4 col-md-4 col-lg-4" >

      <div class="container-fluid">
      <img src="<?php echo base_url("assets/images/news.jpg"); ?>" alt="Norway" width="100%" height="300" " align="">
      <div class="top-right"><p style="color:red"><strong>Views<i class="glyphicon glyphicon-eye-open"></i></strong></p>
      <p style="color:red"><strong><a href="#" style="color:red">9 &nbsp; Comments</a><i class="glyphicon glyphicon-comment"></i></strong></p></div>

      <div class="centered"><h4 style="color:#0CBD0D"> <a href="#" style="color:#0CBD0D"><b> Amazing Movie posters &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;of all timesS </b></h4></a>
        
      </div>

        
        </div>
        </div>
<div class="col-sm-4 col-md-4 col-lg-4" >

       <div class="container-fluid">
       <img src="<?php echo base_url("assets/images/news1.jpg"); ?>" alt="Norway" width="100%" height="300" " align="">
      <div class="top-right"><p style="color: red"><strong>Views<i class="glyphicon glyphicon-eye-open"></i></strong></p>
      <p style="color: red"><strong><a href="#" style="color: red">10 &nbsp; Comments</a><i class="glyphicon glyphicon-comment"></i></strong></p></div>

      <div class="centered"><h4 style="color:#0CBD0D"> <a href="#" style="color:#0CBD0D"><b> Amazing Movie posters &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;of all timesS </b></h4></a>
        
      </div>
        </div>
        </div>
    <div class="col-sm-4 col-md-4 col-lg-4" >

     <div class="container-fluid">
      
       <img src="<?php echo base_url("assets/images/news2.jpg"); ?>" alt="Norway" width="100%" height="300" " align="">
      <div class="top-right"><p style="color: red"><b>Views<i class="glyphicon glyphicon-eye-open"></i></b></p>
      <p style="color: red"><b><a href="#" style="color: red">12 &nbsp; Comments</a><i class="glyphicon glyphicon-comment"></i></b></p></div>

      <div class="centered"><h4 style="color:#0CBD0D"> <a href="#" style="color:#0CBD0D"><b> Amazing Movie posters &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;of all timesS </b></h4></a>
        
      </div>
    </div>
   </div>
   </div>
 </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12" >
      <div style="border-style: dotted solid dashed double;">
      <a href="#"><h2 align="center" style="font-family:georgia;"><strong>POPULAR POSTS</strong></h2></a>


      <div class="container-fluid">
      <div class="col-sm-2">
        <div style="border-style: dotted solid dashed double;">
       <img src="<?php echo base_url("assets/images/phn.jpg"); ?>" alt="no image" style="width:48%; height: ">
         <img src="<?php echo base_url("assets/images/phn.jpg"); ?>" alt="no image" style="width:48%; height: ">
         <br>
         <br>
         <a href="#"><b><u style="color: red"> ONE PLUS INDIA LAUCNCH ON MAY 17 </u></b></a>

        </div>
      </div> 
  

           
      <?php foreach($posts as $post) : ?>
        
        <div class="col-sm-2">
          <div style="border-style: dotted solid dashed double;"> 
        
        <img width="50%" src="<?php echo site_url(); ?>assets/images/<?php echo $post['post_image'];?>"><br>
        <br>
        <h3 style="font-family: courier;"><strong><?php echo $post['title']; ?></strong></h3><br>
        
        <small class="post-date">Posted on <?php echo $post['created_at'];?> <!--strong><h4><?php echo $post['name']; ?></h4></strong--> </small><br>

        <?php echo word_limiter( $post['body'],10);?>
        <br><br>
        <p><a href="<?php echo site_url('/posts/'.$post['slug']);?>">Read More..</a>
          </p>
        <br><br><hr>
      </div>
    </div>
    <?php endforeach; ?>
      <div class="pagination-link" align="right">
        <?php echo $this->pagination->create_links(); ?>
      </div>
     
      </div> 

      </div>

      </div>
    </div>
   </div>
  </div>    

<div id="preloader">
  <div id="status">&nbsp;</div>
</div>

 <div class="container-fluid">
 <div class="col-sm-9 col-md-9 col-lg-9">

  <div class="column">
    <div class="col-sm-4 col-md-4 col-lg-4" >

   
            <h4><span><h4 style="color: #0CBD0D"><u><b>Technology </u>&nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i></b></h4></span></h4>
            <img src="<?php echo base_url("assets/images/robot.png"); ?>" alt="no image" width="100%" height="200">
            <hr>
            <ul>
              <li><a href="<?php echo base_url(); ?>/article">Scientists use inkjet printing to produce solar cells</a></li><hr>
              <li><a href="#">iPhone 5 delay, Android fears drag Apple stock</a></li><hr>
              <li><a href="#">Panasonic unveils stereo headset</a></li><hr>
              <li><a href="#">Google Chrome OS has security holes</a></li><hr>
              <li><a href="#">Nokia shuts down online stores</a></li><hr>
            </ul>
      </div>
      </div>

        <div class="column">
            <div class="col-sm-4 col-md-4 col-lg-4" >

            <h4><span><h4 style="color: #0CBD0D"><u><b> Hot on Web </u>&nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i></b></h4></span></h4>
            <img src="<?php echo base_url("assets/images/ipad.jpg"); ?>" alt="no image" width="100%" height="200">
            <ul>
              <li><a href="#">Google Launches Its Google+ Social Networking Service</a></li><hr>
              <li><a href="#">World of Warcraft offered 'free'</a></li><hr>
              <li><a href="#">Skype rolls out free app for Android phones</a></li><hr>
              <li><a href="#">PayPal Predicts The End of the Wallet By 2015</a></li><hr>
              <li><a href="#">Apple iPad now has over 100,000 apps</a></li><hr>
            </ul>
          </div>
        </div>
          <div class="column">
              <div class="col-sm-4 col-md-4 col-lg-4" >

            <h4><span><h4 style="color: #0CBD0D"><u><b>Entertainment </u> &nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i></b></h4></span></h4>
             <img src="<?php echo base_url("assets/images/beauty.jpg"); ?>" alt="no image" width="100%" height="200">
            <ul>
              <li><a href="#">Spacey's Richard III wows critics</a></li><hr>
              <li><a href="#">Maria Sharapova returns to Wimbledon final</a></li><hr>
              <li><a href="#">Beyonce's debut brings curtain down on Glastonbury</a></li><hr>
              <li><a href="#">Mike Tyson in Big Brother?</a></li><hr>
              <li><a href="#">Justin Timberlake to promote MySpace</a></li><hr>
            </ul>
          </div>
        </div>
    </div>

  <div class="col-sm-3 col-md-3 col-lg-3">
    <div class="panel panel-default">
  <div class="panel-body">
    <h3 style="color:  #0CBD0D ;" align="center"><strong><u> Today's Poll Question </u></strong></h3>
             <br>
             <strong>&nbsp; The Democratic and Republican parties will hold their primaries for state and local officies in a few weeks. Looking ahead to the March primaries, how likely are you to vote in that election? Are you</strong>
             <br>
             <br>
             <img src="<?php echo base_url("assets/images/elections.png"); ?>" alt="no image" width="100%" height="200">
             <br>
             <br>
              <form>
                <input type="radio" name="vote" value="option1" checked> Certain To Vote<br><br>
                <input type="radio" name="vote" value="option2"> Likely Will Vote <br><br>
                <input type="radio" name="vote" value="option3">Probably Won't Vote <br><br>
                <input type="radio" name="vote" value="option3">Skip the Primary Election <br><br>
                <input type="radio" name="vote" value="option3">Dont't Know<br><br>
                <input type="radio" name="vote" value="option3">Refused<br><br>

              </form>
              <div align="center">
              <button type="button" class="btn btn-primary"> Answer</button>
             </div>
             <br>
  </div>
  </div>
  </div>
 </div>
<div class="container-fluid">
 <div class="col-sm-9 col-md-9 col-lg-9">
     <h4><span><h4 style="color: #0CBD0D"><u><b>Some more posts </u>&nbsp; &nbsp; &nbsp; &nbsp;<i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i><i class="glyphicon glyphicon-option-horizontal"></i></b></h4></span></h4>  
     <hr>

    <div class="col-sm-6 col-md-6 col-lg-6">

    <a href="#"><h4>US Secret Service probes "Obama's assassination" on Twitter</h4></a>
    <hr>
    <div class="col-sm-4 col-md-4 col-lg-4">
       <img src="<?php echo base_url("assets/images/obama.jpg"); ?>" alt="no image" width="100%" height="125">
    </div>
    <div class="col-sm-8 col-md-8 col-lg-8">     
    <p>Obama was born in 1961 in Honolulu, Hawaii, two years after the territory was admitted to the Union as the 50th state. Raised largely in Hawaii, Obama also spent one year of his childhood in Washington State and four years in Indonesia. After.... &nbsp; &nbsp;&nbsp;&nbsp; <a href="#">More</a></p>
    </div>
       <p> <span class="glyphicon glyphicon-eye-open"></span><strong>Views <span class="badge">8</span></strong> &nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-thumbs-up"></span><strong>Likes</strong> <span class="badge">5</span>  &nbsp;&nbsp;&nbsp;&nbsp; <strong>Comments </strong><span class="badge">1</span> </p>

    </div>
    <div class="col-sm-6 col-md-6 col-lg-6">

    <a href="#"><h4>Djokovic beats Nadal to win maiden Wimbledon title</h4></a>
    <br>
    <hr>
    <div class="col-sm-4 col-md-4 col-lg-4">
       <img src="<?php echo base_url("assets/images/djokovic.jpg"); ?>" alt="no image" width="100%" height="125">
    </div>
    <div class="col-sm-8 col-md-8 col-lg-8">     
    <p>Djokovic has won 12 Grand Slam singles titles, five ATP Finals titles, 30 Masters 1000 series titles, 12 ATP World Tour 500 tournaments, and has held the No. 1 spot in the ATP rankings for a total of 223 weeks. In majors, Djokovic has won six... &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">More</a></p>
    </div>
       <p> <span class="glyphicon glyphicon-eye-open"></span><strong>Views <span class="badge">4</span></strong> &nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-thumbs-up"></span><strong>Likes</strong> <span class="badge">4</span>  &nbsp;&nbsp;&nbsp;&nbsp; <strong>Comments </strong><span class="badge">2</span> </p>

    </div>
    
    <a href="#"><h4>Baidu and Microsoft tie-up for English search in China</h4></a>
   <hr>
    <div class="col-sm-4 col-md-4 col-lg-4">
       <img src="<?php echo base_url("assets/images/baidu.jpg"); ?>" alt="no image" width="100%" height="150">
    </div>
    <div class="col-sm-8 col-md-8 col-lg-8">
    <p>Software giant Microsoft Corp and Chinese online search titan Baidu are teaming up to advance technical development and adoption of autonomous driving worldwide, the two companies said on Tuesday.Their collaboration will form part of the initiatives under Baidu’s Project Apollo open autonomous driving platform, which the mainland internet company first unveiled in April.
    “Our goal with Apollo is to provide an open and powerful platform to the automotive industry to further the goal of autonomous vehicles,” said Baiduresident Zhang Yaqin.Microsoft’s Azure cloud-computing service, which is used....&nbsp; &nbsp;&nbsp;&nbsp; <a href="#">More</a></p>

    <p> <span class="glyphicon glyphicon-eye-open"></span><strong>Views <span class="badge">9</span></strong> &nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-thumbs-up"></span><strong>Likes</strong> <span class="badge">8</span>  &nbsp;&nbsp;&nbsp;&nbsp; <strong>Comments </strong><span class="badge">5</span> </p>
    </div>

    <br>
    <br>
    <div class="nav navbar-nav navbar-right"">
    <ul class="pagination pagination-sm">
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
    </ul> 
    </div>
    
    <br>
    <hr>
    <br><br><br><br><br><br><br><br>

  <div class="container-fluid">
  <div  style="width: 100%;">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>

    </ol>

    
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?php echo base_url("assets/images/nitr.jpg"); ?>" alt="Nit Rourkela" width="100%"  >
        <div class="carousel-caption">
          <h3>Nit Rourkela</h3>
          <p>Lovely Place</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url("assets/images/nitr2.jpg"); ?>" alt="la" width="100%" >
        <div class="carousel-caption">
          <h3>LA</h3>
          <p>Cool Place</p>
        </div>
      </div>
    
      <div class="item">
        <img src="<?php echo base_url("assets/images/nitr3.jpg"); ?>" alt="Main Building" width="100%" >
        <div class="carousel-caption">
          <h3>Main Building</h3>
          <p>Superb PIc</p>
        </div>
      </div>
  
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  </div>
 </div>

 <div class="col-sm-3 col-md-3 col-lg-3">

   <hr>
       <div class="container-fluid">
        <a href=""><button type="button" class="btn btn-primary btn-sm">Popular</button></a> 
        <a href="#"> <button type="button" class="btn btn-primary btn-sm">Recent</button></a>
        <a href="#"> <button type="button" class="btn btn-primary btn-sm"> Tags</button></a>
        <a href="#"> <button type="button" class="btn btn-primary btn-sm">Tweets</button></a>    
      </div>
      <br>
      <br>
    <div class="panel panel-default">
    <div class="panel-body">
      <div class="col-sm-3 col-md-3 col-lg-3">
      <img src="<?php echo base_url("assets/images/emma_watson.jpg"); ?>" alt="no image" width="100%" height="75">
      </div>
      <div class="col-sm-9 col-md-9 col-lg-9"> 
      <a href="#"> Emma Watson used doubles in the last potter film: Rupert Grint</a>
      </div>
      <br>
      <br>
      <br>
      <br>
      <hr>
      <a href="#">   ashok Gehlot
            @ashokgehlot51<br>
            Paid floral tribute to Sh. #RajivGandhi ji on his punyatithi at #VirBhumi in New Delhi.. #RememberingRajivGandhi </a>

      <br>
      <hr>

        <div class="col-sm-3 col-md-3 col-lg-3">
      <img src="<?php echo base_url("assets/images/emma_watson.jpg"); ?>" alt="no image" width="100%" height="75">
      </div>
      <div class="col-sm-9 col-md-9 col-lg-9"> 
      <a href="#"> Emma Watson used doubles in the last potter film: Rupert Grint</a>
      </div>
      <br>
      <br>
      <br>
      <br>
      <hr>
      <a href="#">   ashok Gehlot
            @ashokgehlot51<br>
            Paid floral tribute to Sh. #RajivGandhi ji on his punyatithi at #VirBhumi in New Delhi.. #RememberingRajivGandhi </a>
      <br>
      <hr>
      <div class="col-sm-3 col-md-3 col-lg-3">
      <img src="<?php echo base_url("assets/images/emma_watson.jpg"); ?>" alt="no image" width="100%" height="75">
      </div>
      <div class="col-sm-9 col-md-9 col-lg-9"> 
      <a href="#"> Emma Watson used doubles in the last potter film: Rupert Grint</a>
      </div>
      <br>
      <br>
      <hr>
      <br>
      <p>
        <h3 style="color: blue"><strong>ASK A QUESTION</strong></h3>
    </p>
    <img src="<?php echo base_url("assets/images/ask-question.jpg");?>" width="100%">
    <br><br>
    <a href="<?php echo base_url(); ?>posts/ask-a-question"><h4><strong>Acknowledging Queries: Ask a Question</strong></h4></a>
    <p>Read on to find out the replies to your queries provided by the authority itself.When you stop learning, stop listening, stop looking and stop  asking questions,then it is time to die. </p>

    </div>
    </div>
 </div>
</div>
<br><hr><br>
  
  <div class="container-fluid">
 <div class="col-sm-12 col-md-12 col-lg-12">
    <div class="column">
    <div class="col-sm-4 col-md-4 col-lg-4">
    <div class="panel panel-default">
        <div class="panel-body">
      <h3 style="text-align: center; color: #082843;"><strong> About us</strong></h3>
       
      The website contains international news coverage, as well as British, entertainment, science, and political news. Many reports are accompanied by audio and video from the BBC's television and radio news services, while the latest TV and radio bulletins are also available to view or listen to on the site together with other current affairs programmes.<br>From 1998 to 2001 the site was named best news website at the BAFTA Interactive Entertainment Awards when the award category was withdrawn. It has previously won both the Judges' award and the People's Voice award for best news site at the annual Webby Awards.
      </div>
      </div>
    </div>
    </div>
    <div class="column">
    <div class="col-sm-4 col-md-4 col-lg-4">
      <div class="panel panel-default">
        <div class="panel-body">
           <h3 style="text-align: center; color: #082843;"><strong> Quick Links</strong></h3>
            <br>
           <ul >
            <li><a href="#">World news<br></a></li><br>
           <li><a href="#"> Science<br></a></li><br>
            <li><a href="#">Entertainment<br></a></li><br>
            <li><a href="#">Technology<br></a></li><br>
            <li><a href="#">Health<br></a></li><br>
           <li><a href="#">Business<br></a></li><br>
            <li><a href="#">Sports<br></a></li>
          </ul>

        </div>
        </div>
    </div>
    </div>

    <div class="column">
    <div class="col-sm-4 col-md-4 col-lg-4">

      <div class="month">      
        <ul>
          <li class="prev">&#10094;</li>
          <li class="next">&#10095;</li>
          <li>
            June<br>
            <span style="font-size:18px">2018</span>
          </li>
        </ul>
      </div>

        <ul class="weekdays">
          <li>Mo</li>
          <li>Tu</li>
          <li>We</li>
          <li>Th</li>
          <li>Fr</li>
          <li>Sa</li>
          <li>Su</li>
        </ul>

        <ul class="days">  
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
          <li>9</li>
          <li><span class="active">10</span></li>
          <li>11</li>
          <li>12</li>
          <li>13</li>
          <li>14</li>
          <li>15</li>
          <li>16</li>
          <li>17</li>
          <li>18</li>
          <li>19</li>
          <li>20</li>
          <li>21</li>
          <li>22</li>
          <li>23</li>
          <li>24</li>
          <li>25</li>
          <li>26</li>
          <li>27</li>
          <li>28</li>
          <li>29</li>
          <li>30</li>
          <li>31</li>
        </ul>
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