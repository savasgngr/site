<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		if(!$this->session->userdata('oturum'))
		{
			$this->session->flashdata("giris_hata","lütfen giriş yapınız");
			redirect(base_url()."admin/login");
		}
	}
	
	public function index()
	{
		$query=$this->db->get('yazilar');
		$data["yazi"]=$query->result();
		$query=$this->db->get('uyeler');
		$data["uye"]=$query->result();
		
		$query=$this->db->get('iletisimmesajlari');
		$data["mesaj"]=$query->result();
		
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/container');
		$this->load->view('admin/footer');
		
		
	}
	public function login()
	{
		
		$this->load->view('admin/login');


	}

}
