<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function is_logged_in()
	{
		$CI =& get_instance();
		if($CI->session->userdata('logged_in'))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function is_admin_logged_in()
	{
		$CI =& get_instance();
		if($CI->session->userdata('admin_logged_in'))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function logout()
	{
		$CI =& get_instance();
		$CI->session->sess_destroy();
		$CI->session->set_flashdata('message', '<div class="msg info">You have logged out !</div>');
		redirect('main/register');
	}
	
/* End of file auth_helper.php */
/* Location: ./application/helpers/auth_helper.php  */