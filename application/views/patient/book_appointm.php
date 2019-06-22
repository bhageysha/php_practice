<?php $this->load->view('auth/header'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">Book Appointment</h2>
			<div class="col-md-4">
				</div>
			<div class="col-md-4">
		    <form method="POST" action="<?=site_url('patient/appointment_post')?>">
           <div class="form-group">
           	<label>Date</label>
           	<input type="text" id="_datepicker" name="appointment_date" class="form-control">
           </div>
           <div class="form-group">
           	<label>Appointment</label>
           	<select name="doctor_id" class="form-control">
           	<option selected disabled>Select Doctor</option>
            <?php foreach ($data as $key => $doc): ; ?>
           	    <option value="<?=$doc->id?>"><?=$doc->doc_name?>- <?=$doc->doc_spec?></option>
            <?php endforeach ?>
          
           </select>
       </div>
        <div class="form-group">
          <label>Select Time Slot</label>
          <select class="form-control" name="time_slot_id" >
            <?php foreach ($time_slots as $key => $ts): ?>
              <option value="<?=$ts->id?>"><?=$ts->name?></option>
            <?php endforeach ?>
          </select>  
        </div>
          <input type="submit" value="Register" class="btn btn-primary" />
           </div>
        <div class="col-md-4"></div>
			</form>
		</div>
	</div>
</div>


<?php $this->load->view('auth/footer'); ?>