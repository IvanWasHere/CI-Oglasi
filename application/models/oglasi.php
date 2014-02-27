<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class oglasi extends CI_model{
	function nadji_oglase($num,$start){
		$this->db->select()->from('oglasi')->where('status',1)->order_by('placen','desc')->limit($num,$start);
		$query=$this->db->get();
		return $query->result_array();

	} 
	function vrati_broj_redova(){
		$this->db->select('id')->from('oglasi')->where('status', 1);
		$query = $this->db->get();
		return $query->num_rows();

	}
	function ubaci_oglas($novi_oglas){
		$this->db->insert('oglasi',$novi_oglas);
		return $this->db->insert_id();

	}

}


?>