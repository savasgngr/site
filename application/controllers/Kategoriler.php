<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriler extends CI_Controller {
	
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
		
		redirect(base_url()."Home");
		
		
	}
	public function Kategorigoster($id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler WHERE id=$id");
		$data["veri"]=$query->result();
		$query=$this->db->get('ayarlar');
		$data["veriler"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar");
		$data["yazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["ustkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0");
		$data["altkat"]=$sorgu->result();
		$query=$this->db->get('kategoriler');
		$data["kat"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar WHERE kategori_id=$id");
		$data["katyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM resimler ORDER BY resim_id DESC LIMIT 4");
		$data["resim"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar  ORDER BY id DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		if($data["katyazilar"]==null){redirect(base_url()."Home");}
		
		$this->load->view('Header',$data);
		$this->load->view('Kategoriler');
		$this->load->view('Sidebar');
		$this->load->view('Footer');
		
		
	}
	function Yazi_goster($id)
	{
		$query=$this->db->get('ayarlar');
		$data["veriler"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler");
		$data["kat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM uyeler");
		$data["uyeler"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["anakat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0");
		$data["altkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar");
		$data["yazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar WHERE id=$id");
		$data["yazi"]=$sorgu->result();
		$data["veri"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar  LIMIT 5");
		$data["popyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar  ORDER BY id DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ORDER BY RAND() LIMIT 6");
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["ustkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0");
		$data["altkat"]=$sorgu->result();
		$query=$this->db->get('kategoriler');
		$data["kat"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar WHERE kategori_id=$id");
		$data["katyazilar"]=$sorgu->result();
		$data["randomyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM(SELECT * FROM yorumlar  WHERE yazi_id=$id) yorumlar ORDER BY id DESC");
		$data["yaziyorumlar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM resimler ORDER BY resim_id DESC LIMIT 4");
		$data["resim"]=$sorgu->result();
		$this->load->view('Header',$data);
		$this->load->view("Yazi_goster",$data);
		$this->load->view('Footer');
		
	}
	public function Yorum_gonder($yorumlanan)
	{
		$oturum= $this->session->userdata('oturum2');
		$data=array(
		'icerik'=>$this->input->post('icerik'),
		'yazi_id'=>$yorumlanan,
		'uye_id'=>$oturum['id']
		);
		
	$this->Database_Model->insert_data('yorumlar',$data);
	$this->session->set_flashdata("yorumsonuc","Yorum kaydedildi");
	redirect(base_url()."Kategoriler/Yazi_goster/$yorumlanan");
	}
	public function Yorum_sil($id)
	{
		$query = $this->db->query("SELECT * FROM yorumlar WHERE id=$id");

		foreach ($query->result_array() as $row)
		{
				$yazi_id= $row['yazi_id'];
		}
		$sorgu=$this->db->query("DELETE FROM yorumlar WHERE id=$id");
		$this->session->set_flashdata("yorumsonuc","Yorum silindi");
		redirect(base_url()."Kategoriler/Yazi_goster/$yazi_id/#yorumlar");
	}
	
	
	
	
	
}  


