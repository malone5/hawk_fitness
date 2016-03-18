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
		$this->load->library('form_validation');
		$this->load->model('ClassType_model');
		if($this->session->userdata('logged_in')!=true){
			redirect('login');
		}
	}
	// Display  all current Class Types in database
	public function index()
	{

			// load class type model
			$this->load->model('ClassType_model');
			// call the model function to get the data
			$classtypes = $this->ClassType_model->get_classtype_list();
			$data['classtypelist'] = $classtypes;
			$data['title'] = 'Class Types';
			$this->load->view('templates/admin_header', $data);
			$this->load->view('manage/classtypes', $data);
			$this->load->view('templates/admin_footer');
	}

	function createClassType() {
    // database insert code

    	$this->load->helper('form');
    	$this->form_validation->set_error_delimiters('<li class="error list-group-item list-group-item-danger" role="alert">', '</li>');

		$data['title'] = 'Add New Class Type';
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/admin_header', $data);
				$this->load->view('manage/create_classtype', $data);
				$this->load->view('templates/admin_footer');
			}
			else
			{

				$this->ClassType_model->insertClasstype();
				redirect('manage/classtypes', 'refresh');
			}
		}

    function editClassType($id) {
        // database update code
        	// take the 3rd segment/slug of the url which is the classtype id.  e.g. manage/classtypes/[ID HERE]
        	$id = $this->uri->segment(4);
        	$data['title'] = 'Edit Class Type';
					$data['classtype'] = $this->ClassType_model->get_classtype($id);
					if (empty($data['classtype']))
					{
						show_404();
					}
					$this->form_validation->set_rules('name', 'Name', 'required');
					$this->form_validation->set_rules('description', 'Description', 'required');
					if ($this->form_validation->run() === FALSE)
					{
						$this->load->view('templates/admin_header', $data);
						$this->load->view('manage/edit_classtype', $data);
						$this->load->view('templates/admin_footer');
					}
					else
					{
						$this->ClassType_model->updateClasstype($id);
						redirect('manage/classtypes');
					}

		}

    function deleteClassType($id) {
        // database delete code

        	$id = $this->uri->segment(4);
        	$data['class_to_delete'] = $this->ClassType_model->get_classtype($id);
        	if (empty($data['class_to_delete']))
					{
						show_404();
					}
					$this->ClassType_model->deleteClasstype($id);
					redirect('manage/classtypes');

		}
}
?>
