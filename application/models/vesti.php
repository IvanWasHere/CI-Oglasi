<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vesti extends CI_model{
	function nadji_vesti($num,$start){
		$this->db->select()->from('vesti')->where('status',1)->order_by('id','desc')->limit($num,$start);
		$query=$this->db->get();
		return $query->result_array();

	} 
	function vrati_broj_redova(){
		$this->db->select('id')->from('vesti')->where('status', 1);
		$query = $this->db->get();
		return $query->num_rows();

	}

}


?>