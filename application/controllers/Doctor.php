<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

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
		$this->load->view('doctor/home');
		
	}

	public function  set_is_approval_value(){
		
	  $this->db->where('id', $_POST['id']);

		$this->db->update('3424sds_appointments', ['is_approved' => $_POST['is_approved']]);

		echo $_POST['is_approved'];
	}

	public function my_appointments()
	{	
	
		$query = $this->db->from('3424sds_appointments');
		$query = $this->db->where('doctor_id', user_id());
		$doctors = $this->db->get();
		
		$this->load->view('doctor/my_appointments',[
			'doctors' => $doctors->result()
		]);
		
	}



	
}