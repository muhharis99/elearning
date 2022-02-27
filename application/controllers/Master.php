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
			$id = $this->input->post('id_kelas',true);
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
			$data['alljurusan'] = $this->Master_model->getAllJurusan();
			$data['isi'] = "master/mjurusan";
			$this->load->view('template', $data);
		}
	function AddJurusan()
	{
		
		$this->form_validation->set_rules('jurusan', '"jurusan"', 'required');

		if ($this->form_validation->run() == false) {
           	echo validation_errors();
        } else {
			$name = $this->input->post('jurusan',true);
	
			$result= $this->Master_model->AddJurusan($name);
			echo json_decode($result);
			$this->session->set_flashdata('info', '<div class="alert alert-light-success border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
        }		
	}
	function editJurusan()
	{
		
		$this->form_validation->set_rules('jurusan', '"jurusan"', 'required');
		
		if ($this->form_validation->run() == false) {
			echo validation_errors();
		} else {
			$id = $this->input->post('id_jurusan',true);
			$name = $this->input->post('jurusan',true);

			$result= $this->Master_model->UpdateJurusan($id,$name);
			echo json_decode($result);
			$this->session->set_flashdata('info', '<div class="alert alert-light-info border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Info!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
		}
	}
    function deleteJurusan($id)
    {
		$this->Master_model->deleteJurusan($id);
        $this->session->set_flashdata('info', '<div class="alert alert-light-danger border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Error!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
        redirect(base_url('jurusan'));
    }

// semester
	function semesterCI()
		{
			$data['allsemester'] = $this->Master_model->getAllSemester();
			$data['isi'] = "master/msemester";
			$this->load->view('template', $data);
		}
	function AddSemester()
	{
		
		$this->form_validation->set_rules('semester', '"semester"', 'required');

		if ($this->form_validation->run() == false) {
           	echo validation_errors();
        } else {
			$name = $this->input->post('semester',true);
	
			$result= $this->Master_model->AddSemester($name);
			echo json_decode($result);
			$this->session->set_flashdata('info', '<div class="alert alert-light-success border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
        }		
	}
	function editSemester()
	{
		
		$this->form_validation->set_rules('semester', '"semester"', 'required');
		
		if ($this->form_validation->run() == false) {
			echo validation_errors();
		} else {
			$id = $this->input->post('id_semester',true);
			$name = $this->input->post('semester',true);

			$result= $this->Master_model->UpdateSemester($id,$name);
			echo json_decode($result);
			$this->session->set_flashdata('info', '<div class="alert alert-light-info border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Info!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
		}
	}
    function deleteSemester($id)
    {
		$this->Master_model->deleteSemester($id);
        $this->session->set_flashdata('info', '<div class="alert alert-light-danger border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Error!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
        redirect(base_url('semester'));
    }
// mapel
	function mapelCI()
		{
			$data['allmapel'] = $this->Master_model->getAllMapel();
			$data['isi'] = "master/mmapel";
			$this->load->view('template', $data);
		}
	function AddMapel()
	{
		
		$this->form_validation->set_rules('mapel', '"mapel"', 'required');

		if ($this->form_validation->run() == false) {
           	echo validation_errors();
        } else {
			$name = $this->input->post('mapel',true);
	
			$result= $this->Master_model->AddMapel($name);
			echo json_decode($result);
			$this->session->set_flashdata('info', '<div class="alert alert-light-success border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
        }		
	}
	function editMapel()
	{
		
		$this->form_validation->set_rules('mapel', '"mapel"', 'required');
		
		if ($this->form_validation->run() == false) {
			echo validation_errors();
		} else {
			$id = $this->input->post('id_mapel',true);
			$name = $this->input->post('mapel',true);

			$result= $this->Master_model->UpdateMapel($id,$name);
			echo json_decode($result);
			$this->session->set_flashdata('info', '<div class="alert alert-light-info border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Info!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
		}
	}
    function deleteMapel($id)
    {
		$this->Master_model->deleteMapel($id);
        $this->session->set_flashdata('info', '<div class="alert alert-light-danger border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Error!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
        redirect(base_url('mapel'));
    }
// jenis jenisujian
	function JenisujianCI()
		{
			$data['alljenisujian'] = $this->Master_model->getAllJenisujian();
			$data['isi'] = "master/mjenisujian";
			$this->load->view('template', $data);
		}
	function AddJenisujian()
	{
		
		$this->form_validation->set_rules('jenisujian', '"jenisujian"', 'required');

		if ($this->form_validation->run() == false) {
           	echo validation_errors();
        } else {
			$name = $this->input->post('jenisujian',true);
	
			$result= $this->Master_model->AddJenisujian($name);
			echo json_decode($result);
			$this->session->set_flashdata('info', '<div class="alert alert-light-success border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
        }		
	}
	function editJenisujian()
	{
		
		$this->form_validation->set_rules('jenisujian', '"jenisujian"', 'required');
		
		if ($this->form_validation->run() == false) {
			echo validation_errors();
		} else {
			$id = $this->input->post('id_jenisujian',true);
			$name = $this->input->post('jenisujian',true);

			$result= $this->Master_model->UpdateJenisujian($id,$name);
			echo json_decode($result);
			$this->session->set_flashdata('info', '<div class="alert alert-light-info border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Info!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
		}
	}
    function deleteJenisujian($id)
    {
		$this->Master_model->deleteJenisujian($id);
        $this->session->set_flashdata('info', '<div class="alert alert-light-danger border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Error!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
        redirect(base_url('jenisujian'));
    }
// perangkat
	function jenisperangkatCI()
		{
			$data['alljenisperangkat'] = $this->Master_model->getAllJenisperangkat();
			$data['isi'] = "master/mperangkat";
			$this->load->view('template', $data);
		}
	function AddJenisperangkat()
	{
		
		$this->form_validation->set_rules('jenisperangkat', '"jenisperangkat"', 'required');

		if ($this->form_validation->run() == false) {
           	echo validation_errors();
        } else {
			$name = $this->input->post('jenisperangkat',true);
	
			$result= $this->Master_model->AddJenisperangkat($name);
			echo json_decode($result);
			$this->session->set_flashdata('info', '<div class="alert alert-light-success border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
        }		
	}
	function editJenisperangkat()
	{
		
		$this->form_validation->set_rules('jenisperangkat', '"jenisperangkat"', 'required');
		
		if ($this->form_validation->run() == false) {
			echo validation_errors();
		} else {
			$id = $this->input->post('id_jenisperangkat',true);
			$name = $this->input->post('jenisperangkat',true);

			$result= $this->Master_model->UpdateJenisperangkat($id,$name);
			echo json_decode($result);
			$this->session->set_flashdata('info', '<div class="alert alert-light-info border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Info!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
		}
	}
    function deleteJenisperangkat($id)
    {
		$this->Master_model->deleteJenisperangkat($id);
        $this->session->set_flashdata('info', '<div class="alert alert-light-danger border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Error!</strong> Lorem Ipsum is simply dummy text of the printing. </div>');
        redirect(base_url('jenisperangkat'));
    }
}
