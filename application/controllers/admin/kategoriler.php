<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriler extends CI_Controller {
	
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
		$query=$this->db->get('kategoriler');
		$data["veri"]=$query->result();
		$this->load->view('admin/Header');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/Kategori_listesi',$data);
		$this->load->view('admin/Footer');
		
		
	}
	public function ekle()
	{
		
		$this->load->view('admin/Kategori_ekle');
		
	}
	
	public function eklekaydet()
	{
		$data=array(
		'id'=>$this->input->post('id'),
		'adi'=>$this->input->post('adi'),
		'ust_id'=>$this->input->post('ust_id'),
		
		'tarih'=>$this->input->post('tarih'),
		'keywords'=>$this->input->post('keywords')
		);
		
	$this->Database_Model->insert_data('kategoriler',$data);
	$this->session->set_flashdata("sonuc"," kategori ekleme işlemi yapıldı");
	redirect(base_url()."admin/kategoriler");
	}
	
	function sil($id)
	{
		$this->db->query("DELETE FROM kategoriler WHERE Id=$id");
		$this->session->set_flashdata("sonuc","kategori  silme işlemi yapıldı");
		redirect(base_url()."admin/kategoriler");
		
		
	}
	function duzenle($id)
	{	
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		
		$this->load->view('admin/Kategori_duzenle',$data);
		
	}
		public function guncellekaydet($id)
	{
		$data=array(
		
		'adi'=>$this->input->post('adi'),
		'ust_id'=>$this->input->post('ust_id'),
		
		'tarih'=>$this->input->post('tarih'),
		'keywords'=>$this->input->post('keywords')
		);
		
	$this->Database_Model->update_data('kategoriler',$data ,$id);
	$this->session->set_flashdata("sonuc","kategori düzenleme işlemi yapıldı");
	redirect(base_url()."admin/kategoriler");
	}
	
	public function resimekle($id)
	{
		$data["id"]=$id;
		$this->load->view('admin/Kategori_resimekle',$data);
		
	}
	
	public function resim_uploads($id)
	{
		$query=$this->db->get('kategoriler');
		$data["veri"]=$query->result();
		$data["id"]=$id;
		 $config['upload_path']          = './uploads/kategoriresimler/';
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
						
					$this->Database_Model->update_data('kategoriler',$data ,$id);
					$this->session->set_flashdata("sonuc","kategori resim ekleme  işlemi yapıldı");
					redirect(base_url()."admin/kategoriler");
						
	}
}
 