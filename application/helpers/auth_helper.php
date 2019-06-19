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

function user_id(){
	$ci = &get_instance();
	if(empty($ci->session->userdata('user')))
		redirect('auth/logout');

	return $ci->session->userdata('user')->id;
	
}

function get_user_role(){
	$ci = &get_instance();
	if(empty($ci->session->userdata('user')))
		redirect('auth/logout');

	return $ci->session->userdata('user')->role;
	
}

function getData($table_name){
	$ci = &get_instance();
    $query = $ci->db->from(trim($table_name));
	$query = $ci->db->get();
	return $query->result();	

}