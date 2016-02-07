<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	ClassType Controller - This controller provides CRUD functions for class type operations.
*/

//session_start(); // Call PHP's session object to access it through CI
class FitClassCtrl extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url_helper');
		$this->load->library('form_validation');
		$this->load->model('FitClass_model');
	}

	// Display  all current Class Types in database
	public function index()
	{

		if($this->session->userdata('logged_in')) {

			// load class type model
			$this->load->model('FitClass_model');
			// call the model function to get the data
			$classes = $this->FitClass_model->get_fitclass_list();
			$data['fitclasslist'] = $classes;
			$data['title'] = 'Fitness Classes';

			$this->load->view('templates/admin_header', $data);
			$this->load->view('manage/fitclasses', $data);
			$this->load->view('templates/admin_footer');

		} else {
			// If no session, redirect to login
			redirect('/login', 'refresh');
		}

	}

	function fetchAllClasses() {
        // database fetch code
    }

	function createFitClass() {
        // database insert code
        if($this->session->userdata('logged_in')) {

        	$this->load->helper('form');
        	$this->form_validation->set_error_delimiters('<li class="error list-group-item list-group-item-danger" role="alert">', '</li>');
			
			$data['title'] = 'Add New Class Type';

			# Genereate the dropdown data for the "Class Type" selection
			$this->load->model('ClassType_model');
			$data['classtype_options'] = $this->ClassType_model->get_classtype_names();


			$this->form_validation->set_rules('class_type', 'ClassType', 'required');
		    $this->form_validation->set_rules('instructor', 'Instructor', 'required');
	      	$this->form_validation->set_rules('location', 'Location', 'required');
	      	$this->form_validation->set_rules('start_time', 'StartTime', 'required');
	      	$this->form_validation->set_rules('date', 'Date');


			

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/admin_header', $data);
				$this->load->view('manage/create_class', $data);
				$this->load->view('templates/admin_footer');
			}
			else
			{
				
				$this->FitClass_model->insertFitClass();
				redirect('manage/fitnessclasses', 'refresh');
			}

		} else {
			// If no session, redirect to login
			redirect('/login', 'refresh');
		}
    }

     function fetchFitClass() {
        // database fetch code

        if($this->session->userdata('logged_in')) {



			

		} else {
			// If no session, redirect to login
			redirect('/login', 'refresh');
		}
    } 

    function editFitClass($id) {
        // database update code
        if($this->session->userdata('logged_in')) {

        	// take the 3rd segment/slug of the url which is the classtype id.  e.g. manage/classtypes/(action)/[ID HERE]
        	$id = $this->uri->segment(4);

        	$data['title'] = 'Edit Fitness Class';
        	# get the specified class to edit
			$data['class'] = $this->FitClass_model->get_fitclass($id);

			# Genereate the dropdown data for the "Class Type" selection
			$this->load->model('ClassType_model');
			$data['classtype_options'] = $this->ClassType_model->get_classtype_names();

			if (empty($data['class']))
			{
				show_404();
			}

			$this->form_validation->set_rules('class_type', 'ClassType', 'required');
		    $this->form_validation->set_rules('instructor', 'Instructor', 'required');
	      	$this->form_validation->set_rules('location', 'Location', 'required');
	      	$this->form_validation->set_rules('start_time', 'StartTime', 'required');
	      	$this->form_validation->set_rules('date', 'Date');


			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/admin_header', $data);
				$this->load->view('manage/edit_class', $data);
				$this->load->view('templates/admin_footer');
			}
			else
			{
				$this->FitClass_model->updateFitClass($id);
				redirect('manage/fitnessclasses');
			}
	

		} else {
			// If no session, redirect to login
			redirect('/login', 'refresh');
		}


    }

    function deleteFitClass($id) {
        // database delete code
        if($this->session->userdata('logged_in')) {

        	$id = $this->uri->segment(4);
        	$data['class_to_delete'] = $this->FitClass_model->get_fitclass($id);

        	if (empty($data['class_to_delete']))
			{
				show_404();
			}

			$this->FitClass_model->deleteFitClass($id);
			redirect('manage/fitnessclasses');

			

		} else {
			// If no session, redirect to login
			redirect('/login', 'refresh');
		}
    }

    

}

?>
