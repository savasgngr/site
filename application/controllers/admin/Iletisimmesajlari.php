<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iletisimmesajlari extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->Model('Database_Model');
		$this->load->library('session');
		if(!$this->session->userdata('oturum'))
		{
			$this->session->flashdata("giris_hata","lütfen giriş yapınız");
			redirect(base_url()."admin/login");
		}
		
		
	}
	
	public function index()
	{
		$query=$this->db->get('iletisimmesajlari');
		$data["veri"]=$query->result();
		$this->load->view('admin/Header');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/Iletisim_listesi',$data);
		$this->load->view('admin/Footer');
		
		
	}
	public function guncellekaydet($id)
	{
		$data=array(
		'durum'=>"okundu",
		'cevap'=>$this->input->post('cevap')
		);
		
	$this->Database_Model->update_data('iletisimmesajlari',$data,$id);
	$this->session->set_flashdata("sonuc","cevaplama işlemi yapıldı");
	redirect(base_url()."admin/Iletisimmesajlari");
	}
	
	
	
	function delete($id)
	{
		$this->db->query("DELETE FROM iletisimmesajlari WHERE Id=$id");
		$this->session->set_flashdata("sonuc"," silme işlemi yapıldı");
		redirect(base_url()."admin/Iletisimmesajlari");
		
		
	}
	function cevapla($id)
	{	
	  $data=array(
		
		'cevap'=>$this->input->post('cevap')
		);
		$sorgu=$this->db->query("SELECT * FROM iletisimmesajlari WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		
		$this->load->view('admin/Iletisim_cevapla',$data);
		
		
	}
	
	
}
 