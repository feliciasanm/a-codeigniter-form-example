<?php
Class Aspirasi_model extends CI_Model {
	
	public function __construct() {

		$this->load->database();
	
	}

	public function set_aspirasi($file_aspirasi = '') {
		 
		$data = array(
			'nama' => $this->input->post('nama'),
			'nrp' => preg_replace('/^[M]/', '', mb_strtoupper($this->input->post('nrp'))),
			'aspirasi' => $this->input->post('aspirasi'),
			'file_aspirasi' => $file_aspirasi
		);

		return $this->db->insert('aspirasi', $data);
	}
}
