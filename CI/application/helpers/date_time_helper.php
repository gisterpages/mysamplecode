<?php

function get_now_date_time(){
    
    //set indian time
    //$time_r = now()+(5*60*60+30*60); //gmt+5:30
    $now_gmt_time = now(); // GMT time
    $now_time = mdate('%Y-%m-%d %H:%i:%s', $now_gmt_time);
    return $now_time;
}

function get_curr_timestamp(){
    
    $now_gmt_time = time(); // GMT time
    return $now_gmt_time;
}
