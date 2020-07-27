<?php 

class Database_Model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	public function insert_data($table,$data)
	{
		
		$this->db->insert($table,$data);
		return true;
		
	}
	public function update_data($table,$data,$id)
	{
		
		$this->db->where('id',$id);
		$this->db->update($table,$data);
	}
	public function update_ayarlar($table,$data)
	{
		
	
		$this->db->update($table,$data);
	}
	
	public function login($table,$email,$sifre)
	{	
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('email',$email);
		$this->db->where('sifre',$sifre);
		$this->db->limit(1);
		
		$query=$this->db->get();
		
		if($query->num_rows()==1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
}
?>
