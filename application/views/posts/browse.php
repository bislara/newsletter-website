<div class="column">
	<div class="col-sm-8 col-md-8 col-lg-8" >
    <div class="container-fluid"> 

    	<div class="panel panel-default">
        <div class="panel-body">
 <?php foreach($posts as $post) : ?>
	
	<h3 style="font-family: courier;"><strong><?php echo $post['title']; ?></strong></h3><br>
	<!--img src="<?php echo $post['img'];?>"-->
	<small class="post-date">Posted on <?php echo $post['created_at'];?></small><br>
	<!--?php echo $post['body'];?-->
	<br><br>
	<!--p><a href="<?php echo site_url('/posts/'.$post['slug']);?>">Read More..</a></p-->
	
   <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>

	<?php echo form_open('/posts/delete/'.$post['id']);?>
	
		<input  type="submit" value="Delete" class="btn btn-danger pull-right">

	</form>
<br>
	<hr>


<?php endforeach; ?>

</div>
</div>



   </div>
</div>
</div>
</body>
</html>