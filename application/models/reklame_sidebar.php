<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class reklame_sidebar extends CI_model{
	function nadji_sreklame(){
		$this->db->select()->from('sidebanners')->where('status',1)->order_by('id','desc');
		$query=$this->db->get();
		return $query->result_array();

	} 

}


?>