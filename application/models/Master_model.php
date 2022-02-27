<?php 
class Master_model extends CI_Model{	

	function __construct(){
		parent::__construct();
        $this->load->database();		
	}
	// kelas
    function getAllKelas()
    {
        return $this->db->get('tb_master_kelas')->result_array();
    }
    function AddKelas($name){
        $data = [
            "kelas"  => $name
        ];  
        $result= $this->db->insert('tb_master_kelas',$data);
        return $result;
    }

    function updateKelas($id,$name){
        $data = [
            "kelas"  => $name
        ];  
        $result=$this->db->where('id_kelas',$id);
        $result=$this->db->update('tb_master_kelas',$data);
        return $result;
    }

    function deleteKelas($id)
    {
        $this->db->delete('tb_master_kelas', ['id_kelas' => $id]);
    }
	
	// jurusan
    function getAllJurusan()
    {
        return $this->db->get('tb_master_jurusan')->result_array();
    }
    function AddJurusan($name){
        $data = [
            "jurusan"  => $name
        ];  
        $result= $this->db->insert('tb_master_jurusan',$data);
        return $result;
    }

    function updateJurusan($id,$name){
        $data = [
            "jurusan"  => $name
        ];  
        $result=$this->db->where('id_jurusan',$id);
        $result=$this->db->update('tb_master_jurusan',$data);
        return $result;
    }

    function deleteJurusan($id)
    {
        $this->db->delete('tb_master_jurusan', ['id_jurusan' => $id]);
    }
    // Semester
    function getAllSemester()
    {
        return $this->db->get('tb_master_semester')->result_array();
    }
    function AddSemester($name){
        $data = [
            "semester"  => $name
        ];  
        $result= $this->db->insert('tb_master_semester',$data);
        return $result;
    }

    function updateSemester($id,$name){
        $data = [
            "semester"  => $name
        ];  
        $result=$this->db->where('id_semester',$id);
        $result=$this->db->update('tb_master_semester',$data);
        return $result;
    }

    function deleteSemester($id)
    {
        $this->db->delete('tb_master_semester', ['id_semester' => $id]);
    }
}