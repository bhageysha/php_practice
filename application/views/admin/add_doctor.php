<?php $this->load->view('auth/header'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-4">		</div>
		<div class="col-md-4">		
			<form method="POST" action="<?=site_url('admin/doctor_post')?>">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" />
				</div>

				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" />
				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" />
				</div>
				
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" />
				</div>
				<div class="form-group">
					<select name="role" class="form-control">
						<option value="DOCTOR">DOCTOR </option>
						<option value="EMPLOYEE">EMPLOYEE</option>
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
					<input type="text" name="phone" class="form-control"/>
				</div>
				<input type="submit" value="Register" class="btn btn-primary" />

			</form>
		</div>
		<div class="col-md-4">		</div>
	</div>
</div>
<?php $this->load->view('auth/footer'); ?>