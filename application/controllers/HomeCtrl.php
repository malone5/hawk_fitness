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
		$data['classes'] = $this->Home_model->get_classes();
		$data['title'] = 'Hawk Fitness Classes';
        $data['week'] = array('Monday','Tuesday','Wednesday','Thursday','Friday');
		$data['extraRef']=array(
                '<link rel="stylesheet" href="'.base_url('assets/css/main.css').'">',
                '<link rel="stylesheet" href="'.base_url('assets/css/header.css').'">'
                
        );

		$this->load->view('templates/header', $data);
		$this->load->view('public/index', $data);
		$this->load->view('templates/footer');
	}
    
    public function logins()
    {
        
    }

}

?>
