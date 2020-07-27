<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginol extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->Model('Database_Model');
		$this->load->database();
		$this->load->library('session');
		
	}
	
	public function index()
	{
		
	
		$this->load->view('Login_sayfasi');

	}
	public function girisYap()
	{
	
		$email=$this->input->post('email');
		$sifre=$this->input->post('sifre');
		$sonuc=$this->Database_Model->login('uyeler',$email,$sifre);
		if($sonuc)
		{
		$giris=array(
			
                'id'=>$sonuc[0]->id,
				'adsoy'=>$sonuc[0]->adsoy,
				'sifre'=>$sonuc[0]->sifre,
                'email'=>$sonuc[0]->email,
                'tel'=>$sonuc[0]->tel,
				'adres'=>$sonuc[0]->adres,
				'sehir'=>$sonuc[0]->sehir,
				'cinsiyet'=>$sonuc[0]->cinsiyet,
				'yetki'=>$sonuc[0]->yetki,
				'durum'=>$sonuc[0]->durum,
                'resim_id'=>$sonuc[0]->resim_id,
				'aciklama'=>$sonuc[0]->aciklama,
				'bas_tarih'=>$sonuc[0]->bas_tarih,
				'bitis_tarih'=>$sonuc[0]->bitis_tarih
            );

            
			
			
			$this->session->set_userdata('oturum2',$giris);
				redirect(base_url()."Home");

		}
		redirect(base_url()."Loginol");
		
	}
	public function cikisYap()
	{
		$this->session->unset_userdata('oturum2');
			redirect(base_url()."Home");
	}
	
}
