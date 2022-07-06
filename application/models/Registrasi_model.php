<?php

class Registrasi_model extends CI_Model{
    
    private $table = 'user';

    public function getAll(){
        //select * from user;
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        //select * from user where username = 'admin';
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function registrasi($uname,$email,$pass,$konfirm){
        $sql = "SELECT * FROM user WHERE username=? and email=? and password=MD5(?) and password=MD5(?)";
        $data = [$uname,$email,$pass,$konfirm];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }
}
?>