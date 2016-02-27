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
		// 'Logged In' functions. Consider splitting the functions.
        if($this->session->userdata('logged_in'))
		{
            $data['admin_btn']="Manage"; // Admin Button
			// $data['logout_btn']="Logout"; // Logout Button
			echo "<input type='button' class='btn btn-primary' value=''<?php echo Logout;?>'' onclick='location.href='<?php echo site_url('manage/logout');?>''></input>";
            $data['classes'] = $this->Home_model->get_classes();
            $data['title'] = 'Hawk Fitness Classes';
            $data['extraRef']=array(
                    '<link rel="stylesheet" href="'.base_url('assets/css/main.css').'">',
                    '<link rel="stylesheet" href="'.base_url('assets/css/header.css').'">',
                    '<script src="'.base_url('assets/js/grabSchedule.js').'"></script>'
            );

            $this->load->view('templates/header', $data);
            $this->load->view('public/admin_index', $data);
            $this->load->view('templates/footer');
        }
        else
		{
            $data['admin_btn']="Administration";
            $data['classes'] = $this->Home_model->get_classes();
            $data['title'] = 'Hawk Fitness Classes';
            $data['extraRef']=array(
                    '<link rel="stylesheet" href="'.base_url('assets/css/main.css').'">',
                    '<link rel="stylesheet" href="'.base_url('assets/css/header.css').'">',
                    '<script src="'.base_url('assets/js/grabSchedule.js').'"></script>'
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

}

?>
