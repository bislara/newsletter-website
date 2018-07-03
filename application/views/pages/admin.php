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
<body>
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
    <li class="list-group-item list-group-item-action list-group-item-danger"><i class="glyphicon glyphicon-home"></i><a href="<?php echo base_url();?>/admin">  Home</a></li>
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
      <a class="dropdown-item" href="<?php echo base_url(); ?>/posts/admin/add">Add new</a>
      
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
 
<div class="column">
    <div class="col-sm-8 col-md-8 col-lg-8" >
    <div class="container-fluid">

    <div class="panel panel-default">
        <div class="panel-body">

          <div class="column">
          <div class="col-sm-6 col-md-6 col-lg-6" >        
            <div class="card" style="width:300px">
              <img class="card-img-top" src="<?php echo base_url("assets/images/article.jpg"); ?>" alt="Card image" style="width:100%"><br><br><br>
              <div class="card-body">
                <div class="dropdown dropright" align="center">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                      ARTICLE
                    </button>
                    <div class="dropdown-menu" align="center">
                      <a class="dropdown-item" href="<?php echo base_url(); ?>/posts/admin/browse">Browse</a><br>
                      <a class="dropdown-item" href="<?php echo base_url(); ?>/posts/admin/add">Add new</a>
                    </div>
                  </div>
              </div>
            </div>
            <br><br><br><br><br>
            <hr>

             <div class="card" style="width:300px">
              <img class="card-img-top" src="<?php echo base_url("assets/images/pulse.png"); ?>" alt="Card image" style="width:100%"><br><br><br>
              <div class="card-body">
                <div class="dropdown dropright" align="center">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                      STUDENT PULSE
                    </button>
                    <div class="dropdown-menu" align="center">
                      <a class="dropdown-item" href="#">Browse</a><br>
                      <a class="dropdown-item" href="#">Add new</a><br>
                    </div>
                  </div>
              </div>
            </div>
            <br>
            <hr>


        </div>
        </div>

         <div class="column">
          <div class="col-sm-6 col-md-6 col-lg-6" >        
             <div class="card" style="width:300px">
              <img class="card-img-top" src="<?php echo base_url("assets/images/comment.jpg"); ?>" alt="Card image" style="width:100%"><br><br><br>
              <div class="card-body">
                <div class="dropdown dropright" align="center">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                      COMMENTS
                    </button>
                    <div class="dropdown-menu" align="center">
                      <a class="dropdown-item" href="#">Pending</a><br>
                      <a class="dropdown-item" href="#">Approved</a><br>
                      <a class="dropdown-item" href="#">All</a><br>
                    </div>
                  </div>
              </div>
            </div>
            <br>
            <hr>

             <div class="card" style="width:300px">
              <img class="card-img-top" src="<?php echo base_url("assets/images/admin.jpg"); ?>" alt="Card image" style="width:100%"><br><br><br>
              <div class="card-body">
                <div class="dropdown dropright" align="center">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                       Add Admin
                    </button>
                    <div class="dropdown-menu" align="center">
                      <a class="dropdown-item" href="<?php echo base_url(); ?>/admin/register">Add new</a>
                  </div>
              </div>
            </div>
            <br>
            <hr>

        </div>
        </div>

        </div>
    </div>  
    </div>
    </div>
</div>

</div>
     
</body>
</html> 
​

