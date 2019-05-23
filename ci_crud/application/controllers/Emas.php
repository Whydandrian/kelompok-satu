<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emas extends CI_Controller {
	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('emas_model');
	 	}


	public function index()
	{

		$data['vbarang']=$this->emas_model->get_all_barang();
		$this->load->view('emas_view',$data);
	}


	public function book_add()
		{
			$data = array(
					'id_Barang' => $this->input->post('id_Barang'),
					'nama' => $this->input->post('nama'),
					'berat' => $this->input->post('berat'),
					'harga' => $this->input->post('harga'),
					'stok' => $this->input->post('stok'),
					'keterangan' => $this->input->post('keterangan'),
					'id_Kategori' => $this->input->post('id_Kategori'),
					'gambar' => $this->input->post('gambar'),
				);
			$insert = $this->emas_model->emas_add($data);
			echo json_encode(array("status" => TRUE));
		}

		public function ajax_edit($id)
		{
			$data = $this->emas_model->get_by_id($id);
			echo json_encode($data);
		}

		public function book_update()
	{
		$data = array(
				'id_Barang' => $this->input->post('id_Barang'),
				'nama' => $this->input->post('nama'),
				'berat' => $this->input->post('berat'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),
				'keterangan' => $this->input->post('keterangan'),
				'id_Kategori' => $this->input->post('id_Kategori'),
				'gambar' => $this->input->post('gambar'),
			);
		$this->emas_model->emas_update(array('id_Barang' => $this->input->post('id_Barang')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function barang_delete($id)
	{
		$this->emas_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}



}
