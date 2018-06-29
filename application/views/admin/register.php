<div class="column">
	<div class="col-sm-8 col-md-8 col-lg-8" >
		<div class="container-fluid">
<?php echo validation_errors(); ?>

<?php echo form_open('admin_user/register'); ?>

	<div class="row">
			<h1 class="text-center"><?= $title; ?></h1>

			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="Name">
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email">
			</div>

			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username">
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>

			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
			<br>
			<p>Already a admin,<a href="<?php echo base_url(); ?>admin_user/login">Login Here</a></p>
		</div>
	
<?php echo form_close(); ?>
</div>
</div>
</div>
</div>

</body>
</html>