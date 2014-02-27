<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class novosti extends CI_Controller{

	function index($start=0){

		$this->load->model("vesti");
		$podaci['vesti']=$this->vesti->nadji_vesti(5,$start);
		$this->load->library('pagination');
		$config = array(
			'base_url' => base_url().'index.php/novosti/index',
			'total_rows' => $this->vesti->vrati_broj_redova(),
			'per_page' => 5,
			'full_tag_open' =>'<center><div class="pagination pagination-large"><ul>',
			'full_tag_close' =>'</ul></div></center>',
			'cur_tag_open'  =>'<li class="active"><a href="#">',
			'cur_tag_close' => '</a></li>',
			'num_tag_open'  => '<li>',
			'num_tag_close' => '</li>',
			'next_tag_open' => '<li>',
			'next_tag_close' => '</li>',
			'prev_tag_open' => '<li>',
			'prev_tag_close' => '</li>',


			);
		
		$this->pagination->initialize($config);
		
		$podaci['stranice'] = $this->pagination->create_links();



		$this->load->view('header');
		$this->load->model("slike");
		$sveSlike['sveSlike']=$this->slike->nadji_slike();
		$this->load->view('scroll',$sveSlike);
		$this->load->model("banners");
		$reklame['reklame']=$this->banners->nadji_banners();
		$this->load->view('reklame',$reklame);
		$this->load->view('sidebar');
		$this->load->model("vesti");
		


		$this->load->view('vesti_view',$podaci);
		$this->load->model("reklame_sidebar");
		$sreklame['sastrane']=$this->reklame_sidebar->nadji_sreklame();
		$this->load->view('banner',$sreklame);
		$this->load->view('footer');
	}
}


?>