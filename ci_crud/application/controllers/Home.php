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
		$this->load->view('home_view');
	}
}
