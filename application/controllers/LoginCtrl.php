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
                $username=$this->input->post('uname');
                $password=$this->input->post('pword');
                $check = $this->User_model->login($username,$password);
                if($check){
                    //username is valid
                    $session = array('username'=>$username);
                    $this->session->set_userdata('logged_in', $session);
                    redirect('manage');
                }
                else{
                    $data['title'] = "Hawkfitness Admin Login";
                    $data['invalid']='Invalid username or password.';
                    $data['extraRef'] = array('<link rel="stylesheet" href="'.base_url('assets/css/login.css').'">');
                    $this->load->view('public/login',$data);  
                }
            }
         
            else {
                $data['title'] = "Hawkfitness Admin Login";
                $data['extraRef'] = array('<link rel="stylesheet" href="'.base_url('assets/css/login.css').'">');
                $this->load->view('public/login',$data);  
            }
        }

//        function password_check($password) {
//            //Field validation succeeses. Validate against database
//            $username = $this->input->post('uname');
//
//            // Query the DB
//            $result = $this->User_model->login($username, $password);
//
//            if($result ==true) {
//                $sess_array = array();
//                foreach ($result as $row) {
//
//                    $sess_array =  array('id' => $row->id, 'username' => $row->uname,'logged_in'=>true);
//                    $this->session->set_userdata('logged_in', $sess_array);
//                }
//
//                return TRUE;
//
//            } else {
//                $this->form_validation->set_message('password_check', 'Invalid username or password.');
//                return FALSE;
//            }
//        }

        function forgotPassword(){
            if($this -> input ->post('reset')){
                $email = trim($this->input->post('email'));
                $check = $this ->User_model->checkEmail($email); 
                if($check ==true){
                    $newPassword = $this->generatePassword(10,false,'luds');
                    $updatePassword = $this->User_model->updatePassword($email,$newPassword);
                    if($updatePassword ==true){
                        //enter reset password  mail code here
                        $data['title'] = "Forgot Password";
                        $data['info'] ='1';
                        $data['extraRef'] = array('<link rel="stylesheet" href="'.base_url('assets/css/login.css').'">');
                        $this ->load->view('public/forgotPassword',$data);
                    }
                    else{
                        echo "error";
                    }
                }
                else{
                    $data['title'] = "Forgot Password";
                    $data['info'] ='0';
                    $data['extraRef'] = array('<link rel="stylesheet" href="'.base_url('assets/css/login.css').'">');
                    $this ->load->view('public/forgotPassword',$data);
                }
            }
            else{
                $data['title'] = "Forgot Password";
                $data['extraRef'] = array('<link rel="stylesheet" href="'.base_url('assets/css/login.css').'">');
                $this ->load->view('public/forgotPassword',$data);
            }
        }
        
        function generatePassword($length, $add_dashes, $available_sets )
        {
            $sets = array();
            if(strpos($available_sets, 'l') !== false)
                $sets[] = 'abcdefghjkmnpqrstuvwxyz';
            if(strpos($available_sets, 'u') !== false)
                $sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
            if(strpos($available_sets, 'd') !== false)
                $sets[] = '23456789';
            if(strpos($available_sets, 's') !== false)
                $sets[] = '!@#$%&*?';
            $all = '';
            $password = '';
            foreach($sets as $set)
            {
                $password .= $set[array_rand(str_split($set))];
                $all .= $set;
            }
            $all = str_split($all);
            for($i = 0; $i < $length - count($sets); $i++)
                $password .= $all[array_rand($all)];
            $password = str_shuffle($password);
            if(!$add_dashes)
                return $password;
            $dash_len = floor(sqrt($length));
            $dash_str = '';
            while(strlen($password) > $dash_len)
            {
                $dash_str .= substr($password, 0, $dash_len) . '-';
                $password = substr($password, $dash_len);
            }
            $dash_str .= $password;
            return $dash_str;
        }
    }
?>
