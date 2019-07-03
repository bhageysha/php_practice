<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Otp extends CI_Controller {

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
	public function verify($id)
	{
		$this->load->view('otp/verify',[
			'user_id' => $id
		]);	
	}

	function otp_verify_post(){
		
		$this->load->helper('messages');	
		if(empty($_POST))
			redirect('auth/logout');

		$record = getFilteredData('3424sds_users',[
			'id' => $_POST['user_id']
		]);


		if($record[0]->otp_code != $_POST['otp_code']){
			failure('otp not verified!. Please try again');
			redirect('auth/logout');
		}

		   if(!empty(get_user()->role))
		   	redirect(strtolower(get_user()->role).'/index');
		   else
				redirect('auth/logout');
	
	}
}
