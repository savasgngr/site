<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->Model('Database_Model');
		$this->load->library('session');
		$this->load->database();
		
		
	}
	
	public function index()
	{
		if($this->session->userdata('oturum'))
		{
			
			redirect(base_url()."admin/Home");
		}
		$this->load->view('admin/Login');
		
	}
	 public function login_ol()
	{
		
		$email=$this->input->post('email');
		$sifre=$this->input->post('sifre');
		if($email==null)
		{$this->load->view('admin/Login');}
		
		$email=$this->security->xss_clean($email);
		$sifre=$this->security->xss_clean($sifre);
		
		$result=$this->Database_Model->login('kullanicilar',$email,$sifre);
		
		if($result)
		{
			
			$giris=array(
			'id'=>$result[0]->id,
			'email'=>$result[0]->email,
			'adsoy'=>$result[0]->adsoy,
			'resim'=>$result[0]->resim,
			'yetki'=>$result[0]->yetki
			);
			
			$this->session->set_userdata('oturum',$giris);
			redirect(base_url()."admin/Home");
		}
		else
		{
			
			$this->session->set_flashdata("giris_hata","gecersiz e-mail veya şifre tekrar deneyiniz");
			redirect(base_url()."admin/login");
			
		}
	}
	public function cikis_yap()
	{
		$this->session->unset_userdata('oturum');
			redirect(base_url()."admin/login");
		
	}
}
