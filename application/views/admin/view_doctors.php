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
							<a href="<?=site_url('admin/edit_doctor/'.$doc->id)?>"><button class="btn btn-warning">Edit</button></a>
							<a  onclick="return confirm('Are you sure you want to delete this user?');" href="<?=site_url('admin/delete_doctor/'.$doc->id)?>"><button class="btn btn-danger">Delete (Pending)</button></a>
						</td>				 		
				 	</tr>
			 	<?php endforeach ?>

			 </table>
		</div>
	</div>
</div>
<?php $this->load->view('auth/footer'); ?>