
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-8 col-md-8 col-lg-8" >
    	<h3 style="text-align: center; color:  #0CBD0D ;"><mark><?= $title?></mark></h3>

    	<br><br>
        <?php if(!$this->session->userdata('logged_in')) : ?>
        <h4><a href="<?php echo base_url(); ?>users/login"><span class="glyphicon glyphicon-user"></span> Log In</a> to start a new thread.</h4>
        <?php endif; ?>
        <br>
        <br>
        <?php if($this->session->userdata('logged_in')) : ?>
          <h4><a href="<?php echo base_url(); ?>forum/create">Click Here</a> to create a new thread</h4>
        <?php endif; ?>
        <br><br>
    	<table class="table table-hover" style="border:4px solid green;">
	    <thead>
	      <tr class="info">
	        <th><h3>Title</h3></th>
	        <th><h3>Replies</h3></th>
	        <th><h3>Last Post</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php foreach($forum as $post) : ?>
	      <tr>
	        <td><a href="<?php echo site_url('/forum/'.$post['slug']);?>"><h4 style="font-family: courier;"><strong><?php echo $post['title']; ?></strong></h4></a></td>
	        <td><?php echo $post['id'];?></td>
	        <td>
	        	<?php echo $post['created_at'];?><br>
	        	<?php echo $post['username'];?>
	        </td>
	      </tr>
	      <?php endforeach; ?>
	    </tbody>
	  	</table>


    </div>
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
