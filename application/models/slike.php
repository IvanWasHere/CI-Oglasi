<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slike extends CI_model{
	function nadji_slike(){
		$this->db->select()->from('slike')->where('status',1)->order_by('id','desc');
		$query=$this->db->get();
		return $query->result_array();

	} 

}


?>