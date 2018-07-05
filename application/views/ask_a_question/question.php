
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-8 col-md-8 col-lg-8" >
    <div class="panel panel-default">
        <div class="panel-body">

        <h3 style="font-family: courier;"><strong>Question by <?php echo $qs['name']; ?></strong></h3><br>
    
        <strong><h4><a href="<?php echo site_url('/posts/question/'.$qs['id']);?>"> Question : <?php echo $qs['question']; ?></a><br><br> Authority to ask : <?php echo $qs['authority']; ?></h4></strong><br>
        <br>
    <br><hr>
	<br>
<h3>Answers</h3>
 <?php if($answers) : ?>

	<?php foreach($answers as $comment) : ?>

		<div class="well">
		 <h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h5>
		</div>
	<?php endforeach; ?>
<?php else : ?>
	<p>No Answers To Display</p>
<?php endif; ?>
<hr>

<?php if($this->session->userdata('logg_in')) : ?>
      
<div class="col-sm-6 col-md-6 col-lg-6" >
<h3>Add Answer</h3>

<?php echo validation_errors(); ?>
<?php echo form_open('answers/create/'.$qs['id']); ?>

	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>

	<div class="form-group">
		<label>Body</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="id" value="<?php echo $qs['id']; ?>">
	<button class="btn btn-primary" type="submit">Submit</button>
</form>
</div>
<?php endif; ?>
</div>
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
