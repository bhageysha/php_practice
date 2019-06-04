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
		if(!empty($_GET)){
			echo "<pre>";
			print_r($_GET);
			exit;
		}
		
		$this->load->view('auth/login');
		
	}
	
	function logout(){

	}

// 	$query = $this->db->query($SQL);

// return $query->result_array();
	function register(){

		if(!empty($_GET)){

			$data = $_GET;

			if($data['password'] != $data['confirm_password'])
				redirect('auth/register');

			$rexord_exists = $this->checkIfRecordExists($data);

			if($rexord_exists)
				redirect('auth/register');

			$data['role'] = 'PATIENT';

			$data['registration_date'] = date('Y-m-d H:i:s');

			$data['created_at'] = date('Y-m-d H:i:s');

			$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

			unset($data['confirm_password']);
			
			$this->db->insert('3424sds_users', $data);

			redirect('auth/login');
				
		}

		$this->load->view('auth/register');

	}

	function checkIfRecordExists($data){

		$query = $this->db->where('email', $data['email']);
		$query = $this->db->get('3424sds_users');
		return count($query->result());	
	}
}
