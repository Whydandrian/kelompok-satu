<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('egold_model');
			$this->load->helper('url');
	}

	public function index(){		
		$data['judul'] = "Halaman depan";
		$this->load->view('v_header',$data);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer',$data);
		


	}
	public function tambah_kategori()
		{
			$data = array(
					'nama_kategori' => $this->input->post('nama_kategori')
				);
			$insert = $this->egold_model->tambah_kategori($data);
		}
	public function update_kategori()
		{
			$data = array(
					'nama_kategori' => $this->input->post('nama_kategori')
				);
	$this->egold_model->update_kategori(array('id_Kategori' => $this->input->post('id_Kategori')), $data;
		}
	public function delete_kategori($id)
	{
		$this->egold_model->delete_by_id($id);
		
	}
}	
