<div class="column">
	<div class="col-sm-8 col-md-8 col-lg-8" >
		<div class="container-fluid">
<?php echo form_open('admin/login'); ?>

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo $title; ?></h1>

			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
			</div>

			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
			<br>
			<p>Not a member,<a href="<?php echo base_url(); ?>admin_user/register">Register Here</a></p>
		</div>
	</div>
<?php echo form_close(); ?>
</div>
</div>
</div>
</div>

</body>
</html>
