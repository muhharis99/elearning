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
		$data['data'] = $this->db->get('tb_master_kelas');
		$data['isi'] = "master/mkelas";
		$this->load->view('template', $data);
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
