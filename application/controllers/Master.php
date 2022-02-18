<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	function index()
	{
		$data['isi'] = "content";
		$this->load->view('template', $data);
	}

// kelas
	function kelasCI()
	{
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
