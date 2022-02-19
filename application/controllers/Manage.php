<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
// guru
	function index()
	{
		$data['isi'] = "manage/mguru";
		$this->load->view('template', $data);
	}

// siswa
	function siswasCI()
	{
		$data['isi'] = "manage/msiswa";
		$this->load->view('template', $data);
	}
}
