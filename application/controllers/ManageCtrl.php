<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	Manage Controller - This controller provides functions for users logged in as a Manager.
*/

class ManageCtrl extends CI_Controller {

		function __construct()
		{
			parent::__construct();
	        if($this->session->userdata('logged_in')!=true){
	            redirect('login');
	        }
			$this->load->model('Manage_model');
			$this->load->helper('url');
			$this->load->helper('form');
		}

		public function index(){
			$num = $this->getCheckinAmount();//Get the number of classes for the day
			$data['checkin_amount']=$num;
      		$data['classes'] = $this->Manage_model->get_classes();
			$data['title'] = 'HawkFitness Admin Dashboard';
			$this->load->view('templates/admin_header', $data);
			$this->load->view('manage/dashboard', $data);
			$this->load->view('templates/admin_footer');
		}

		function logout()
		{
			$this->session->unset_userdata('logged_in');
		    session_destroy();
		    redirect('/');
		}


		public function profile() {

			$data['title'] = 'Edit profile!';

			$this->load->view('templates/admin_header', $data);
			$this->load->view('manage/edit_profile');
			$this->load->view('templates/admin_footer');

		}

		//This will be removed to a "Report Controller" when reports are implemented
		public function reports() {
			redirect ('manage/reports');
			//
			// $data['title'] = 'Reports!';
			//
			// $this->load->view('templates/admin_header', $data);
			// $this->load->view('manage/reports');
			// $this->load->view('templates/admin_footer');

		}

		public function manage_checkin(){
			$tDate = new DateTime();
			$query = $this->Manage_model->getTodaysClasses($tDate->format("y-m-d"));
			$data['classes']=array();
			if($query){
				$data['classes'] = $query;
			}
			else{
				$data['classes']=0;
			}
			$this->load->view("templates/admin_header");
			$this->load->view('manage/checkin',$data);
			$this->load->view("templates/admin_footer");
		}
		/*
		*	This method adds the information entered at checkin page for each fitness class to
		*	the database for reports.
		*/
    public function checkin(){
       if($this->input->post('submit')=='sign in'){

            if($this->session->userdata('logged_in')['dbl_submit']==true){
                //prevent double entry for attendee sign in
                redirect(current_url());
            }
            $sess = $this->session->userdata('logged_in');
            $sess['dbl_submit'] ='true';
            $this->session->set_userdata('logged_in', $sess);
            $id =$this->uri->segment(2);
            $data['class'] = $this->Manage_model->getClass($id);
            $data['seg']=$id;
						$data['title']='Check in';

						//post data
            $class_type = $this->input->post('class_type');
            $fname = $this->input->post('fname');	//full name
            $email = $this->input->post('email');
            $attendee = $this->input->post('attendee');

						//checks if an academic option was selected
            if($this->input->post('academic')==null){
                $academic = '';
            }
            else{
                $academic = $this->input->post('academic');
            }

            $student_id = 's'.$this->input->post('studentID');
						//array of attendee information
						$attendeeInfo = array('class_type'=>$class_type, 'fname'=>$fname,'email'=>$email,'attendee'=>$attendee,
															'acad_level'=>$academic,'student_id'=>$student_id, 'date'=>date("Y-m-d")
														);
            $add = $this->Manage_model->insertAttendee($attendeeInfo);

            if($add){
                # insertion successful
                $data['success'] = 'sign in successful';
                $this->load->view('manage/check_in',$data);
            }
            else{
                $data['success'] = 'Error with db';
                $this->load->view('manage/check_in',$data);
            }

        }
        else{
            $sess = $this->session->userdata("logged_in");
            $sess['dbl_submit']=false;
            $this->session->set_userdata('logged_in',$sess);
            $id =$this->uri->segment(2);
            $data['class'] = $this->Manage_model->getClass($id);
            $data['seg'] =$id;
            $data['title']='Check in';
						$this->load->view('manage/check_in',$data);
        }
    }

	// Queries the database for classes matching today's date and return an array
	function getCheckinAmount(){
			$amount = new DateTime();
			$num = 0;
			$amountQ = $this->Manage_model->getTodaysClasses($amount->format("y-m-d"));
			if($amountQ){
				$num=sizeof($amountQ);
				return $num;
			}
			else{
				return $num;
			}

	}


	function emailList(){
		$this->load->library('form_validation');
		$this->load->helper('form');
    	$this->form_validation->set_error_delimiters('<li class="error list-group-item list-group-item-danger" role="alert">', '</li>');

		$data['title'] = 'Email List';
		
		$this->form_validation->set_rules('min', 'min');
		$this->form_validation->set_rules('max', 'max', 'required');

		if ($this->form_validation->run() === FALSE)
		{

			$this->load->view('templates/admin_header', $data);
			$this->load->view('manage/email_list', $data);
			$this->load->view('templates/admin_footer');
		}
		else
		{

			$data['emails'] = $this->Manage_model->getEmails();
			$this->load->view('templates/admin_header', $data);
			$this->load->view('manage/email_list', $data);
			$this->load->view('templates/admin_footer');
		}

	}
}

?>
