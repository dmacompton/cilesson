<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Input extends CI_Controller {

	public function index() {

		if ($this->input->post('enter')) {
			// $login = $this->input->post('login');
			// echo $login;
			$cookie = array(
			    'name'   => 'login',
			    'value'  => $this->input->post('login'),
			    'expire' => '7200'
			);

			$this->input->set_cookie($cookie);
			redirect('input');
		} else {
			$this->load->view('login_input_view');

			echo $cook = $this->input->cookie('login');

			echo $ip = $this->input->ip_address();		

			echo $user_agent = $this->input->user_agent();	
		}

	}
}