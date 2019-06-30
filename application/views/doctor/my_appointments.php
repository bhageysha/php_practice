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


						<?php foreach ($doctors as $key => $doc):  ?>
				 	<tr>
						<td><?=$doc->patient_id?></td>				 		
						<td><?=$doc->time_slot_id?></td>				 		
						<td><?=$doc->appointment_date?></td>	
						<td>

							<input data-id="<?=$doc->id?>" 	 class="appoint_id" type="checkbox" data-on="Approved" data-off="Canceled" 
							<?=$doc->is_approved ? 'checked' : ''?> 
							data-toggle="toggle">

						</td>				 					 						 		
				 	</tr>
			 	<?php endforeach ?>

			</table>

		</div>
	</div>
</div>
<?php $this->load->view('auth/footer'); ?>