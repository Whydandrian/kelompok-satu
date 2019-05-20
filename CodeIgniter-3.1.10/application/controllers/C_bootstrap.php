<?php

class C_bootstrap extends CI_Controller {

	public function bootstrap()
	{
		parent:: __construct();
        $autoload['helper'] = array('url');
    }
 
    function index()
    {
        $this->load->view('v_index.php');
	}
}