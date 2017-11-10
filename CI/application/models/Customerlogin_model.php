<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customerlogin_model extends MY_Model{

   /********************
	*
	* function constructor
	* 
	* @param		null
	* @return 		null
	* 
	*/
	
	function customerlogin_model()
	{
		parent::__construct();
		
		$this->table = 'customer_login';
                $this->primary_key = 'customer_login.loginid';
	}
		
}
/* End of file user_model.php */