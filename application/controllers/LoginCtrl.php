<?php if  ( !defined('BASEPATH')) exit('No direct scrip access allowed');

class LoginCtrl extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('User_model', '', TRUE);
        $this->load->library('form_validation');
        $this->load->helper('form');
	}

	function index() {
		
		//cedentials validation

		$this->form_validation->set_rules('uname', 'Username', 'trim');
		$this->form_validation->set_rules('pword', 'Password', 'trim|callback_password_check');

		if($this->form_validation->run() == FALSE) {
			// Field validation failed. Redirct.
			$data['title'] = "Hawkfitness Admin Login";
			$data['extraRef'] = array('<link rel="stylesheet" href="'.base_url('assets/css/login.css').'">');
			$this->load->view('public/login',$data);
		} else {
			//Go to manage area
			redirect('manage/');
		}
	}

	function password_check($password) {
		//Field validation succeeses. Validate against database
		$username = $this->input->post('uname');

		// Query the DB
		$result = $this->User_model->login($username, $password);

		if($result ==true) {
			$sess_array = array();
			foreach ($result as $row) {

				$sess_array =  array('id' => $row->id, 'username' => $row->uname);
				$this->session->set_userdata('logged_in', $sess_array);
			}

			return TRUE;

		} else {
			$this->form_validation->set_message('password_check', 'Invalid username or password.');
			return FALSE;
		}
	}
    
    function forgotPassword(){
        $data['title'] = "Forgot Password";
        $data['extraRef'] = array('<link rel="stylesheet" href="'.base_url('assets/css/login.css').'">');
        $this ->load->view('public/forgotPassword',$data);
    }
}


?>
