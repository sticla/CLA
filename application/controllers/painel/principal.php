
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index(){
		$this->layout = 'dashboard';
		$this->load->view('cla\apresentacao');	
	}
	
	public function localizacao(){
		$this->layout = 'dashboard';
		$this->load->view('cla\localizacao2');
	}
	
	public function historia(){
		$this->layout = 'dashboard';
		$this->load->view('cla\historia');
	}
	
	public function simbologia(){
		$this->layout = 'dashboard';
		$this->load->view('cla\simbologia');
	}
	
	public function vantagens(){
		$this->layout = 'dashboard';
		$this->load->view('cla\vantagens');
	}
	
	public function atividadeSistemica(){
		$this->layout = 'dashboard';
		$this->load->view('atividadeSistemica\atividadeSistemica');
	}
	
	public function beneficio(){
		$this->layout = 'dashboard';
		$this->load->view('beneficios\beneficios');
	}
	
	public function campanha(){
		$this->layout = 'dashboard';
		$this->load->view('campanhas\campanhas');
	}
	
	public function conceitoGeral(){
		$this->layout = 'dashboard';
		$this->load->view('implantacao\conceitoGeral');
	}
	
	public function instalacao(){
		$this->layout = 'dashboard';
		$this->load->view('implantacao\instalacoes');
	}
	
	public function projeto(){
		$this->layout = 'dashboard';
		$this->load->view('implantacao\projetos');
	}
	
	public function noticia(){
		$this->layout = 'dashboard';
		$this->load->view('noticia\noticia');
	}
	
	public function operacao(){
		$this->layout = 'dashboard';
		$this->load->view('operacao\operacao');
	}
	
	public function panorama(){
		$this->layout = 'dashboard';
		$this->load->view('panorama\panorama');
	}
	
	public function pnae(){
		$this->layout = 'dashboard';
		$this->load->view('pnae\pnae');
	}
	
	public function faleConosco(){
		$this->layout = 'dashboard';
		$this->load->view('faleConosco\faleConosco');
	}
	

}