<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function activityLog($message, $mod) {
    
    if($message != '' && $mod != '' ) {
        $CI =& get_instance();
        
        $CI->load->model('activitylog_model');

        $data['usertype'] = NULL;
        $data['userid'] = 0;
        
        $data['activity'] = $message;
        $data['activity_datetime'] = get_now_date_time();
        
        $data['sessionid'] = 0;
        $data['ipaddress'] = $CI->input->ip_address();;
        
        $data['create_datetime'] = get_now_date_time();
        
        $CI->activitylog_model->insert_row($data);
        return;
    }
}

function userActivityLog($message, $mod) {
    
    if($message != '' && $mod != '' ) {
        $CI =& get_instance();
        
        $CI->load->model('activitylog_model');

        $data['userid'] = $CI->session->userdata('user_id');
        $data['usertype'] = $CI->session->userdata('user_type');
        
        $data['activity'] = $message;
        $data['activity_datetime'] = get_now_date_time();
        
        $data['sessionid'] = $CI->session->userdata('user_token');
        $data['ipaddress'] = $CI->input->ip_address();
        
        $data['create_datetime'] = get_now_date_time();
        
        $CI->activitylog_model->insert_row($data);
        return;
    }
}
//end of file.