<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Myproduct_model extends MY_Model {
    /*     * ******************
     *
     * function constructor
     * 
     * @param		null
     * @return 		null
     * 
     */

    function Myproduct_model() {
        parent::__construct();

        
        $this->table = 'myproducts';
        $this->primary_key = 'myproducts.myproductid';
        
        
        $this->table2 = 'products';
        $this->table3 = 'business_profile';
        $this->table4 = 'mydocs';
    }
    
    function get_myProductsBusiness($w_data){
        $this->db->join($this->table2, "{$this->table2}.productid= {$this->table}.productid", 'left');
        $this->db->join($this->table3, "{$this->table3}.businessid= {$this->table2}.businessid", 'left');
        $this->db->where($w_data);
        return $this->db->get($this->table);
    }
    
    function get_myProductsDocs($w_data){
        $this->db->where($w_data);
        return $this->db->get($this->table4);
    }
    
    function insert_myProductsDocs($data){
        $insert = $this->db->insert_batch($this->table4,$data);
        return $insert ? true : false;
    
    }
    
    function delete_myProductsDocs($w_data){
        $this->db->where($w_data);
        return $this->db->delete($this->table4);
    }

}

/* End of file Myproduct_model.php */