<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	Manage Controller - This controller provides functions for users logged in as a Manager.
*/

//session_start(); // Call PHP's session object to access it through CI
class ManageCtrl extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Manage_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		if($this->session->userdata('logged_in')) {

			$data['classes'] = $this->Manage_model->get_classes();
			$data['title'] = 'HawkFitness Admin Dashboard';

			$this->load->view('templates/admin_header', $data);
			$this->load->view('manage/dashboard', $data);
			$this->load->view('templates/admin_footer');

		} else {
			// If no session, redirect to login
			redirect('login');
		}
		
	}

	function logout() 
	{
		$this->session->unset_userdata('logged_in');
	    session_destroy();
	    redirect('/', 'refresh');
	}


	public function profile() {

		$data['title'] = 'Edit profile!';

		$this->load->view('templates/admin_header', $data);
		$this->load->view('manage/edit_profile');
		$this->load->view('templates/admin_footer');
		
	}

	//This will be removed to a "Report Controller" when reports are implemented
	public function reports() {

		$data['title'] = 'Reports!';

		$this->load->view('templates/admin_header', $data);
		$this->load->view('manage/reports');
		$this->load->view('templates/admin_footer');
		
	}


}

?>
