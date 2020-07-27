<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yazilar extends CI_Controller {
	
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
		
		$query=$this->db->get('yazilar');
		$data["veri"]=$query->result();
		$query=$this->db->get('ayarlar');
		$data["veriler"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar  ORDER BY id DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$this->load->view('admin/Header');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/yazilar_listesi',$data);
		$this->load->view('admin/Footer');
		
		
	}
	public function ekle()
	{
		
		$this->load->view('admin/Yazi_ekle');
		
	}
	
	public function eklekaydet()
	{
		$data=array(
		'adi'=>$this->input->post('adi'),
		'keywords'=>$this->input->post('keywords'),
		'icerik'=>$this->input->post('icerik'),
		
		
		'yazar_id'=>$this->input->post('yazar_id'),
		'kategori_id'=>$this->input->post('kategori_id'),
		'aciklama'=>$this->input->post('aciklama'),
		'tarih'=>$this->input->post('tarih')
		
		);
		
	$this->Database_Model->insert_data('yazilar',$data);
	$this->session->set_flashdata("sonuc","yazı ekleme işlemi yapıldı");
	redirect(base_url()."admin/Yazilar");
	}
	
	function sil($id)
	{
		$this->db->query("DELETE FROM yazilar WHERE id=$id");
		$this->session->set_flashdata("sonuc","yazı silme işlemi yapıldı");
		redirect(base_url()."admin/Yazilar");
		
		
	}
	function duzenle($id)
	{	
		$sorgu=$this->db->query("SELECT * FROM yazilar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		
		$this->load->view('admin/Yazi_duzenle',$data);
		
	}
		public function guncellekaydet($id)
	{
		$data=array(
		'adi'=>$this->input->post('adi'),
		'keywords'=>$this->input->post('keywords'),
		'icerik'=>$this->input->post('icerik'),
		
		
		'yazar_id'=>$this->input->post('yazar_id'),
		'kategori_id'=>$this->input->post('kategori_id'),
		'aciklama'=>$this->input->post('aciklama'),
		'tarih'=>$this->input->post('tarih')
		
		);
		
	$this->Database_Model->update_data('yazilar',$data ,$id);
	$this->session->set_flashdata("sonuc","kayıt güncelleme işlemi yapıldı");
	redirect(base_url()."admin/Yazilar");
	}
	function goster($id)
	{	
		$sorgu=$this->db->query("SELECT * FROM yazilar WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		$this->load->view('admin/Uye_goster',$data);
		
	}
	public function resimekle($id)
	{
		$data["id"]=$id;
		$this->load->view('admin/Yazi_resimekle',$data);
		
	}
	
	public function resim_uploads($id)
	{
		$query=$this->db->get('yazilar');
		$data["veri"]=$query->result();
		$data["id"]=$id;
		 $config['upload_path']          = './uploads/yaziresimler/';
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
						
					$this->Database_Model->update_data('yazilar',$data ,$id);
					$this->session->set_flashdata("sonuc","kategori resim ekleme  işlemi yapıldı");
					redirect(base_url()."admin/yazilar");
						
	}
}
 