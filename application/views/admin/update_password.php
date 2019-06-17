<?php $this->load->view('auth/header'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<form method="POST" action="<?=site_url('admin/update_password_post')?>"> 
				<div class="form-group">
					<label>Select User</label>
					<select class='form-control' name="user_id">
						<?php foreach ($data as $key => $user): ?>
							<option value="<?=$user->id?>">#<?=$user->id?>-<?=$user->email?> - <?=$user->role?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<label>New Password</label>
					<input type="text" name="password" class="form-control" / >
				</div>
				<input type="submit" value="Update" />
			</form>
		</div>
	</div>
</div>
<?php $this->load->view('auth/footer'); ?>