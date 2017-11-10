<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    /**
      # constructor
     */
    function products() {
        parent::__construct();

        $this->data['logo'] = SITE_NAME;
        $this->_init();

        //load models
        $this->load->model('product_model');
        $this->load->model('myproduct_model');

        //load helpers
        $this->load->helper('date_time_helper');
        $this->load->helper('auth_helper');

        $this->load->library('email');

        if(!is_logged_in()){
            redirect();
        }
    }
    
    function _init() {
        $this->output->set_template('default');
        
    }
    
    /*
     * function list all products
     * @params null
     * @returns null
     */

    public function index() {
        
        $this->data['nav_myproducts'] = 1;
        $this->load->view('default/products/search', $this->data);
    }
    
    
    public function ajax_getProducts($filters = '') {
        
        $result['error'] = true;
        
        if($filters){
            
        }
        $res = $this->product_model->get_all_manufacturer_products();
        if($res){
            $result['error'] = false;
            $result['result'] = $res->result();
        }
        print json_encode($result);
        exit();
    }
    
    public function ajax_addMyProduct($id) {
        
        //check if product id already exists in myproduct table;
        $w_pro_data['productid'] = $id;
        $this->session->userdata('customer_id');
        $w_pro_data['customerid'] = $this->session->userdata('customer_id');
        $w_pro_data['is_registered'] = 'yes';
        $mypro_res = $this->myproduct_model->get_rows($sel='', $w_pro_data);
        
        
        $result['error'] = true;
        
        $res = $this->product_model->get_by_id($id);
            
            if($res){
                //add to myproduct here
                $row = $res->row();
                $mypro_data['customerid'] = $this->session->userdata('user_id');
                $mypro_data['productid'] = $row->productid;
                $mypro_data['category'] = $row->category;
                $mypro_data['product_type'] = $row->producttype;
                $mypro_data['brand'] = $row->brand;
                $mypro_data['product_name'] = $row->productname;
                $mypro_data['product_image'] = $row->product_image;
                $mypro_data['model'] = $row->model;
                $mypro_data['create_datetime'] = get_now_date_time();

                $mypro = $this->myproduct_model->insert_row($mypro_data);
                if($mypro){
                    $result['error_status'] = 'nodup';
                    $result['error'] = false;
                    $result['result'] = $mypro;
                }
            }
        if($mypro_res){
            $result['error_status'] = 'dup';
            $result['message'] = 'Product already exists';
        }
        print json_encode($result);
        exit();
    }
    
    public function ajax_getBrandsByManufacture($filters = '') {
        
        $result['error'] = true;
        
        if($filters){
            
        }
        $res = $this->product_model->get_rows();
        if($res){
            $result['error'] = false;
            $result['result'] = $res->result();
        }
        print json_encode($result);
        exit();
    }
    
    public function ajax_getModelsByManufacture($filters = '') {
        
        $result['error'] = true;
        
        if($filters){
            
        }
        $res = $this->product_model->get_rows();
        if($res){
            $result['error'] = false;
            $result['result'] = $res->result();
        }
        print json_encode($result);
        exit();
    }
    
}