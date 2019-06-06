<?php 
function auth_force(){
	$ci = &get_instance();
	if(empty($ci->session->userdata('user')))
		redirect('auth/logout');
}

function get_user(){
	$ci = &get_instance();
	if(empty($ci->session->userdata('user')))
		redirect('auth/logout');

	return $ci->session->userdata('user');
	
}