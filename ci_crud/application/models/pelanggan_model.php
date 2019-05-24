<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan_model extends CI_Model
{

	var $table = 'pelanggan';


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


public function get_all_pelanggan()
{
$this->db->from('pelanggan');
$query=$this->db->get();
return $query->result();
}


	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('Id_Pelanggan',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function pelanggan_add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function pelanggan_update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('Id_Pelanggan', $id);
		$this->db->delete($this->table);
	}


}
