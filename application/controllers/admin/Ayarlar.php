<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayarlar extends CI_Controller {
	
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
		$sorgu=$this->db->query("SELECT * FROM ayarlar limit 1");
		$data["veri"]=$sorgu->result();
		
		$this->load->view('admin/Ayarlar_duzenle',$data);
		
		
		
	}
	public function ayarlarkaydet()

	{
		$data=array(
		'adi'=>$this->input->post('adi'),
		'aciklama'=>$this->input->post('aciklama'),
		'keywords'=>$this->input->post('keywords'),
		'tel'=>$this->input->post('tel'),
		'email'=>$this->input->post('email'),
		'adres'=>$this->input->post('adres'),
		'sehir'=>$this->input->post('sehir'),
		'smtpserver'=>$this->input->post('smtpserver'),
		'smtpemail'=>$this->input->post('smtpemail'),
		'smtpsifre'=>$this->input->post('smtpsifre'),
		'smtpport'=>$this->input->post('smtpport'),
		'twitter'=>$this->input->post('twitter'),
		'facebook' =>$this->input->post('facebook'),
		'instagram'=>$this->input->post('instagram'),
		'hakkimizda'=>$this->input->post('hakkimizda'),
		'iletisim'=>$this->input->post('iletisim')
		);
		
	$this->Database_Model->update_ayarlar('ayarlar',$data);
	$this->session->set_flashdata("sonuc","Düzenleme işlemi yapıldı");
	redirect(base_url()."admin/Ayarlar");
	}
	
		

}
