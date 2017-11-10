<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_model extends MY_Model {
    /*     * ******************
     *
     * function constructor
     * 
     * @param		null
     * @return 		null
     * 
     */

    function Product_model() {
        parent::__construct();

        
        $this->table = 'products';
        $this->primary_key = 'products.productid';
        
        $this->table2 = 'business_profile';
        $this->table3 = 'manuals';
        $this->table4 = 'states_us';
        
    }
    
    function get_all_manufacturer_products(){
        $this->db->join($this->table2, "{$this->table2}.businessid= {$this->table}.businessid", 'left');
        return $this->db->get($this->table);
    }
    
    function get_ProductsManuals($w_data){
        $this->db->where($w_data);
        return $this->db->get($this->table3);
    }
    
    function get_allStates(){
        return $this->db->get($this->table4)->result();
    }

}

/* End of file Product_model.php */