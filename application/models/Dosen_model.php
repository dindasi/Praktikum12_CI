<?php

class Dosen_model extends CI_Model{
   private $table = 'dosen';

    public function getAll(){
       //select * from dosen;
       $query = $this->db->get($this->table);
       return $query->result();
    }

    public function findById($id){
        //select * from dosen where nidn = $id;
        $this->db->where('nidn', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save ($data){
        //insert into dosen (nidn, nama, gender, tgl_lahir, tmp_lahir, pendidikan_akhir, prodi_kode) 
        //values ('0006067204', 'Suhendi', 'L', '1980-12-03', 'Jakarta', 'S2', 'SI');
        $sql = "INSERT INTO dosen (nidn, nama, gender, tgl_lahir, tmp_lahir, pendidikan_akhir, prodi_kode) VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        //update dosen set tmp_lahir = bogor where nidn= '0006067204';
        $sql = "UPDATE dosen SET nidn=?, nama=?, gender=?, tgl_lahir=?, tmp_lahir=?, pendidikan_akhir=?, prodi_kode=? WHERE nidn=?";
        $this->db->query($sql, $data);
    }

    public function delete($id){
        //delete from dosen where nidn = '0006067204';
        $sql = "DELETE FROM dosen WHERE nidn=?";
        $this->db->query($sql, array($id));
    }

}

?>