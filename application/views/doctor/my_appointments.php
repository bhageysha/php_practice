<?php $this->load->view('auth/header'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">My Appointments</h2>
			<table class="table table-bordered">
				<tr>
					<th>Patient Name</th>
					<th>Time slot id</th>
					<th>Appointment date</th>
					<th>Approve Appointment</th>
				</tr>
				<tr>
					<td>Test patient</td>
					<td>5</td>
					<td>2019-06-27</td>
					<td><button class="btn-success">Approve</button></td>
				</tr>

			</table>

		</div>
	</div>
</div>
<?php $this->load->view('auth/footer'); ?>