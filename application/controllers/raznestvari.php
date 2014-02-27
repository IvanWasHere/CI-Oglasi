<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class raznestvari extends CI_Controller{

	function index($idRazno){
		$this->load->view('header');
		$this->load->model("slike");
		$sveSlike['sveSlike']=$this->slike->nadji_slike();
		$this->load->view('scroll',$sveSlike);
		$this->load->model("banners");
		$reklame['reklame']=$this->banners->nadji_banners();
		$this->load->view('reklame',$reklame);
		$this->load->view('sidebar');
		$this->load->model("razno");
		$podaci['razno']=$this->razno->prikazi($idRazno);
		$this->load->view('razno_view',$podaci);
		$this->load->model("reklame_sidebar");
		$sreklame['sastrane']=$this->reklame_sidebar->nadji_sreklame();
		$this->load->view('banner',$sreklame);
		$this->load->view('footer');
	}
}


?>