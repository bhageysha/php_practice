<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

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
		$this->load->view('patient/home');
		
	}

	public function book_appointm(){


		$data = [];

		$timeslots = getData('3424sds_time_slots');
		
		$query = $this->db->select('*,3424sds_users.name as doc_name,3424sds_doctor_specialisations.name as doc_spec');
		$query = $this->db->where('role','DOCTOR');
		$query = $this->db->from('3424sds_users');
		$query = $this->db->join('3424sds_doctor_specialisations','3424sds_doctor_specialisations.id = 3424sds_users.specialisation_id','left');
		$doctors = $this->db->get();
		

		$this->load->view('patient/book_appointm',[
			'data' => $doctors->result(),
			'time_slots' => $timeslots
		]);
	}

	public function appointment_post(){
		
	
				$this->load->helper('messages');


			$data = $_POST;
			
			$data['appointment_date'] = date('Y-m-d H:i:s' ,strtotime($data['appointment_date']));

			$data['patient_id'] = user_id();

			
			$data['created_at'] = date('Y-m-d H:i:s');

			$this->db->insert('3424sds_appointments', $data);

			success('Appointment Booked');

			redirect('patient/book_appointm');
	}
	
}