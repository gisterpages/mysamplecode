<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Myproducts extends CI_Controller {

    /**
      # constructor
     */
    function myproducts() {
        parent::__construct();

        $this->data['logo'] = SITE_NAME;
        $this->_init();

        //load models
        $this->load->model('activitylog_model');
        $this->load->model('myproduct_model');
        $this->load->model('product_model');


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
     * function list all myproducts
     * @params null
     * @returns null 
     */

    public function index() {
        
        $this->data['nav_myproducts'] = 1;
        $w_data['customerid'] = $this->session->userdata('customer_id');
        $w_data['is_registered'] = 'yes';

        $this->data['myproducts'] = $this->myproduct_model->get_rows($sel = '', $w_data);
        
        $this->load->view('default/myproducts/list', $this->data);
    }
    
    public function create() {
        
        $this->data['nav_myproducts'] = 1;
        $customerid = $this->session->userdata('customer_id');

        $this->load->view('default/myproducts/add_form', $this->data);
    }

      /*
     * function to view a single product
     * @params productid
     * @returns null or object
     */
    public function viewproduct($productid) {
        $this->data['nav_myproducts'] = 1;
        $w_data['myproductid'] = $productid;
        
        $this->data['myproduct'] = $this->myproduct_model->get_myProductsBusiness($w_data)->row();
        $this->data['myproduct_docs'] = $this->myproduct_model->get_myProductsDocs($w_data)->result();

        $this->load->view('default/myproducts/product_view', $this->data);
    }
    
      /*
     * function to edit a single product
     * @params productid
     * @returns null or object
     */
    public function product_edit($myproductid) {
        
        if($this->input->post('submit')){
            $this->_update_product($myproductid, FALSE);
        }
        
        $this->data['nav_myproducts'] = 1;
        $this->data['page_title'] = 'Product Edit';
        
        $w_data['myproductid'] = $myproductid;
        $this->data['myproduct'] = $mypro = $this->myproduct_model->get_myProductsBusiness($w_data)->row();
        $this->data['myproduct_docs'] = $this->myproduct_model->get_myProductsDocs($w_data)->result();
        
        $w_manual_data['productid'] = $mypro->productid;
        $this->data['manuals'] = $this->product_model->get_ProductsManuals($w_manual_data);
        
        $this->load->view('default/myproducts/product_add', $this->data);
    }
    
     /*
     * function to add a product
     * @params productid
     * @returns null or object
     */
    public function product_add($myproductid) {
        if($this->input->post('submit')){
            $this->_update_product($myproductid);
        }
        $this->data['nav_myproducts'] = 1;
        $this->data['page_title'] = 'Product Overview';
        $w_data['myproductid'] = $myproductid;
        $this->data['myproduct'] = $this->myproduct_model->get_myProductsBusiness($w_data)->row();
        $this->data['states'] = $this->product_model->get_allStates();

        $this->load->view('default/myproducts/product_add', $this->data);
    }
    
    function _update_product($myproductid, $add = TRUE){
        
        $mypro_data['use_type'] = $this->input->post('typeofuse');
        $mypro_data['serial_no'] = $this->input->post('serialno');
        $mypro_data['license_key'] = $this->input->post('licensekey');
        $mypro_data['license_no'] = $this->input->post('noofLicense');

        $mypro_data['purchase_date'] = $this->input->post('purchaseDate');
        $mypro_data['purchase_store'] = $this->input->post('purchaseStore');
        $mypro_data['purchase_state'] = $this->input->post('purchaseState');
        $mypro_data['purchase_price'] = $this->input->post('purchasePrice');
        $mypro_data['purchase_receiptno'] = $this->input->post('purchaseReceipt');

        $mypro_data['warranty_expiry'] = $this->input->post('war_expiry');

        $mypro_data['update_datetime'] = get_now_date_time();
        $mypro_data['is_registered'] = 'yes';

        $w_data['myproductid'] = $myproductid;

        $udpate_myproduct = $this->myproduct_model->update_row($mypro_data, $w_data);
        
        $this->_upload_multiple_files($myproductid);

        if ($udpate_myproduct) {
            if($add) {
                
                activityLog('Product registered', 'product');
                $mess_display = 'Product Registration successfull';
            } else {
                
                activityLog('Product Updated', 'product');
                $mess_display = 'Product Updated successfully';
            }
            $mess = message_get('info', $mess_display);
            $this->session->set_flashdata('message', $mess);
            redirect('myproducts');
        }
    }
    
    function _upload_multiple_files($myproductid, $add = TRUE) {
        $uploadData = array();
        if(count($_FILES['userFiles']['name']) > 0){
            $filesCount = count($_FILES['userFiles']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];
                    
                $uploadPath = 'uploads/docs/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|pdf';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['myproductid'] = $myproductid;
                    $uploadData[$i]['docname'] = $fileData['file_name'];
                    $uploadData[$i]['document'] = $fileData['file_name'];
                    if($add){
                        $uploadData[$i]['create_datetime'] = date("Y-m-d H:i:s");
                    } else {
                        $uploadData[$i]['update_datetime'] = date("Y-m-d H:i:s");
                    }
                } 
            }

            if(!empty($uploadData)){
                //Insert file information into the database
                $this->myproduct_model->insert_myProductsDocs($uploadData);
                
            }
        }
        return;
        
    }
    
    function delete_doc($myproductid, $id){
        
        $w_data['mydocid'] = $id;
        $doc = $this->myproduct_model->get_myProductsDocs($w_data)->row();
        
        
        $filename = 'uploads/docs/'.$doc->docname;
        if(file_exists($filename)){
            unlink($filename);
        }
        
        $this->myproduct_model->delete_myProductsDocs($w_data);
        
        activityLog('myproduct doc delete', 'myproduct');

        $mess_display = 'Document deleted successfully';
        $mess = message_get('info', $mess_display);
        $this->session->set_flashdata('message', $mess);
            
        redirect('myproducts/product_edit/'.$myproductid);
    }
    
    function ajax_checkMyproductSerial($serial){
        
        $w_data['serial_no'] = $serial;
      
        $exists = $this->myproduct_model->is_exists($w_data);
        if($exists){
            $result['result'] = 1;
        } else {
            $result['result'] = 0;
        }
        
        print json_encode($result);
        exit();
    }

}
