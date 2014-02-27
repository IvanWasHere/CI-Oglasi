<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*
*
*
* @param (type) about this param
* @return (type)
*/
 
class tempo extends CI_Controller{

	function index(){
		$this->load->view('header');
		$this->load->model("slike");
		$sveSlike['sveSlike']=$this->slike->nadji_slike();
		$this->load->view('scroll',$sveSlike);
		$this->load->model("banners");
		$reklame['reklame']=$this->banners->nadji_banners();
		$this->load->view('reklame',$reklame);
		$this->load->view('sidebar');
		$this->load->model("emisije");
		$podaci['emisije']=$this->emisije->nadji_emisije();
		$this->load->view('tempo_view',$podaci);
		$this->load->model("reklame_sidebar");
		$sreklame['sastrane']=$this->reklame_sidebar->nadji_sreklame();
		$this->load->view('banner',$sreklame);
		$this->load->view('footer');
	}
}


?>