<?php $this->load->view('auth/header'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-4">		</div>
		<div class="col-md-4">		
			<form method="POST" action="<?=site_url('admin/doctor_post')?>">
				<input type="hidden" name="user_id_to_edit" value="<?=$user_id_to_edit?>">
				<div class="form-group">
					<label>Name</label>
					<input type="text" value="<?=$doctor->name?>" name="name" class="form-control" />
				</div>

				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" value="<?=$doctor->username?>" class="form-control" />
				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" value="<?=$doctor->email?>" class="form-control" />
				</div>
				
				<div class="form-group">
					<select name="role" class="form-control">
						<option <?=$doctor->role == 'DOCTOR' ? 'selected' :''?> value="DOCTOR">DOCTOR </option>
						<option <?=$doctor->role == 'EMPLOYEE' ? 'selected' :''?> value="EMPLOYEE">EMPLOYEE</option>
						<option <?=$doctor->role == 'PATIENT' ? 'selected' :''?> value="PATIENT">PATIENT</option>
					</select>
				</div>
				<div class="form-group">

					<label>Specialisations</label>
					<select class="form-control" name="specialisation_id" placeholder="Test">
						 <option selected="true" disabled="true">--Select--</option>
						<?php foreach ($specialisations as $key => $spec): ?>
							<option value="<?=$spec->id?>"><?=$spec->name?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">

					<label>Phone</label>
					<input type="text" name="phone" value="<?=$doctor->phone?>" class="form-control"/>
				</div>
				<input type="submit" value="Update" class="btn btn-primary" />

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<?php $this->load->view('auth/footer'); ?>