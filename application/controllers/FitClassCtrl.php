<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	ClassType Controller - This controller provides CRUD functions for class type operations.
*/

//session_start(); // Call PHP's session object to access it through CI
class FitClassCtrl extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        if($this->session->userdata('logged_in')!=TRUE){
            redirect('login');
        }
		$this->load->database();
		$this->load->helper('url_helper');
		$this->load->library('form_validation');
		$this->load->model('FitClass_model');
	}

	// Display  all current Class Types in database
	public function index()
	{
			// load class type model
			// call the model function to get the data
			$this->load->model('ClassType_model');
			$classes = $this->FitClass_model->get_fitclass_list();
			$data['fitclasslist'] = $classes;
			$data['classtypes'] = $this->ClassType_model->get_classtype_names();
			$data['title'] = 'Fitness Classes';

			$this->load->view('templates/admin_header', $data);
			$this->load->view('manage/fitclasses', $data);
			$this->load->view('templates/admin_footer');


	}

	function createFitClass() {
        // database insert code
        if($this->input->post('submit')=='Add Class'){

            if($this->session->userdata('logged_in')['submit'] == 'true'){
                //redirect user back to create class page if they hit refresh
                //to prevent double submission
                redirect('manage/new_fitnessclass');
            }

            $sess = $this->session->userdata('logged_in');
            $sess['submit'] ='true';
            $this->session->set_userdata('logged_in', $sess);

            $class_type=$this->input->post('class_type');
            $instructor=$this->input->post('instructor');
            $location=$this->input->post('location');
            $start_time=$this->input->post('start_time');
            $date=$this->input->post('date');

            $add = $this->FitClass_model->insertClass($class_type,$instructor,$location,$start_time,$date);

            if($add){

            	//redirect('manage/fitnessclasses');

                //$data['title'] = 'Add New Class to Schedule';

                # Genereate the dropdown data for the "Class Type" selection
                $this->load->model('ClassType_model');
                $data['success'] ="success";

                $data['title'] = 'Add New Class to Schedule';

                # Genereate the dropdown data for the "Class Type" selection
                $this->load->model('ClassType_model');
                $data['classtype_options'] = $this->ClassType_model->get_classtype_names();
								$this->load->view('templates/admin_header', $data);
								$this->load->view('manage/create_class', $data);
								$this->load->view('templates/admin_footer');
           }
        }

        else{

        	$this->load->helper('form');
            #create a _POST submit session variable to prevent double submissions
            $sess = $this->session->userdata('logged_in');
            $sess['submit'] ='false';

            $this->session->set_userdata('logged_in', $sess);
			$data['title'] = 'Add New Class to Schedule';

			# Genereate the dropdown data for the "Class Type" selection
			$this->load->model('ClassType_model');
			$data['classtype_options'] = $this->ClassType_model->get_classtype_names();
				$this->load->view('templates/admin_header', $data);
				$this->load->view('manage/create_class', $data);
				$this->load->view('templates/admin_footer');
        }


    }
		function editClass(){
			$id= $this->uri->segment(4);
			// $class_type = $this->input->post('class_type');
			// $instructor = $this->input->post('instructor');
			// $location = $this->input->post('location');
			// $date = $this->input->post('date');
			// $start_time = $this->input->post('start_time');
			$query= $this->FitClass_model-> updateFitClass($id);
			if($query){
				redirect('manage/fitnessclasses');
			}
			else{
				show_404();
			}
		}
    function editFitClass($id) {
	    // database update code

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


		}


    function deleteFitClass($id) {
        // database delete code

	    	$id = $this->uri->segment(4);
	    	$data['class_to_delete'] = $this->FitClass_model->get_fitclass($id);

	        	if (empty($data['class_to_delete']))
				{
					show_404();
				}

				$this->FitClass_model->deleteFitClass($id);
				redirect('manage/fitnessclasses');
		}
    function multipleDelete(){
        $entries = $this->input->post('selected');
        $query = $this->FitClass_model->batchDelete($entries);
        echo "yes";
    }

}

?>
