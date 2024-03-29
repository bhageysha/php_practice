<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function users()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('3424sds_users');
		$crud->columns('name','username','email');
		$crud->set_subject('Users');
		$crud->set_theme('flexigrid');
		$output = $crud->render();
		return $this->load->view('example.php',(array)$output);
		// $this->_example_output($output);

	}
}
