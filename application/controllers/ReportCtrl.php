<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	Report Controller
*/

class ReportCtrl extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        if($this->session->userdata('logged_in')!=true){
            redirect('login');
        }
		$this->load->model('Report_model');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	public function index(){
		if($this->session->userdata('logged_in')['role']=='limited'){
			#if access is restricted to role redirect to dashboard
			redirect('manage');
		}

		if($this->input->post('submit')=='Delete All'){
			$this->Report_model->clearAttendeeTable();

			$data['data_cleared_msg'] =  'Attendee data has been cleared from the daatabase.';


			$data['attendees'] = $this->Report_model->getAttendees();
			$data['title'] = 'Reports';

			$this->load->view('templates/admin_header', $data);
			$this->load->view('manage/reports', $data);
			$this->load->view('templates/admin_footer');


		} else {
			// And now, you can show a list of the elements you want to show from the page:
    	$data['attendees'] = $this->Report_model->getAttendees();
			$data['title'] = 'Reports';

			$this->load->view('templates/admin_header', $data);
			$this->load->view('manage/reports', $data);
			$this->load->view('templates/admin_footer');
		}

	}

	public function getAttendees()
    {
        $data = $this->Report_model->get_attendees();
        echo json_encode($data);
    }

}

?>
