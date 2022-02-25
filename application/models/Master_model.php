<?php 
class Master_model extends CI_Model{	

	function __construct(){
		parent::__construct();
        $this->load->database();		
	}
    // 
    function getAllKelas()
    {
        return $this->db->get('tb_master_kelas')->result_array();
    }
    // 
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
        $result=$this->db->where('id',$id);
        $result=$this->db->update('tb_master_kelas',$data);
        return $result;
    }

    function deleteKelas($id)
    {
        $this->db->delete('tb_master_kelas', ['id' => $id]);
    }

}