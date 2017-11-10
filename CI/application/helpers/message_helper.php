<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function message_get($status , $message, $dismiss = 'yes') {
    $CI =& get_instance();
    switch($status){
        case "info":
            
            $first_string = '<div class="alert alert-info alert-dismissible" role="alert">';
            if($dismiss == 'yes') {
                $first_string .= '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';
            }
            $last_string = '</div>';
            break;
        case "success":
            
            $first_string = '<div class="alert alert-success alert-dismissible" role="alert">';
            if($dismiss == 'yes') {
                $first_string .= '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';
            }
            $last_string = '</div>';
            break;
        case "error":
            
            $first_string = '<div class="alert alert-danger alert-dismissible" role="alert">';
            if($dismiss == 'yes') {
                $first_string .= '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';
            }
            $last_string = '</div>';
            break;
        case "warning":
            
            $first_string = '<div class="alert alert-warning fade in">';
            if($dismiss == 'yes') {
                $first_string .= '<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>';
            }
            $last_string = '</div>';
            break;
    };
    $message = '<p>'.$message.'</p>';
    
    return $first_string . $message . $last_string;
    
    
}

//end of file message_helper.php