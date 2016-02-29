<?php

/*
	Public Controller - This controller provides functions for all site visitors
*/
class HomeCtrl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$date = new DateTime(); //today's date
		$start_date_holder = $this->start_of_week($date->format('W'), $date->format('Y'));//retrieves the date for the monday of the week
		$start_date = new DateTimeImmutable($start_date_holder);//unformatted start of the week date
		$end_date = $start_date->modify('+6 day'); //unformatted end of the week date

  		if($this->session->userdata('logged_in')){
				//admin view
          $data['admin_btn']="Manage";
          $data['classes'] = $this->Home_model->get_classes();
          $data['title'] = 'Hawk Fitness Classes';
					$data['week']=array('Monday','Tuesday','Wednesday','Thursday');
					$data['week2']=array('Friday','Saturday','Sunday');
					$data['week_date']=array($start_date->format('m/d/y'),$end_date->format('m/d/y'));
          $data['extraRef']=array(
                  '<link rel="stylesheet" href="'.base_url('assets/css/main.css').'">',
                  '<link rel="stylesheet" href="'.base_url('assets/css/header.css').'">',
                  //'<script src="'.base_url('assets/js/grabSchedule.js').'"></script>'
          );

          $this->load->view('templates/header', $data);
          $this->load->view('public/index', $data);
          $this->load->view('templates/footer');
      }
      else{
				//public view
          $data['admin_btn']="Administration";
          $data['classes'] = $this->Home_model->get_classes();
          $data['title'] = 'Hawk Fitness Classes';
					$data['week']=array('Monday','Tuesday','Wednesday','Thursday');
					$data['week2']=array('Friday','Saturday','Sunday');
					$data['week_date']=array($start_date->format('m/d/y'),$end_date->format('m/d/y'));
          $data['extraRef']=array(
                  '<link rel="stylesheet" href="'.base_url('assets/css/main.css').'">',
                  '<link rel="stylesheet" href="'.base_url('assets/css/header.css').'">',
                  //'<script src="'.base_url('assets/js/grabSchedule.js').'"></script>'
          );

          $this->load->view('templates/header', $data);
          $this->load->view('public/index', $data);
          $this->load->view('templates/footer');
      }
	}

    public function getSchedule()
    {
        $users = $this->Home_model->get_classes();
        echo json_encode($users);
    }

		/*
		*		returns the First date/day of the week(assuming Monday is the start of the week).
		*/
		public function start_of_week($week, $year, $format = 'Ymd', $date = FALSE){

        if ($date) {
            $week = date("W", strtotime($date));
            $year = date("o", strtotime($date));
        }

        $week = sprintf("%02s", $week);
        $desiredMonday = date($format, strtotime("$year-W$week-1"));
        return $desiredMonday;
		}
}

?>
