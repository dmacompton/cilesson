<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index() {
		$this->load->model('cart_model');
		$data['products'] = $this->cart_model->get_products();
		$this->load->view('products_view', $data);
	}

	function add_product($id) {

		if (isset($_POST['to_cart'])) {
			$data = array(
		       'id'      		=> $this->input->post('id'),
		       'qty'     		=> 1,
		       'price'   		=> $this->input->post('price'),
		       'name'    		=> $this->input->post('title_en'),
		       'title'	 		=> $this->input->post('title'),
		       'description'	=> $this->input->post('description'),
		    );

			$this->cart->insert($data);
			redirect('cart');
		} else {
			$this->load->view('products_view');
		}
	}

	function view_cart() {
		if ($this->cart->total_items() == 0) {
			$this->load->view('info_view');
		} else {
			$this->load->helper('form');
			$this->load->view('cart_view');
		}
	}

	function update() {
		for ($i = 1; $i <= $this->cart->total_items(); $i++) {
		    $item = $this->input->post($i);
		    $data = array(
		            'rowid' => $item['rowid'], 
		            'qty' => $item['qty']
		    );
		    $this->cart->update($data);
		}
		redirect('cart/view_cart');
	}

	function clear_cart() {
		$this->cart->destroy();
		redirect('cart');
	}
}