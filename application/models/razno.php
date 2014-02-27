<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class razno extends CI_model{
	function prikazi($idRazno){
		$this->db->select()->from('razno')->where(array('status'=>1,'id'=>$idRazno));
		$query=$this->db->get();
		return $query->first_row('array');

	} 

}


?>