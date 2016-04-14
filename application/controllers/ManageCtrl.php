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
			$data['role'] = $this->session->userdata('logged_in')['role'];
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
		public function userManual() {
			$data['title'] = 'User Manual';

			$this->load->view('templates/admin_header', $data);
			$this->load->view('manage/user_manual');
			$this->load->view('templates/admin_footer');
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
						$student_id = "";
						//checks if attendee type is not student and sets academinc type to empty
						if($this->input->post('academic')!='Student'){
                $academic = '';
            }
						//checks if an academic option was selected
            if($this->input->post('academic')==null){
                $academic = '';
            }
            else{
                $academic = $this->input->post('academic');
            }
						if(trim($this->input->post('studentID')) != ""){
            $student_id = 's'.$this->input->post('studentID');
						}

						//array of attendee information
						$attendeeInfo = array('class_type'=>$class_type, 'fname'=>$fname,'email'=>$email,'attendee'=>$attendee,
															'acad_level'=>$academic,'student_id'=>$student_id, 'date'=>date("Y-m-d")
														);
            $add = $this->Manage_model->insertAttendee($attendeeInfo);

            if($add){
							# insertion successful
								$this->session->set_flashdata('checkin_form_message','success');
								redirect(current_url());
            }
            else{
							$this->session->set_flashdata('checkin_form_message','negative');
							redirect(current_url());
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
			if($this->session->userdata('logged_in')['role']=='limited'){
				#if access is restricted to role redirect to dashboard
				redirect('manage');
			}
			$this->load->library('form_validation');
			$this->load->helper('form');
	    	$this->form_validation->set_error_delimiters('<li class="error list-group-item list-group-item-danger" role="alert">', '</li>');

			$data['title'] = 'Email List';

			$this->form_validation->set_rules('min', 'min');
			$this->form_validation->set_rules('max', 'max', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				$data['scheduale'] = $this->Manage_model->get_classes();
				$this->load->view('templates/admin_header', $data);
				$this->load->view('manage/email_list', $data);
				$this->load->view('templates/admin_footer');
			}
			else
			{

				$data['emails'] = $this->Manage_model->get_emails();
				$data['scheduale'] = $this->Manage_model->get_classes();
				$this->load->view('templates/admin_header', $data);
				$this->load->view('manage/email_list', $data);
				$this->load->view('templates/admin_footer');
			}

		}
		/*
		*	Creates the view for admin account settings page
		*/
		function account(){
				$this->load->model('User_model');
				$user_account = $this->User_model->getUser($this->session->userdata('logged_in')['id']);
				$data['user'] = $user_account['uname'];

				$this->load->view('templates/admin_header');
				$this->load->view('manage/account',$data);
				$this->load->view('templates/admin_footer');
		}

		function username(){
			// $curr_uname = $this->session->userdata('logged_in')['username'];
			$this->load->model('User_model');
			$id = $this->session->userdata('logged_in')['id'];
			$uname = trim($this->input->post('uname'));

			if($uname == ''){
				//if username input is empty
				$this->session->set_flashdata('error', '*username is blank');
				redirect('manage/account');
			}
			else{
				//If username input value is not empty
				$query = $this->User_model->updateUsername($uname,$id);
				if($query){
					$this->session->set_flashdata('user_update','Username Updated!');
					redirect('manage/account');
				}
				else{
					$this->session->set_flashdata('user_update','username not updated.');
					redirect('manage/account');
				}
			}
		}
		function password(){
			$this->load->model('User_model');
			$id = $this->session->userdata('logged_in')['id'];

			$current_password = trim($this->input->post('current_password'));
			$new_password = trim($this->input->post('new_password'));
			$new_password2 = trim($this->input->post('new_password2'));

			if($current_password == '' or $new_password == '' or $new_password2 == ''){
				//if any pf the passowrd inputs are empty
				$this->session->set_flashdata('password_update','*all password fields must be completed.');
				redirect('manage/account');
			}
			else if($new_password != $new_password2){
				//if the new_password fields do not match
				$this->session->set_flashdata('password_match','*new password fields must match!');
				redirect('manage/account');
			}
			elseif((strlen(utf8_decode($new_password)) < 6)){
				//if the new password length is less than 6
				$this->session->set_flashdata('password_length','*new password must be atleast 6 characters.');
				redirect('manage/account');
			}
			else{
				//if all validation is correct
				$password_check = $this->User_model->checkPassword($id); //get current user records
				if($password_check){
					//if current password input matches database password
					if(MD5($current_password) == $password_check['pword']){
						$query = $this->User_model->updatePassword(MD5($new_password),$id);
						if($query){
							$this->session->set_flashdata('success_password','Password Updated!');
							redirect('manage/account');
						}
						else{
							$this->session->set_flashdata('success_password','Something went wrong during update. Try again.');
							redirect('manage/account');
						}
					}
					else{
						$this->session->set_flashdata('error_password','Current password does not match our records!');
						redirect('manage/account');
					}
				}
				else{
					$this->session->set_flashdata('error_password','Something went wrong during the update process, try again');
					redirect('manage/account');
				}
			}
		}

}
?>
