<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Master_model');
	}
// home
	function index()
	{
		$data['isi'] = "master/mhome";
		$this->load->view('template', $data);
	}

// kelas
	function kelasCI()
	{
		
		$data['data'] = $this->Master_model->view();
		$data['isi'] = "master/mkelas";
		$this->load->view('template', $data);
	}

	function saveKelas(){
		if($this->Master_model->validation("save")){ // Jika validasi sukses atau hasil validasi adalah true
			$this->Master_model->save(); // Panggil fungsi save() yang ada di SiswaModel.php
			
			// Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
			$html = $this->load->view('master/vkelas', array('data'=>$this->Master_model->view()), true);

			$callback = array(
				'status'=>'sukses',
				'pesan'=>'Data berhasil disimpan',
				'html'=>$html
			);
		}else{
			$callback = array(
				'status'=>'gagal',
				'pesan'=>validation_errors()
			);
		}
		echo json_encode($callback);
	}

		function editKelas($id_kelas){
			if($this->Master_model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah true
				$this->Master_model->edit($id_kelas); // Panggil fungsi edit() yang ada di SiswaModel.php
				// Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php

				$html = $this->load->view('master/vkelas', array('data'=>$this->Master_model->view()), true);
				
				$callback = array(
				'status'=>'sukses',
				'pesan'=>'Data berhasil diubah',
				'html'=>$html
			);
		}else{
			$callback = array(
				'status'=>'gagal',
				'pesan'=>validation_errors()
			);
		}
		echo json_encode($callback);
	}

// jurusan
	function jurusanCI()
		{
			$data['isi'] = "master/mjurusan";
			$this->load->view('template', $data);
		}

// semester
	function semesterCI()
		{
			$data['isi'] = "master/msemester";
			$this->load->view('template', $data);
		}

// mapel
	function mapelCI()
		{
			$data['isi'] = "master/mmapel";
			$this->load->view('template', $data);
		}

// jenis ujian
	function jenisujianCI()
		{
			$data['isi'] = "master/mjenisujian";
			$this->load->view('template', $data);
		}

// perangkat
	function perangkatCI()
		{
			$data['isi'] = "master/mperangkat";
			$this->load->view('template', $data);
		}
}
