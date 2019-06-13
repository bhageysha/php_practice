<?php 
$success = $this->session->flashdata('success');
if(!empty($success)): ?>
<div class="alert alert-success"><?=$success?></div>

<?php endif; ?>
<?php 
$failure = $this->session->flashdata('failure');
if(!empty($failure)): ?>
<div class="alert alert-danger"><?=$failure?></div>

<?php endif; ?>