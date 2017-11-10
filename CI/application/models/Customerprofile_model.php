<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customerprofile_model extends MY_Model{

   /********************
	*
	* function constructor
	* 
	* @param		null
	* @return 		null
	* 
	*/
	
	function customerProfile_model()
	{
		parent::__construct();
		
		$this->table = 'customer_profile';
                $this->primary_key = 'customer_profile.customerid';
	}
		
          public function getData() {
        $query = $this->db->get($this->table);
        return $query->result();
    }
      public function updateData($data,$id) {
        $this->db->where('customerid', $id);
      
        return $this->db->update($this->table, $data);
    }
}
/* End of file user_model.php */