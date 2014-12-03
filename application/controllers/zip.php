<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zip extends CI_Controller {

	public function index() {
		$this->load->view('zip_view');
	}

	function archive() {
		
		$this->load->library('zip');

		$name = 'mydata1.txt';
		$data = $this->input->post('text');

		$this->zip->add_data($name, $data);

		$this->zip->archive('./zip/my_backup.zip'); 

		$this->zip->download('my_backup.zip');
	}

	function read_file() {
		$this->load->library('zip');

		$path = './img/photos/67ff6098a45dda6bcfbcb4abd4db8dae.jpg';

		$this->zip->read_file($path); 

		$this->zip->download('my_backup.zip');
	}

	function read_dir() {
		$this->load->library('zip');
		
		$path = './img/photos/';

		$this->zip->read_dir($path, FALSE); 

		// Загрузит файл на ваш компьютер. Назовет его "my_backup.zip"
		$this->zip->download('my_backup.zip');
	}
}