<?php if  ( !defined('BASEPATH')) exit('No direct scrip access allowed');

class LoginCtrl extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('User_model', '', TRUE);
	}

	function index() {
		
		//cedentials validation
		$this->load->library('form_validation');

		$this->form_validation->set_rules('uname', 'Username', 'trim|required');
		$this->form_validation->set_rules('pword', 'Password', 'trim|required|callback_password_check');

		if($this->form_validation->run() == FALSE) {
			// Field validation failed. Redirct.
			$data['title'] = "Hawkfitness Admin Login";
			$data['css'] = 'login.css';
			$this->load->helper(array('form'));
			$this->load->view('templates/header', $data);
			$this->load->view('public/login');
		} else {
			//Go to manage area
			redirect('manage/');
		}
	}

	function password_check($password) {
		//Field validation succeeses. Validata against database
		$username = $this->input->post('uname');

		// Query the DB
		$result = $this->User_model->login($username, $password);

		if($result) {
			$sess_array = array();
			foreach ($result as $row) {

				$sess_array =  array('id' => $row->id, 'username' => $row->uname);
				$this->session->set_userdata('logged_in', $sess_array);
			}

			return TRUE;

		} else {
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return FALSE;
		}
	}
}


?>
