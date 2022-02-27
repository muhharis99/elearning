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
    // Mapel
    function getAllMapel()
    {
        return $this->db->get('tb_master_mapel')->result_array();
    }
    function AddMapel($name){
        $data = [
            "mapel"  => $name
        ];  
        $result= $this->db->insert('tb_master_mapel',$data);
        return $result;
    }

    function updateMapel($id,$name){
        $data = [
            "mapel"  => $name
        ];  
        $result=$this->db->where('id_mapel',$id);
        $result=$this->db->update('tb_master_mapel',$data);
        return $result;
    }

    function deleteMapel($id)
    {
        $this->db->delete('tb_master_mapel', ['id_mapel' => $id]);
    }
    // jenisujian
    function getAllJenisujian()
    {
        return $this->db->get('tb_jenisujian')->result_array();
    }
    function AddJenisujian($name){
        $data = [
            "jenisujian"  => $name
        ];  
        $result= $this->db->insert('tb_jenisujian',$data);
        return $result;
    }

    function updateJenisujian($id,$name){
        $data = [
            "jenisujian"  => $name
        ];  
        $result=$this->db->where('id_jenisujian',$id);
        $result=$this->db->update('tb_jenisujian',$data);
        return $result;
    }

    function deleteJenisujian($id)
    {
        $this->db->delete('tb_jenisujian', ['id_jenisujian' => $id]);
    }
    // jenisperangkat
    function getAllJenisperangkat()
    {
        return $this->db->get('tb_jenisperangkat')->result_array();
    }
    function AddJenisperangkat($name){
        $data = [
            "jenisperangkat"  => $name
        ];  
        $result= $this->db->insert('tb_jenisperangkat',$data);
        return $result;
    }

    function updateJenisperangkat($id,$name){
        $data = [
            "jenisperangkat"  => $name
        ];  
        $result=$this->db->where('id_jenisperangkat',$id);
        $result=$this->db->update('tb_jenisperangkat',$data);
        return $result;
    }

    function deleteJenisperangkat($id)
    {
        $this->db->delete('tb_jenisperangkat', ['id_jenisperangkat' => $id]);
    }
}