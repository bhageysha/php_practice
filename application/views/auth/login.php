<?php $this->load->view('partials/header'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form>
				<div class="form-group">
					<label>Enter email</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter Password</label>
					<input type="text" name="password" class="form-control">
				</div>
				<input type="submit" value="Login">
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<?php $this->load->view('partials/footer'); ?>