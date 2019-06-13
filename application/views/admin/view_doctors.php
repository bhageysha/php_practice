<?php $this->load->view('auth/header'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			 <h3>Doctors List</h3>
			 <table class="table table-bordered">
			 	<tr>
			 		<td>Name</td>
			 		<td>Phone</td>
			 		<td>Email</td>
			 		<td>Reg Date</td>
			 		<td>Actions</td>
			 	</tr>
			 	<?php foreach ($doctors as $key => $doc): ?>
				 	<tr>
						<td><?=$doc->name?></td>				 		
						<td><?=$doc->phone?></td>				 		
						<td><?=$doc->email?></td>				 		
						<td><?=date('M d, Y', strtotime($doc->registration_date))?></td>				 		
						<td>
							<button class="btn btn-warning">Edit</button>
							<button class="btn btn-danger">Delete</button>
						</td>				 		
				 	</tr>
			 	<?php endforeach ?>

			 </table>
		</div>
	</div>
</div>
<?php $this->load->view('auth/footer'); ?>