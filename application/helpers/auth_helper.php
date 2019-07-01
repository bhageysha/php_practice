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

function getFilteredData($table_name,$where){
	$ci = &get_instance();
	
	foreach ($where as $key => $single_cond){
			$query = $ci->db->where($key,$single_cond);
	}

	$query = $ci->db->get('3424sds_users');
	return $query->result();	

	
}