<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('Kategori_model');
	 	}


	public function index()
	{

		$data['vkategori']=$this->Kategori_model->get_all_kategori();
		$this->load->view('kategori_view',$data);
	}


	public function kategori_add()
		{
			$data = array(
					'id_Kategori' => $this->input->post('id_Kategori'),
					'nama_kategori' => $this->input->post('nama_kategori'),
					
				);
			$insert = $this->kategori_model->kategori_add($data);
			echo json_encode(array("status" => TRUE));
		}

		public function ajax_edit($id)
		{
			$data = $this->kategori_model->get_by_id($id);
			echo json_encode($data);
		}

		public function kategori_update()
	{
		$data = array(
				'id_Kategori' => $this->input->post('id_Kategori'),
				'nama_kategori' => $this->input->post('nama_kategori'),
				
			);
		$this->kategori_model->kategori_update(array('id_Kategori' => $this->input->post('id_Kategori')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function kategori_delete($id)
	{
		$this->kategori_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}



}
