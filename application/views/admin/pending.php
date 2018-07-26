<div class="column">
	<div class="col-sm-8 col-md-8 col-lg-8" >
		<div class="container-fluid">

		<div class="panel panel-default">
        <div class="panel-body">
		 <?php foreach($comments as $comment) : ?>
			
			<h3 style="font-family: courier;"><strong><?php echo $comment['name']; ?></strong></h3><br>
			<!--img src="<?php echo $post['img'];?>"-->
			<small class="post-date">Commented on <?php echo $comment['created_at'];?> in the Post no - <?php echo $comment['post_id']; ?></small><br><br>
			<?php echo $comment['body'];?>
			<br><br>
		<?php echo form_open('/posts/approve/'.$comment['id']);?>
	
		<input  type="submit" value="Approve" class="btn btn-danger pull-right">
		<?php echo $comment['id']; ?>
		</form><br>
			<hr>

		<?php endforeach; ?>

		</div>
		</div>

</div>
</div>
</div>
</div>

</body>
</html>
