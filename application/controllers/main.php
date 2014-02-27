<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*
*
*
* @param (type) about this param
* @return (type)
*/
 
class tempoGlavna extends CI_Controller{

	function index(){
		$this->load->view('header');
		$this->load->view('travel_index',$podaci);
	}
}


?>