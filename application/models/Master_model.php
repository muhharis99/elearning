<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_model extends CI_Model {
	// Fungsi untuk menampilkan semua data siswa
	public function view(){
		return $this->db->get('tb_master_kelas')->result();
	}

	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, NIS tidak harus divalidasi
		// Jadi NIS di validasi hanya ketika menambah data siswa saja
		if($mode == "save")
	
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|max_length[50]');

		if($this->form_validation->run()) // Jika validasi benar
			return true; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return false; // Maka kembalikan hasilnya dengan FALSE
	}
	// Fungsi untuk melakukan simpan data ke tabel siswa
	public function save(){
		$data = array(
			
			"kelas" => $this->input->post('kelas')
		);

		$this->db->insert('tb_master_kelas', $data); // Untuk mengeksekusi perintah insert data
	}

	// Fungsi untuk melakukan ubah data siswa berdasarkan ID siswa
	public function edit($id_kelas){
		$data = array(
			"kelas" => $this->input->post('kelas')
		);

		$this->db->where('id_kelas', $id_kelas);
		$this->db->update('tb_master_kelas', $data); // Untuk mengeksekusi perintah update data
	}

	// Fungsi untuk melakukan menghapus data siswa berdasarkan ID siswa
	public function delete($id_kelas){
		$this->db->where('id_kelas', $id_kelas);
		$this->db->delete('tb_master_kelas'); // Untuk mengeksekusi perintah delete data
	}
}
