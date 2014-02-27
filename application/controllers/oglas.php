<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class oglas extends CI_Controller{

	function index($start=0){

		$this->load->model("oglasi");
		$podaci['oglasi']=$this->oglasi->nadji_oglase(5,$start);
		$this->load->library('pagination');
		$config = array(
			'base_url' => base_url().'index.php/oglas/index',
			'total_rows' => $this->oglasi->vrati_broj_redova(),
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
		$this->load->model("oglasi");
		


		$this->load->view('oglasi_view',$podaci);
		$this->load->model("reklame_sidebar");
		$sreklame['sastrane']=$this->reklame_sidebar->nadji_sreklame();
		$this->load->view('banner',$sreklame);
		$this->load->view('footer');
	}
	function forma_oglasi(){
			if($_POST){
				$novi_oglas=array(
					'postavio'=>$_POST['postavio'],
					'grad'=>$_POST['grad'],
					'telefon'=>$_POST['telefon'],
					'email'=>$_POST['email'],
					'oglas'=>$_POST['oglas'],
					'status'=>1,
					'placen'=>0
					);
				$this->load->model("oglasi");
				$this->oglasi->ubaci_oglas($novi_oglas);
				redirect(base_url().'index.php/oglas/index/');
			}else{


	
		$this->load->view('header');
		$this->load->model("slike");
		$sveSlike['sveSlike']=$this->slike->nadji_slike();
		$this->load->view('scroll',$sveSlike);
		$this->load->model("banners");
		$reklame['reklame']=$this->banners->nadji_banners();
		$this->load->view('reklame',$reklame);
		$this->load->view('sidebar');
		


		$this->load->view('oglasi_forma');
		$this->load->model("reklame_sidebar");
		$sreklame['sastrane']=$this->reklame_sidebar->nadji_sreklame();
		$this->load->view('banner',$sreklame);
		$this->load->view('footer');
					}
	}
}


?>