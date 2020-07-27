<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
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
		$query=$this->db->get('ayarlar');
		$data["veriler"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ");
		$data["yazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
	
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["ustkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0");
		$data["altkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM resimler ORDER BY resim_id DESC LIMIT 4");
		$data["resim"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar  ORDER BY id DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM resimler");
		$data["gresimler"]=$sorgu->result();
		
		$this->load->view('Header',$data);
		$this->load->view('Slider');
		$this->load->view('Container');
		$this->load->view('Sidebar');
		$this->load->view('Footer');
		
		
	}
	public function login()
	{
		
		$this->load->view('admin/login');


	}
	public function ayarlar()
	{ 
		$query=$this->db->get('ayarlar');
		$data["veriler"]=$query->result();
	
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0 LIMIT 5");
		$data["ustkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0 LIMIT 5");
		$data["altkat"]=$sorgu->result();
		$query=$this->db->get('ayarlar');
		$data["veri"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM resimler ORDER BY resim_id DESC LIMIT 4");
		$data["resim"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar  ORDER BY id DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM resimler");
		$data["gresimler"]=$sorgu->result();
		
		$query=$this->db->get('uyeler');
		$data["veriler"]=$query->result();
		$this->load->view('Header',$data);
		$this->load->view('Uye_ayarlar');
		$this->load->view('Footer');
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
		'cinsiyet'=>$this->input->post('cinsiyet')
		);
		
	$this->Database_Model->update_data('Uyeler',$data ,$id);
	$this->session->set_flashdata("sonuc","kayıt güncelleme işlemi yapıldı");
	redirect(base_url()."home");
	}
	
	function bizeyazin()
	{
	
		$sorgu=$this->db->query("SELECT * FROM yazilar LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0 LIMIT 5");
		$data["ustkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0 LIMIT 5");
		$data["altkat"]=$sorgu->result();
		$query=$this->db->get('ayarlar');
		$data["veri"]=$query->result();
		$query=$this->db->get('ayarlar');
		$data["veriler"]=$query->result();
		
		
		
		
		$this->load->view('Header',$data);
		$this->load->view('Bizeyazin_sayfasi2');
		//$this->load->view('Sidebar');
		$this->load->view('Footer');
		
	}
	function mesajekle()
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'email'=>$this->input->post('email'),
		'tel'=>$this->input->post('tel'),
		'baslik'=>$this->input->post('baslik'),
		
		'mesaj'=>$this->input->post('mesaj')
		);
		
	$this->Database_Model->insert_data('iletisimmesajlari',$data);
	
	$adsoy=$this->input->post('adsoy');
	$email=$this->input->post('email');
	
	$query=$this->db->get('ayarlar');
    $data["veri"]=$query->result();
	
	
	$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => $data["veri"][0]->smtpserver,
			'smtp_port' => $data["veri"][0]->smtpport,
			'smtp_user' => $data["veri"][0]->smtpmail, // change it to yours
			'smtp_pass' => $data["veri"][0]->smtpsifre, // change it to yours
			'mailtype' => 'text',
			'charset' => 'utf-8',
			'wordwrap' => TRUE
		);
	$mesaj="değerli: .$adsoy.<br>mesajınız alınmıştır en kısa sürede size geri dönüş yapılacaktır";
	$mesaj.=$data["veri"][0]->email."</br>";
	
	$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from($data["veri"][0]->smtpmail); // change it to yours
		$this->email->to($email); // change it to yours
		$this->email->subject('mesajınız alındı');
		$this->email->message($mesaj);

   if( $this->email->send())
	{
		$this->session->set_flashdata("sonuc2","mail adrsinizi kotrol edin");
	}
	else
	{
		$this->session->set_flashdata("sonuc2","mail gönderilemedi");
	}
	
	$this->session->set_flashdata("sonuc","mesajınız başarı ile gönderildi en kısa sürede size cevap verilecektir");
	redirect(base_url()."Home/bizeyazin");
	}
	public function wrongway()
	{
		$query=$this->db->get('ayarlar');
		$data["veri"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ");
		$data["yazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
	
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["ustkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0");
		$data["altkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM resimler ORDER BY resim_id DESC LIMIT 4");
		$data["resim"]=$sorgu->result();
		$query=$this->db->get('ayarlar');
		$data["veriler"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar  ORDER BY id DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM resimler");
		$data["gresimler"]=$sorgu->result();
		
		
		$this->load->view('Header',$data);
	
		$this->load->view('wrongway');
		$this->load->view('Sidebar');
		$this->load->view('Footer');
		
		
	}
	
	function yaziyaz()
	{
		$query=$this->db->get('ayarlar');
		$data["veri"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ");
		$data["yazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
	
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["ustkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0");
		$data["altkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM resimler ORDER BY resim_id DESC LIMIT 4");
		$data["resim"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler");
		$data["kat"]=$sorgu->result();
		$query=$this->db->get('ayarlar');
		$data["veriler"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar  ORDER BY id DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$this->load->view('Header',$data);
		$sorgu=$this->db->query("SELECT * FROM resimler");
		$data["gresimler"]=$sorgu->result();
		
		$this->load->view('Yazi_yaz2');
		$this->load->view('Sidebar');
		$this->load->view('Footer');
		
	}
	public function do_upload($name)
    {
       if($_FILES[$name]['size']>0) {
            $type = explode('.', $_FILES[$name]["name"]);
            $type = $type[count($type) - 1];
            $dosyaAdi = uniqid(rand()) . '.' . $type;
            $url = "./uploads/yaziresimler/". $dosyaAdi;
            if (in_array($type, array("jpg", "jpeg", "png")))
                if (is_uploaded_file($_FILES[$name]["tmp_name"]))
                    if (move_uploaded_file($_FILES[$name]["tmp_name"], $url))
                        return $dosyaAdi;
            return "";
        }else
            return "";
	}
	
	public function Yazi_gonder($id)
	{
		
				$dosyaAdi=$this->do_upload("userfile");
				$data=array(
				'resim'=>$dosyaAdi,
				'adi'=>$this->input->post('adi'),
				'keywords'=>$this->input->post('keywords'),
				'aciklama'=>$this->input->post('aciklama'),
				'icerik'=>$this->input->post('icerik'),
				'kategori_id'=>$this->input->post('kategori'),
				'yazar_id'=>$id
				);
				$this->Database_Model->insert_data('yazilar',$data);
				$this->session->set_flashdata("sonuc","Yazı kaydedildi");
				redirect(base_url()."Home/");

	}
	public function Yazar_goster($id)
	{
		$query=$this->db->get('ayarlar');
		$data["veri"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["ustkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		
		$sorgu=$this->db->query("SELECT * FROM ayarlar WHERE id=1");
		$data["ayarlar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler");
		$data["kat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["anakat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0");
		$data["altkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar");
		$data["yazilar"]=$sorgu->result();
		$query=$this->db->get('ayarlar');
		$data["veriler"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar  ORDER BY id DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		
		$sorgu=$this->db->query("SELECT * FROM(SELECT * FROM yazilar WHERE yazar_id=$id) yazilar ORDER BY id DESC");
		$data["uyeyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM uyeler WHERE id=$id");
		$data["uye"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM resimler");
		$data["gresimler"]=$sorgu->result();
		
		if ($data['uye']==NULL){redirect(base_url()."Home");}
		$this->load->view('Header',$data);
		$this->load->view("Yazar_goster",$data);
		$this->load->view('Sidebar');
		$this->load->view('Footer');
		
	}
		public function Yazi_duzenle($id)
	{
		$oturum=$this->session->userdata('oturum2');
		$yazar_id=$oturum['id'];
		
		$query=$this->db->get('ayarlar');
		$data["veriler"]=$query->result();
	
		
		$sorgu=$this->db->query("SELECT * FROM yazilar WHERE id=$id");
		$data["yazi"]=$sorgu->result();
		
		$sorgu=$this->db->query("SELECT * FROM ayarlar WHERE id=1");
		$data["ayarlar"]=$sorgu->result();
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
		$query=$this->db->get('ayarlar');
		$data["veri"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["ustkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar  ORDER BY id DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM resimler");
		$data["gresimler"]=$sorgu->result();
		
		
		
		
		
		$this->load->view('Header',$data);
		$this->load->view("Yazi_duzenle",$data);
		$this->load->view('Footer');
		
	}

	public function Yazi_sil($id)
	{
		$oturum=$this->session->userdata('oturum2');
		$yazar_id=$oturum['id'];
		$sorgu=$this->db->query("DELETE FROM yazilar WHERE id=$id");
		$this->session->set_flashdata("sonuc","Yazı silindi");
		redirect(base_url()."Home/Yazar_goster/$yazar_id");
	}
	public function Yazi_guncelle($id)
	{
				$oturum=$this->session->userdata('oturum2');
				$yazar_id=$oturum['id'];
				$data=array(
					
					'adi'=>$this->input->post('adi'),
					'keywords'=>$this->input->post('keywords'),
					'aciklama'=>$this->input->post('aciklama'),
					'icerik'=>$this->input->post('icerik'),
					'kategori_id'=>$this->input->post('kategori'),
					);
				if($_FILES['userfile']['size'] > 0) {
					$dosyaAdi=$this->do_upload("userfile");
					$data=array('resim'=>$dosyaAdi);
				}
				$this->Database_Model->update_data('yazilar',$data,$id);
				$this->session->set_flashdata("sonuc","Yazı Düzenlendi");
				redirect(base_url()."Home/Yazar_goster/$yazar_id");
	}
	
	function galeri()
	{
		
		$query=$this->db->get('ayarlar');
		$data["veri"]=$query->result();
		$query=$this->db->get('ayarlar');
		$data["veriler"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar ");
		$data["yazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
	
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0");
		$data["ustkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM kategoriler WHERE ust_id!=0");
		$data["altkat"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM resimler ORDER BY resim_id DESC LIMIT 4");
		$data["resim"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM yazilar  ORDER BY id DESC LIMIT 5");
		$data["sonyazilar"]=$sorgu->result();
		$sorgu=$this->db->query("SELECT * FROM resimler");
		$data["gresimler"]=$sorgu->result();
		
		$this->load->view('Header',$data);
		
		$this->load->view('Galeri_resimler');
		$this->load->view('Sidebar');
		$this->load->view('Footer');
		
	}
	
}  


