
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-8 col-md-8 col-lg-8" >
    	

        <h3 style="text-align: left; color:  #0CBD0D ;"><mark><?php echo $post['title']; ?></mark></h3>
        <br>
        <small class="post-date">
            Posted on: <?php echo $post['created_at']; ?><br>
            <strong><h4>Started by : <?php echo $post['username']; ?></h4></strong>
        </small><br>
        
        <div class="post-body">
            <?php echo $post['body']; ?>
        </div>
        <br><br><br>
    <?php if($comments) : ?>

    <?php $count=0; foreach($comments as $comment) : ?>

        <div class="well">
          <h4><strong><?php echo $comment['name']; ?></strong></h4>
          <br><h5><?php echo $comment['body']; ?></h5>
        </div>
    <?php $count++; endforeach; ?>
        <?php else : ?>
            <p><h4>No Reply</h4></p>
    <?php endif; ?>
    <hr>
    <?php echo $count; ?>
    <div class="col-sm-8 col-md-8 col-lg-8" >
    <h3>Add Reply</h3>

    <?php echo validation_errors(); ?>
    <?php echo form_open('discuss/create/'.$post['id']); ?>

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"></textarea>
        </div>

        <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    </div>

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
