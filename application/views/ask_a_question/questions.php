<h3 style="text-align: center; color:  #0CBD0D ;"><mark><?= $title?></mark></h3>
<br><br>
<h4 style="color: green;">&nbsp; Ask a New <a href="<?php echo site_url('/posts/ask-a-question') ?>">Question</a></h4><br>
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-8 col-md-8 col-lg-8" >
    <div class="panel panel-default">
        <div class="panel-body">


<?php foreach($questions as $qs) : ?>
	
	<h3 style="font-family: courier;"><strong>Question by <?php echo $qs['name']; ?></strong></h3><br>
	
    <strong><h4><a href="<?php echo site_url('/posts/question/'.$qs['id']);?>"> Question : <?php echo $qs['question']; ?></a><br><br> Authority to ask : <?php echo $qs['authority']; ?></h4></strong><br>
	<br>
	<br><hr>

<?php endforeach; ?>
<!-- <div class="pagination-link" align="right">
		<?php echo $this->pagination->create_links(); ?>
</div> -->

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
