<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanicilar extends CI_Controller {
	
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
		$query=$this->db->get('Kullanicilar');
		$data["veri"]=$query->result();
		
		$this->load->view('admin/Header');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/Kullanicilar_listesi',$data);
		$this->load->view('admin/Footer');
		
		
	}
	public function ekle()
	{
		
		$this->load->view('admin/Kullanici_ekle');
		
	}
	
	public function eklekaydet()
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'sifre'=>$this->input->post('sifre'),
		'email'=>$this->input->post('email'),
		
		'kayıt_tarih'=>$this->input->post('kayıt_tarih'),
		
		'yetki'=>$this->input->post('yetki')
		);
		
	$this->Database_Model->insert_data('kullanicilar',$data);
	$this->session->set_flashdata("sonuc","kayıt ekleme işlemi yapıldı");
	redirect(base_url()."admin/Kullanicilar");
	}
	
	function delete($id)
	{
		$this->db->query("DELETE FROM kullanicilar WHERE Id=$id");
		$this->session->set_flashdata("sonuc","kayıt silme işlemi yapıldı");
		redirect(base_url()."admin/Kullanicilar");
		
		
	}
	function duzenle($id)
	{	
		$sorgu=$this->db->query("SELECT * FROM kullanicilar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		
		$this->load->view('admin/Kullanici_duzenle',$data);
		
	}
		public function guncellekaydet($id)
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'sifre'=>$this->input->post('sifre'),
		'email'=>$this->input->post('email'),
		'kayıt_tarih'=>$this->input->post('kayıt_tarih'),
		
		'yetki'=>$this->input->post('yetki')
		);
		
	$this->Database_Model->update_data('kullanicilar',$data ,$id);
	$this->session->set_flashdata("sonuc","kayıt güncelleme işlemi yapıldı");
	redirect(base_url()."admin/Kullanicilar");
	}
	function goster($id)
	{	
		$sorgu=$this->db->query("SELECT * FROM kullanicilar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/Kullanici_goster',$data);
		
	}
	public function resimekle($id)
	{
		$data["id"]=$id;
		$this->load->view('admin/Kullanici_resimekle',$data);
		
	}
	
	public function resim_uploads($id)
	{
		$query=$this->db->get('kullanicilar');
		$data["veri"]=$query->result();
		
		 $config['upload_path']          = './uploads/login/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        //$this->load->view('admin/Kategori_resimekle', $error);
                }
                else
                {
                        $data = $this->upload->data();
						$dosyaadi=$data["file_name"];

                        //$this->load->view('admin/Kategori_listesi', $data);
                }
				$data=array(
		
						'resim'=>$dosyaadi
						);
						
					$this->Database_Model->update_data('kullanicilar',$data ,$id);
					$this->session->set_flashdata("sonuc","kategori resim ekleme  işlemi yapıldı");
					redirect(base_url()."admin/Kullanicilar");
						
	}
	
	
	
	
} 


 