<?php
    class Mahasiswa_model extends CI_Model {
   
    private $table = 'mahasiswa';

    public function getAll(){
        //select * from mahasiswa;
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        //select * from mahasiswa where nim=$id;
        $this->db->where('nim', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        //insert into mahasiswa (nim, nama, gender, tmp_lahir, tgl_lahir, prodi, ipk) 
        //values ('01021001', 'Cindy Laura', 'P', 'Jakarta', 2003-03-08, 'SI' , '3.8');
        $sql = "INSERT INTO mahasiswa 
        (nim, nama, gender, tmp_lahir, tgl_lahir, prodi_kode, ipk) VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        //update mahasiswa set nim = '0112100289' where nim = '01021001';
        $sql = "UPDATE mahasiswa SET nim=?, nama=?, gender=?, tmp_lahir=?, tgl_lahir=?, prodi_kode=?, ipk=? WHERE nim=?";
        $this->db->query($sql, $data);
    }

    public function delete($id){
        //delete from mahasiswa where nim = $id;
        $sql = "DELETE FROM mahasiswa WHERE nim=?";
        $this->db->query($sql, array($id));

    }

}

?>