<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimizda extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		
	}
	
	public function index()
	{
		$sorgu=$this->db->query("SELECT * FROM yazilar LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar");
		$data["yazilar"]=$sorgu->result();
	
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["ustkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0");
		$data["altkat"]=$sorgu->result();
		$query=$this->db->get('ayarlar');
		$data["veri"]=$query->result();
		
		$this->load->view('Header',$data);
		$this->load->view('Hakkimizda_sayfasi');
		$this->load->view('Sidebar');
		//$this->load->view('Footer');
		
		
	}
	

}
