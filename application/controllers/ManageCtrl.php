<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	Manage Controller - This controller provides functions for users logged in as a Manager.
*/

//session_start(); // Call PHP's session object to access it through CI
class ManageCtrl extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('ManageMdl');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		if($this->session->userdata('logged_in')) {

			$data['classes'] = $this->ManageMdl->get_classes();
			$data['title'] = 'Hawk Fitness Classes';

			$this->load->view('templates/header', $data);
			$this->load->view('manage/dashboard', $data);
			$this->load->view('templates/footer');

		} else {
			// If no session, redirect to login
			redirect('public/login', 'refresh');
		}
		
	}

	function logout() 
	{
		$this->session->unset_userdata('logged_in');
	    session_destroy();
	    redirect('/', 'refresh');
	}

	public function createClass()
	{

		if($this->session->userdata('logged_in')) {
		    $this->load->helper('form');
		    $this->load->library('form_validation');
		    $this->form_validation->set_error_delimiters('<li class="error list-group-item list-group-item-danger" role="alert">', '</li>');

		    $data['title'] = 'Add a new fitness class!';

		    $this->form_validation->set_rules('class_type', 'ClassType', 'required');
		    $this->form_validation->set_rules('instructor', 'Instructor', 'required');
	      	$this->form_validation->set_rules('location', 'Location', 'required');
	      	$this->form_validation->set_rules('start_time', 'StartTime', 'required');
	      	$this->form_validation->set_rules('date', 'Date');

		    if ($this->form_validation->run() === FALSE)
		    {
		        $this->load->view('templates/manage_header', $data);
		        $this->load->view('manage/create_class');
		        $this->load->view('templates/manage_footer');

		    }
		    else
		    {
		        $this->ManageMdl->set_classes();
		        $this->load->view('manage/success', $data);
		    }
		} 
		else 
		{
			// If no session, redirect to login
			redirect('/login', 'refresh');
		}
	}


	public function classTypes() {

		$data['title'] = 'Edit class types!';

		$this->load->view('templates/header', $data);
		$this->load->view('manage/edit_classtypes');
		$this->load->view('templates/footer');

	}


	public function profile() {

		$data['title'] = 'Edit profile!';

		$this->load->view('templates/header', $data);
		$this->load->view('manage/edit_profile');
		$this->load->view('templates/footer');
		
	}


	public function reports() {

		$data['title'] = 'Reports!';

		$this->load->view('templates/header', $data);
		$this->load->view('manage/reports');
		$this->load->view('templates/footer');
		
	}


}

?>
