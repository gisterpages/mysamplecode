<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    /**
      # constructor
     */
    function profile() {
        parent::__construct();

        $this->data['logo'] = SITE_NAME;
        $this->_init();

        //load models
        $this->load->model('customerlogin_model');
        $this->load->model('customerprofile_model');
        $this->load->model('activitylog_model');

        //load helpers
        $this->load->helper('date_time_helper');
        $this->load->helper('auth_helper');

        $this->load->library('email');
        
        $this->_isLoggedIn();
    }

    function _init() {
        $this->output->set_template('default');
        
    }

    function _isLoggedIn() {
        if (!is_logged_in()) {
            $mess_display = 'Access restricted please login';
            $mess = message_get('info', $mess_display);
            $this->session->set_flashdata('message', $mess);
            redirect();
        }
    }

    public function index() {
        
        $this->data['nav_profile'] = 1;
        $customerid = $this->session->userdata('customer_id');
        $this->data['records'] = $this->customerprofile_model->get_by_id($customerid)->row();

        $this->load->view('default/profileview', $this->data);
    }

    public function editProfile() {
        $this->_isLoggedIn();
        $customerid = $this->session->userdata('customer_id');
        $this->data['records'] = $this->customerprofile_model->get_by_id($customerid)->row();

        $this->load->view('default/editprofile', $this->data);
    }

    public function updateProfile() {
        
         $now_time = mdate('%Y-%m-%d %H:%i:%s');

        $data['customerid'] = $id = $this->input->post('modify_id');
        $data['name'] = $this->input->post('name');
        $data['address1'] = $this->input->post('address1');
        $data['address2'] = $this->input->post('address2');
        $data['city'] = $this->input->post('city');
        $data['state'] = $this->input->post('state');
        $data['zip'] = $this->input->post('zip');
        $data['mobile'] = $this->input->post('mobile');
        $data['household_income'] = $this->input->post('household_income');
        $data['education'] = $this->input->post('education');
        $data['hoousehold_members'] = $this->input->post('hoousehold_members');
        $data['own_rent'] = $this->input->post('own_rent');
        $data['employment'] = $this->input->post('employment');
        $data['dob'] = $this->input->post('dob');
        $data['marital_status'] = $this->input->post('marital_status');
        $data['kids'] = $this->input->post('kids');
        $data['update_datetime'] = $now_time;
     
        $res = $this->customerprofile_model->updateData($data, $id);
   
        redirect('profile');
    }

}
