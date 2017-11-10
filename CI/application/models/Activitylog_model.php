<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Activitylog_model extends MY_Model {
    
    /*     * ******************
     *
     * function constructor
     * 
     * @param		null
     * @return 		null
     * 
     */

    function activitylog_model() {
        parent::__construct();

        $this->table = 'activity_log';
        $this->primary_key = 'activity_log.activitylogid';
    }

}

/* End of file activitylog_model.php */