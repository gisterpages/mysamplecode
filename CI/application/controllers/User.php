<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    /**
      # constructor
     */
    function user() {
        parent::__construct();

        $this->data['logo'] = SITE_NAME;
        $this->_init();
        
        //load models
        $this->load->model('customerlogin_model');
        $this->load->model('customerprofile_model');
        $this->load->model('activitylog_model');
        
        //load library
        $this->load->library('email');
        
    }

    function _init() {
        $this->output->set_template('default');
        /*
         * css to be loaded on all pages
         */

        /*
         * js to be loaded on all pages
         */
    }

    public function index() {
        $this->data['nav_home'] = 1;
        $this->load->view('default/home', $this->data);
    }

    public function signup() {
        
        if($this->input->post('submit')){
            $this->_register();
            
        }
        $this->load->view('default/signup', $this->data);
    }

    public function forgot_password() {
        $this->load->view('default/forgot-password', $this->data);
    }


    
    public function about() {
        $this->_isLoggedIn();
        $this->load->view('default/about', $this->data);
    }
    
    public function contact() {
        $this->_isLoggedIn();
        $this->load->view('default/contact', $this->data);
    }
    
    public function careers() {
        $this->_isLoggedIn();
        $this->load->view('default/careers', $this->data);
    }
    
    public function terms() {
        $this->_isLoggedIn();
        $this->load->view('default/terms', $this->data);
    }
    
    public function privacy() {
        $this->_isLoggedIn();
        $this->load->view('default/privacy', $this->data);
    }

    function _isLoggedIn(){
        if(!is_logged_in()){
            $mess_display = 'Access restricted please login';
            $mess = message_get('info', $mess_display);
            $this->session->set_flashdata('message', $mess);
            redirect();
        }
    }
    function _register() {
        
        //check for duplication
        $reg_data['username'] = $email = $this->input->post('email');
        
        $is_user = $this->customerlogin_model->is_exists($reg_data, TRUE);
        
        if ($is_user) {
            $mess_display = 'This id is already being registered, please login';
            $mess = message_get('info', $mess_display);
            $this->session->set_flashdata('message', $mess);
        } else {
            
            $profile_data['name'] = $this->input->post('name');
            $userId = $this->customerprofile_model->insert_row($profile_data, TRUE);
            if ($userId) {
                $reg_data['customerid'] = $userId;
                $reg_data['password'] = md5($this->input->post('password'));
                $reg_data['create_datetime'] = get_now_date_time();
                $reg_data['status'] = 'email_conf';
                $reg_data['token'] = $token = md5($userId . time());
                
                $reg_data['securityquestion1'] = 'q1';
                $reg_data['securityanswer1'] = 'answer1';
                $reg_data['securityquestion2'] = 'q2';
                $reg_data['securityanswer2'] = 'answer2';
                

                $add_user = $this->customerlogin_model->insert_row($reg_data);

                if ($add_user > 0) {
                    
                    $config['charset'] = 'utf-8';
                    $config['wordwrap'] = TRUE;
                    $config['mailtype'] = 'html';

                    $this->email->initialize($config);
                    
                    $from = "user@example.com";
                    $to = "gisterpages@gmail.com,".$email;
                    $subject = SITE_NAME . " - Email Confirmation";
                    $message = "";
                    $message .= "<p>Hi,</p>";
                    $message .= "<p>Thankyou for registering with us. Please follow the following link to confirm your email address</p>";
                    $message .= "<p><a href='". base_url() ."user/confirm_email/".$token . "'>Confirm Email Here</a></p>";
                    $message .= "<p>or copy past the following url - ". base_url() ."user/confirm_email/".$token . "</p>";
                    $message .= "<p>Team ". SITE_NAME."</p>";
                    
                    $this->email->from($from, SITE_NAME);
                    $this->email->to($to);
                    
                    $this->email->subject($subject);
                    $this->email->message($message);

                    $this->email->send();

                    activityLog('An user signed up', 'user');

                    $mess_display = 'Registration successfull, Please check your email for confirmation link and procedures';
                    $mess = message_get('info', $mess_display);
                    $this->session->set_flashdata('message', $mess);

                } else {
                    $mess_display = 'Registration failed please try again later';
                    $mess = message_get('info', $mess_display);
                    $this->session->set_flashdata('message', $mess);
                }
            }
        }
        
    }
    
    function confirm_email($token) {

        $now_time = get_now_date_time();

        $data['update_datetime'] = $now_time;
        $data['status'] = 'active';
        $w_data['token'] = $token;
        $update_user = $this->customerlogin_model->update_row($data, $w_data);
        if ($update_user) {
            $messag = 'Your account is now active, please signin';
            $mess = message_get("info", $messag);
            $this->session->set_flashdata('message', $mess);
        } else {
            $messag = 'Your email not yet confirmed, and some thing is wrong with your url, please check or contact the support.';
            $mess = message_get("info", $messag);
            $this->session->set_flashdata('message', $mess);
        }
        redirect();
    }
    
    function logout() {
       
        userActivityLog('User Logged out', 'User');

        $this->session->sess_destroy();

        $messag = 'You have logged out!';
        $mess = message_get("info", $messag);
        $this->session->set_flashdata('message', $mess);

        redirect();
    }
}
