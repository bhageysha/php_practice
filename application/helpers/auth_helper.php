<?php 
function auth_force(){
	$ci = &get_instance();
	if(empty($ci->session->userdata('user')))
		redirect('auth/logout');
}

function send_mail($email,$subject,$message){

		$this->load->library('email');
		$this->email->from('info@theheavenhomes.com', 'Test Company');
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
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
function get_phone(){
	$ci = &get_instance();
	if(empty($ci->session->userdata('user')))
		redirect('auth/logout');

	return $ci->session->userdata('user')->phone;
	
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

function send_sms($no,$otp){
	$gateway = 'http://sms.thinkbuyget.com/api.php?username=Gurpreet&password=472186&sender=DGENIT&sendto=91'.$no.'&message='.$otp;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $gateway);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$content  = curl_exec($ch);
	
	return true;

}



function generate_otp() { 
      
    
    $generator = "135792468"; 
    $result = ""; 
  
    for ($i = 1; $i <= 4; $i++) { 
        $result .= substr($generator, (rand()%(strlen($generator))), 1); 
    } 
  
    // Return result 
    return $result; 
} 

function verify_otp($user_id,$otp_code){
	
	$where = [
		'otp_code' => $otp_code,
		'id' => $user_id
	];
	
	$record = getFilteredData('3424sds_users',$where);

	if(count($record))
		return true;
	else
		return false;

}

function is_otp_verified(){
	return true;
}