<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kayitol extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		$this->load->Model('Database_Model');
	}
	
	public function index()
	{
		$query=$this->db->get('ayarlar');
		$data["veri"]=$query->result();
		
	
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["ustkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0");
		$data["altkat"]=$sorgu->result();
		
		$this->load->view('Header',$data);
		$this->load->view('Kayitol_sayfasi');
		$this->load->view('Footer');

		
	
		
		
	}
	public function eklekaydet()
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'email'=>$this->input->post('email'),
		'sifre'=>$this->input->post('sifre'),
		
		'tel'=>$this->input->post('tel'),
		'adres'=>$this->input->post('adres')
		
		);
		
		if($data['sifre']==$this->input->post('sifre2'))
		{
		
			
	  $this->Database_Model->insert_data('uyeler',$data);
	  $this->session->set_flashdata("sonuc","kayıt ekleme işlemi yapıldı login işlemi yapabilirsiniz");
	  redirect(base_url()."kayitol");
		}
		else
		{
			$this->session->set_flashdata("sonuc","girilen şifreler hatalı");
			redirect(base_url()."kayitol");
		}
	}

}
