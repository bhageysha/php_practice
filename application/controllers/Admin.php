<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function index()
	{
		$this->load->view('admin/home');
		
	}

	public function add_doctor(){

		// $query = $this->db->where('email', $data['email']);/**/
		$query = $this->db->get('3424sds_doctor_specialisations');
		$specialisations = $query->result();
		
		$this->load->view('admin/add_doctor',[
			'specialisations' => $specialisations
		]);
	}

	public function view_doctors(){
		$query = $this->db->where('role','DOCTOR');
		$query = $this->db->get('3424sds_users');
		$doctors = $query->result();
		
		$this->load->view('admin/view_doctors',[
			'doctors' => $doctors 
		]);



	}

	public function doctor_post(){


		$this->load->helper('messages');


			$data = $_POST;

			
			$rexord_exists = $this->checkIfRecordExists($data);

			if($rexord_exists){
				failure('Record already exists');
				redirect('admin/add_doctor');
			}

			$data['registration_date'] = date('Y-m-d H:i:s');

			$data['created_at'] = date('Y-m-d H:i:s');

			$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
			
			$this->db->insert('3424sds_users', $data);

			success('Registration Successful');

			redirect('admin/add_doctor');
		
	}

	function checkIfRecordExists($data){

		$query = $this->db->where('email', $data['email']);
		$query = $this->db->get('3424sds_users');
		return count($query->result());	
	}
	// public function registration(){
	// 	$data = [
	// 		'name' => 'Agarwal',
	// 		'field' => 'ENT',
	//     ];

	// 	$this->load->view('patient/registration',[
	// 		'data' => $data
	// 	]);
	// }

	
}