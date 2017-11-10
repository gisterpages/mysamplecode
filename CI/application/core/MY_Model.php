<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

    public $table;
    public $primary_key;


    function __construct()
    {
        parent::__construct();
    }
    
	
   /***************************
	*
	* function to check if the exists
	* 
	* @param		email (assoc array)
	* @return 		bool
	* 
	*/
	
	public function is_exists($data, $or = FALSE)
	{
            if($or){
                $this->db->or_where($data);
            } else {
                $this->db->where($data);
            }
            $select_query = $this->db->get($this->table);
            if($select_query->num_rows() > 0) {
                return TRUE;
            } else {
                return FALSE;
            }
	}
	
	/************************
	 * 
     * Retrieves a single record
	 * 
	 * @param 		primary key 
	 * @return		records or false
	 * 
     */
    public function get_by_id($id) {
        if($id){
	        $this->db->where($this->primary_key, $id);
	        $row = $this->db->get($this->table);
	        return $row;
        } else {
            echo "db retrieve error - parameter missing";
        }
    }
    
    /************************
	 * 
         * get all (or) selected data from a table
	 * 
	 * @param 		fields, where(assoc array) 
	 * @return		records or false
	 * 
     */
    public function get_rows($select = '', $wdata = '', $limit = '', $offset = 0, $order_by = '', $order = 'ASC') {
        
        if ($select != '') {
            $this->db->select($select);
        }
        
        if ($wdata != '') {
            $this->db->where($wdata);
        }
		
		if ($limit != '') {
            $this->db->limit($limit, $offset);
        }
		
		if ($order_by != '') {
            $this->db->order_by($order_by, $order);
        }
        
        $query = $this->db->get($this->table);
        
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return FALSE;
        }
        
    }
	
   /**********************
	*
	* inserts a record of data to the table
	* 
	* @param		data(assoc array)
	* @return 		insert id or false
	* 
	* 
	*/
	public function insert_row($data)
	{
		
		$this->db->insert($this->table,$data);
		if($this->db->affected_rows() > 0)
		{
			 return $this->db->insert_id();
		}
		else
		{
			return FALSE;
		}
	}
	
   /************************
	*
	* updates records to the table
	* 
	* @param		updated data (assoc array), where(assoc array)
	* @return 		bool
	* 
	*/
	public function update_row($update_data, $where)
	{
		
		$this->db->where($where);
		$query = $this->db->update($this->table, $update_data);
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
   /************************
	* 
	* deletes a record from a table.
	* 
	* @param		primary key
	* @return 		bool
	* 
	*/
    public function delete_by_id($id) {
        if($id){
	        $this->db->where($this->primary_key, $id);
	        if ($this->db->delete($this->table)) {
	        	return TRUE;
	        } else {
	        	return FALSE;
	        }
        } else {
            echo "db retrieve error - parameter missing";
        }
    }
    
    /************************
	*
	* deletes more than one record from table
	* 
	* @param		delete data (assoc array), where(assoc array)
	* @return 		bool
	* 
	*/
	public function delete_row($where)
	{
		
		$this->db->where($where);
		$query = $this->db->delete($this->table);
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}
        
     /************************
	*
	* get pagination records from table
	* 
	* @param		limit       specifies the records per page
	* @param		offset      specifies the start of the record in next page
	* @param		where       specifies the condition (if any)
	* @return 		array       list of records that satisfied the condition, total row count        
	* 
	*/
        public function get_pagination_records($limit, $offset, $where) {
        $this->db->where($where);
        $this->db->limit($limit,$offset);
        
        $query = $this->db->get($this->table);
        $ret['rows'] = $query ->result();
        
        $this->db->where($where);
        $q = $this->db->select('COUNT(*) as count',FALSE)->from($this->table);
        $tmp = $q->get()->result();
        $ret['num_rows'] = $tmp[0] -> count;
        
        return $ret;      
        }

}

//End of MY_Model.php