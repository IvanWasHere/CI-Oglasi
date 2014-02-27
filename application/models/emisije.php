<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class emisije extends CI_model{
	function nadji_emisije(){
		$this->db->select()->from('emisije')->where('status',1)->order_by('id','desc');
		$query=$this->db->get();
		return $query->result_array();

	} 

}


?>