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

	public function checkIfBookingExistForDoc($doc_id){
 		$query = $this->db->where('doctor_id', $doc_id);
    $query = $this->db->get('3424sds_appointments');
    return count($query->result());
	} 

	public function delete_doctor($id){
		
		$this->load->helper('messages');

		if($this->checkIfBookingExistForDoc($id)){
			failure('Appointments exists for this doc. Cant delete');
    	redirect('admin/view_doctors');
		}

		$this->load->helper('messages');
		$this ->db->where('id', $id);
    $this ->db->delete('3424sds_users');
    success('Record Deleted');
    redirect('admin/view_doctors');
	}

	public function edit_doctor($id){

		$query = $this->db->where('id', $id);
		$query = $this->db->get('3424sds_users');
		$doctor = $query->result();
		
		$this->load->view('admin/edit_doctor',[
			'doctor' => $doctor[0],
			'user_id_to_edit' => $id
		]);
			}

	public function update_password(){
		$query = $this->db->where('role !=','ADMIN');
		$query = $this->db->get('3424sds_users');
		$users = $query->result();
		
		$this->load->view('admin/update_password',[
			'data' => $users
		]);
	}

	public function update_password_post(){
		
		$this->load->helper('messages');
		$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
		
		$this->db->where('id', $_POST['user_id']);
		unset($_POST['user_id']);
		
		$this->db->update('3424sds_users', $_POST);
		success('Password updated successfully');
		redirect('admin/update_password');	
	}

	public function view_doctors(){
		$where = [
			'role' => 'DOCTOR',
		];

		$doctors = getFilteredData('3424sds_users',$where);
		
		$this->load->view('admin/view_doctors',[
			'doctors' => $doctors 
		]);

	}

	public function doctor_post(){

		$this->load->helper('messages');

			$data = $_POST;
	
			$record_id= $data['user_id_to_edit'];
			unset($data['user_id_to_edit']);
			$this->db->where('id', $record_id);
			$this->db->update('3424sds_users', $data);

			success('Record updated');

			redirect('admin/edit_doctor/'.$record_id);
		
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