<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan extends CI_Controller {
	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('pelanggan_model');
	 	}


	public function index()
	{

		$data['pelanggan']=$this->pelanggan_model->get_all_pelanggan();
		$this->load->view('pelanggan_view',$data);
	}
	public function pelanggan_add()
		{
			$data = array(
					'nama' => $this->input->post('nama'),
					'id_pelanggan' => $this->input->post('id_pelanggan'),
					'Email' => $this->input->post('Email'),
					'Username' => $this->input->post('Username'),
					'Password' => $this->input->post('Password'),
					'Alamat' => $this->input->post('Alamat'),
					'kode_pos' => $this->input->post('kode_pos'),
					'Jenis_Kelamin' => $this->input->post('Jenis_Kelamin'),
					'Umur' => $this->input->post('Umur'),
					'No_Rekening' => $this->input->post('No_Rekening'),
					'TTL' => $this->input->post('TTL'),
					'No_Telp' => $this->input->post('No_Telp'),
				);
			$insert = $this->pelanggan_model->pelanggan_add($data);
			echo json_encode(array("status" => TRUE));
		}
		public function ajax_edit($id)
		{
			$data = $this->book_model->get_by_id($id);



			echo json_encode($data);
		}

		public function pelanggan_update()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'Email' => $this->input->post('Email'),
			'Username' => $this->input->post('Username'),
			'Password' => $this->input->post('Password'),
			'Alamat' => $this->input->post('Alamat'),
			'kode_pos' => $this->input->post('kode_pos'),
			'Jenis_Kelamin' => $this->input->post('Jenis_Kelamin'),
			'Umur' => $this->input->post('Umur'),
			'No_Rekening' => $this->input->post('No_Rekening'),
			'TTL' => $this->input->post('TTL'),
			'No_Telp' => $this->input->post('No_Telp'),
			);
		$this->pelanggan_model->pelanggan_update(array('id_pelanggan' => $this->input->post('id_pelanggan')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function pelanggan_delete($id)
	{
		$this->book_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}



}
