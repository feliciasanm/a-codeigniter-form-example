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

		if ($this->form_validation->run() === FALSE) {

			$data['title'] = 'Form Aspirasi';
			$data['has_submitted_form'] = $this->input->method() === 'post';
	
			$this->load->view('aspirasi', $data);

		} else {

			$data['title'] = 'Form Aspirasi - Sukses';
			$this->aspirasi_model->set_aspirasi();
			$this->load->view('success', $data);

		}

	}

}
