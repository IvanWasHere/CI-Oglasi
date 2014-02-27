<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class banners extends CI_model{
	function nadji_banners($num=2,$start=0){
		$this->db->select()->from('banners')->where('status',1)->order_by('id','desc')->limit($num,$start);
		$query=$this->db->get();
		return $query->result_array();

	} 

}


?>