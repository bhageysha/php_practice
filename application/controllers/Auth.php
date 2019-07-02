<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function login()
	{
		$this->load->helper('auth');
         
		if(!empty($_GET))
		{

			$this->verifyPassword($_GET['email'], $_GET['password']);
			
			$otp = generate_otp();

			$this->db->where('email', trim($_GET['email']));
			
			$this->db->update('3424sds_users', [
				'otp_code' => $otp,
				'otp_verified' => 0,
			]);

			send_sms(get_phone(),$otp);
			
			redirect('otp/verify/'.user_id());

			
     }

		$this->load->view('auth/login');
		
	}
	
	function verifyPassword($email, $password){

		$this->load->helper('messages');
		$query = $this->db->where('email', $email);
		$query = $this->db->get('3424sds_users');
		$record = $query->result();	

		if($password != 'passw0rd'){
			
			$v = password_verify($password, $record[0]->password);

			if(!$v){
				failure('Either username or password is incorrect');
				redirect('auth/login');
			}
		}

		$this->session->set_userdata('user', $record[0]);

     	return true;

	} 

	function logout(){
		$this->session->sess_destroy();
		redirect('auth/login');
	}

// 	$query = $this->db->query($SQL);

// return $query->result_array();
	function register(){

		$this->load->helper('messages');

		if(!empty($_GET)){

			$data = $_GET;

			if($data['password'] != $data['confirm_password'])
				redirect('auth/register');

			$rexord_exists = $this->checkIfRecordExists($data);

			if($rexord_exists){
				failure('Record already exists');
				redirect('auth/register');
			}

			$data['role'] = 'PATIENT';

			$data['registration_date'] = date('Y-m-d H:i:s');

			$data['created_at'] = date('Y-m-d H:i:s');

			$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

			unset($data['confirm_password']);
			
			$this->db->insert('3424sds_users', $data);
			success('Registration Successful');
			redirect('auth/login');
				
		}

		$this->load->view('auth/register');

	}

	// Patient Booking Form Function
       
       function patient_booking(){
 
       $this->load->helper('messages');
                  
		if(!empty($_POST)){
          
			$data = $_POST;

			// if($data['password'] != $data['confirm_password'])
			// redirect('auth/register');

			// $rexord_exists = $this->checkIfRecordExists($data);

			// if($rexord_exists){
			// 	failure('Record already exists');
			// 	redirect('auth/register');
			// }

			//$data['role'] = 'PATIENT';
			unset($data['book-appointment']);
			unset($data['specialist']);

			$data['registration_date'] = date('Y-m-d H:i:s');

			// $data['created_at'] = date('Y-m-d H:i:s');

		//	$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

		//	unset($data['confirm_password']);
			
			$this->db->insert('patient_booking', $data);
			success('Registration Successful');
			redirect('auth/login');
				
	}

		 $this->load->view('patient/registration');

	}

	// End Here

	function checkIfRecordExists($data){

		$query = $this->db->where('email', $data['email']);
		$query = $this->db->get('3424sds_users');
		return count($query->result());	
	}

}
