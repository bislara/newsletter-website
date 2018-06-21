
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-8 col-md-8 col-lg-8" >
    	<h3 style="text-align: center; color:  #0CBD0D ;"><mark><?= $title?></mark></h3>

    	<?php echo validation_errors();?>

        <?php echo form_open('forum/create');?>
            <div class="form-group">

            <label>Title</label>

            <input type="text" class="form-control" name="title" placeholder="Add Title">

            </div>

             <div class="form-group">

            <label>Name</label>

            <input type="text" class="form-control" name="username" placeholder="Your Name">

            </div>

            <div class="form-group">

            <label>Body</label>

            <textarea id="editor1" class="form-control" name="body" placeholder="Add Body" rows="15"></textarea>

            </div>
            <div align="center">
            <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </form>


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
