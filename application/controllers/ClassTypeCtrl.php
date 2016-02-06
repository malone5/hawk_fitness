<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	ClassType Controller - This controller provides CRUD functions for class type operations.
*/

//session_start(); // Call PHP's session object to access it through CI
class ClassTypeCtrl extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url_helper');
	}

	public function index()
	{

		if($this->session->userdata('logged_in')) {

			// load class type model
			$this->load->model('ClassType_model');
			// call the model function to get the data
			$classtypes = $this->ClassType_model->get_classtype_list();
			$data['classtypelist'] = $classtypes;
			$data['title'] = 'Manage Class Types';

			$this->load->view('templates/admin_header', $data);
			$this->load->view('manage/classtypes', $data);
			$this->load->view('templates/admin_footer');

		} else {
			// If no session, redirect to login
			redirect('public/login', 'refresh');
		}

	}

	function fetchAllClassTypes() {
        // database fetch code
    }

	function addClassType() {
        // database insert code
    }

     function fetchClassType() {
        // database fetch code
    } 

    function updateClassType() {
        // database update code
    }

    function deleteClassType() {
        // database delete code
    }

    

}

?>
