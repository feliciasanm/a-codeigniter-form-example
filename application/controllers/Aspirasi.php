<?php
class Aspirasi extends CI_Controller {
	
	public function __construct() {

		parent::__construct();
		$this->load->model("aspirasi_model");
		$this->load->helper("url_helper");
		$this->load->helper('form');
		$this->load->library('form_validation');

	}

	public function form() {

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('nrp', 'NRP', 'trim|required|regex_match[/^[A-GMa-gm]?\d{8}$/]');
		$this->form_validation->set_rules('aspirasi', 'Aspirasi', 'trim|required');

		$this->form_validation->set_message('required', 'Kolom {field} wajib diisi');
		$this->form_validation->set_message('regex_match', 'Format {field} tidak sesuai, pastikan {field} telah diisi dengan benar');	

		$config['upload_path']		 	= './file_aspirasi/';
		$config['allowed_types'] 		= 'jpg|png|zip|rar';
		$config['file_ext_tolower'] 	= TRUE;
		$config['max_size'] 			= 2048;
		$config['encrypt_name'] 		= TRUE;

		$this->load->library('upload', $config);
		$this->load->helper('file');

		// Check if there is upload. If there is, check if there is upload error.
		$upload_attempt_exists = !empty($_FILES['file_aspirasi']['name']);
		$upload_error_exists = $upload_attempt_exists && $this->upload->do_upload('file_aspirasi') === FALSE;

		if ($upload_error_exists) {
			$data['upload_errors'] = $this->upload->display_errors();
		}		

		if ($this->form_validation->run() === FALSE || $upload_error_exists) {

			$data['title'] = 'Form Aspirasi';
					
			if ($upload_attempt_exists && !$upload_error_exists) {
				unlink($config['upload_path'] . $this->upload->data('file_name'));
			}
			$this->load->view('aspirasi', $data);

		} else {

			$data['title'] = 'Form Aspirasi - Sukses';

			$this->aspirasi_model->set_aspirasi($this->upload->data('file_name'));
			$this->load->view('success', $data);

		}

	}

}
