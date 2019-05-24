<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Egold_model extends CI_Model {
	function tampil_data(){
		return $this->db->get('user');
	}

	

}

/* End of file Egold_model.php */
/* Location: ./application/models/Egold_model.php */