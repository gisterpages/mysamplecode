<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authlib extends CI_Controller {

    /**
      # constructor
     */
    function authlib() {
        parent::__construct();

        $this->load->model('customerlogin_model');
    }

    function authenticate() {
        


        //get username and password
        $data['username'] = trim($this->input->post('txt_email'));
        $data['password'] = md5($this->input->post('txt_pass'));

        //calling the user signin function to set session
        $authen = $this->customerlogin_model->get_rows($sel = '', $data);

        if ($authen) {
            if ($authen->row()->status == 'email_conf') {
                $messag = 'Your account is not yet activated, please check your email for activation link or contact the support team.';
                $mess = message_get("error", $messag);
                $this->session->set_flashdata('login_error_message', $mess);
                redirect();
            } else if ($authen->row()->status == 'inactive') {
                $messag = 'Your account is blocked by admin, please contact admin';
                $mess = message_get("error", $messag);
                $this->session->set_flashdata('login_error_message', $mess);
                redirect();
            } else {
             
                $this->session->set_userdata(array(
                    'user_id' => $authen->row()->loginid,
                    'user_email' => $authen->row()->username,
                    'user_type' => 'user',
                    'customer_id' => $authen->row()->customerid,
                    'logged_in' => TRUE
                ));
                userActivityLog('User Logged in', 'User');

                redirect('profile');
           
            }
        } else {
            $messag = 'Incorrect Username or Password';
            $mess = message_get("error", $messag);
            $this->session->set_flashdata('login_error_message', $mess);
            redirect();
        }
    }
    
    

}
