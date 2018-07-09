<div class="column">
	<div class="col-sm-8 col-md-8 col-lg-8" >
		<div class="container-fluid">

		<div class="panel panel-default">
        <div class="panel-body">
		 <?php foreach($questions as $qs) : ?>
	
			<h3 style="font-family: courier;"><strong>Question by <?php echo $qs['name']; ?></strong></h3><br>
			
		    <strong><h4><a href="<?php echo site_url('/posts/question/'.$qs['id']);?>"> Question : <?php echo $qs['question']; ?></a><br><br> Authority to ask : <?php echo $qs['authority']; ?></h4></strong><br>
			<br>
			<br><hr>

		<?php endforeach; ?>
	
		</div>
		</div>

</div>
</div>
</div>
</div>

</body>
</html>
