<?php $this->load->view('auth/header'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h3 class="text-center">Verify Otp</h3>
			<form method="POST" action="<?=site_url('otp/otp_verify_post')?>">
				<div class="form-group">
					<label>Enter Otp</label>
					<input type="text" name="otp_code" class="form-control" />
					<input type="hidden" name="user_id" value="<?=$user_id?>" />

				</div>
				<input type="submit" value="verify" class="btn btn-warning" />
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<?php $this->load->view('auth/footer');?>