<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Controller {

	function get_products() {
		$query = $this->db->get('products');
		return $query->result_array();
	}

}