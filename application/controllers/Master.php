<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Master_model');
		$this->load->helper('form');
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
		$data['allkelas'] = $this->Master_model->getAllKelas();
		$data['isi'] = "master/mkelas";
		$this->load->view('template', $data);
	}
	function AddKelas()
	{
		
		$this->form_validation->set_rules('kelas', '"kelas"', 'required');

		if ($this->form_validation->run() == false) {
           	echo validation_errors();
        } else {
			$name = $this->input->post('kelas',true);
	
			$result= $this->Master_model->AddKelas($name);
			echo json_decode($result);
			$this->session->set_flashdata('info', '<div class="alert alert-light-success border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
        }		
	}
	function editKelas()
	{
		
		$this->form_validation->set_rules('kelas', '"kelas"', 'required');
		
		if ($this->form_validation->run() == false) {
			echo validation_errors();
		} else {
			$id = $this->input->post('id',true);
			$name = $this->input->post('kelas',true);

			$result= $this->Master_model->UpdateKelas($id,$name);
			echo json_decode($result);
			$this->session->set_flashdata('info', '<div class="alert alert-light-info border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Info!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
		}
	}
    
    function deleteKelas($id)
    {
		$this->Master_model->deleteKelas($id);
        $this->session->set_flashdata('info', '<div class="alert alert-light-danger border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Error!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
        redirect(base_url('kelas'));
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
