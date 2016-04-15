<?php if  ( !defined('BASEPATH')) exit('No direct scrip access allowed');

    class LoginCtrl extends CI_Controller {

        function __construct() {
            parent::__construct();
            if($this->session->userdata('logged_in')==true){
                redirect('manage');
            }
            $this->load->model('User_model');
            $this->load->library('form_validation');
            $this->load->helper('form');
        }

        function index() {
            //cedentials validation
            if($this->input->post('submit')=='Login'){
                $username = trim($this->input->post('uname'));
                $password = trim($this->input->post('pword'));

                $check = $this->User_model->login($username,MD5($password));
                if($check){
                    //username is valid
                    $user_info = $this->User_model->getUserID($username); //user information
                    $session['id']=$user_info['id'];  //get user's id
                    $session['role']=$user_info['role'];  //get user's role
                    $this->session->set_userdata('logged_in', $session);
                    redirect('manage');
                }
                else{
                    $this->session->set_flashdata('login_error','Invalid username or password.');
                    redirect('login');
                }
            }

            else {
                $data['title'] = "Hawkfitness Admin Login";
                $data['extraRef'] = array('<link rel="stylesheet" href="'.base_url('assets/css/login.css').'">');
                $this->load->view('public/login',$data);
            }
        }
    }
?>
