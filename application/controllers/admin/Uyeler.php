<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {
	
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
		$query=$this->db->get('uyeler');
		$data["veri"]=$query->result();
		$this->load->view('admin/Header');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/uye_listesi',$data);
		$this->load->view('admin/Footer');
		
		
	}
	public function ekle()
	{
		
		$this->load->view('admin/Uye_ekle');
		
	}
	
	public function eklekaydet()
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'sifre'=>$this->input->post('sifre'),
		'email'=>$this->input->post('email'),
		'tel'=>$this->input->post('tel'),
		'adres'=>$this->input->post('adres'),
		'sehir'=>$this->input->post('sehir'),
		'cinsiyet'=>$this->input->post('cinsiyet'),
		'aciklama'=>$this->input->post('aciklama'),
		'bas_tarih'=>$this->input->post('bas_tarih'),
		
		'yetki'=>$this->input->post('yetki')
		);
		
	$this->Database_Model->insert_data('Uyeler',$data);
	$this->session->set_flashdata("sonuc","kayıt ekleme işlemi yapıldı");
	redirect(base_url()."admin/Uyeler");
	}
	
	function delete($id)
	{
		$this->db->query("DELETE FROM uyeler WHERE Id=$id");
		$this->session->set_flashdata("sonuc","kayıt silme işlemi yapıldı");
		redirect(base_url()."admin/Uyeler");
		
		
	}
	function duzenle($id)
	{	
		$sorgu=$this->db->query("SELECT * FROM uyeler WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		
		$this->load->view('admin/Uye_duzenle',$data);
		
	}
		public function guncellekaydet($id)
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'email'=>$this->input->post('email'),
		'sifre'=>$this->input->post('sifre'),
		'tel'=>$this->input->post('tel'),
		'adres'=>$this->input->post('adres'),
		'sehir'=>$this->input->post('sehir'),
		'cinsiyet'=>$this->input->post('cinsiyet'),
		'aciklama'=>$this->input->post('aciklama'),
		'bas_tarih'=>$this->input->post('bas_tarih'),
		
		'yetki'=>$this->input->post('yetki')
		);
		
	$this->Database_Model->update_data('Uyeler',$data ,$id);
	$this->session->set_flashdata("sonuc","kayıt güncelleme işlemi yapıldı");
	redirect(base_url()."admin/Uyeler");
	}
	function goster($id)
	{	
		$sorgu=$this->db->query("SELECT * FROM uyeler WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/Uye_goster',$data);
		
	}
	
}
 