<?php $this->load->view('auth/header'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">My Bookings</h2>
		  <table class="table table-striped">
        <tr>
          <th>Appointment date</th>
          <th>Doctor name</th>
          <th>Appoint. Timings</th>
          <th>Approval Status</th>
        </tr>
        <?php foreach ($bookings as $key => $record): ?>
          <tr>
            <td><?=date('M d, Y',strtotime($record->appointment_date))?></td>
            <td><?=$record->doctor_name?></td>
            <td><?=$record->time_slots_name?></td>
            <td><?=$record->is_approved ? 
            '<span class="label label-success">APPROVED</span>' 
            :'<span class="label label-danger">PENDING</span>' 

            ?></td>
          </tr>
        <?php endforeach ?>
      </table>
				
			
		</div>
	</div>
</div>


<?php $this->load->view('auth/footer'); ?>