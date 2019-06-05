<?php 
function success($message){
	$ci = &get_instance();
	$ci->session->set_flashdata('success',$message);
}

function failure($message){

	$ci = &get_instance();
	$ci->session->set_flashdata('failure',$message);
	
}