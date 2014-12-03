<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->benchmark->mark('code_start');

		$data['user'] = $this->session->userdata('username');
		if (empty($data['user'])) {
			$this->load->view('login_view');
			
			$this->benchmark->mark('code_end');

			if ($this->input->post('enter')) {
				$newdata = array(
		                   'username'  => $this->input->post('login'),
		                   'logged_in' => TRUE
		               );

				$this->session->set_userdata($newdata);
				redirect('login');
			}
		} else {
			$this->load->view('hello_view', $data);
		}
	}

	public function logout() {
		$this->session->unset_userdata('username');
		redirect('login');
	}
}