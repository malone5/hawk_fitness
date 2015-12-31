<?php

/*
	Public Controller - This controller provides functions for all site visitors
*/
class HomeCtrl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('HomeMdl');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['classes'] = $this->HomeMdl->get_classes();
		$data['title'] = 'Hawk Fitness Classes';

		$this->load->view('templates/header', $data);
		$this->load->view('public/index', $data);
		$this->load->view('templates/footer');
	}

}

?>
