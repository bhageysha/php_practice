<?php $this->load->view('partials/header'); ?>
<div class="container">
	<div class="row">
		<h3 class="text-center">Registration Form</h3>
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form>
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter username</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter email</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" name="confirm_password" class="form-control">
				</div>
				<input type="submit" value="Register" class="btn btn-info">
			</form>
			<br><hr>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<?php $this->load->view('partials/footer'); ?>