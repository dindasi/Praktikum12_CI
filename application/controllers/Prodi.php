<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {
    
    public function index(){
        $this->load->model('prodi_model','prodi');

        $data['list_prodi']=$this->prodi->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/index',$data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $kode = $this->input->get('id');
        $this->load->model('prodi_model','prodi');
        $data['prodi']=$this->prodi->findById($kode);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/view',$data);
        $this->load->view('layout/footer');
        //die("NIM ".$_nim);
    }

    public function create(){
        $data['judul']='Form Kelola Data Prodi';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('prodi_model', 'prodi');

        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $kaprodi = $this->input->post('kaprodi');
        $_prodiedit = $this->input->post('prodiedit'); //hidden field kalau form nya update

        // membuat array yang nantinya akan di masukkan ke dalam $data_mhs.
        $data_prodi[] = $kode; // ? 1
        $data_prodi[] = $nama; // ? 2
        $data_prodi[] = $kaprodi; // ? 3

        if (isset($_prodiedit)){
            //update data lama
            $data_prodi[] = $_prodiedit; //? 4
            $this->prodi->update($data_prodi);
        }else{
            //save data baru
            // untuk memanggil fungsi save di model
            $this->prodi->save($data_prodi);
        }
        
        redirect(base_url(). 'index.php/prodi/view?id='. $kode , 'refresh');
        //redirect digunakan untuk membelokkan halaman, base_url dari redirect ini ada dari confignya, 
    }

    public function edit(){

        $kode = $this->input->get('id');
        $this->load->model('prodi_model', 'prodi');
        $prodiedit = $this->prodi->findById($kode);

        $data['judul']='Form Update Data Prodi';
        $data['prodiedit'] = $prodiedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $kode = $this->input->get('id');
        $this->load->model('prodi_model', 'prodi');
        $this->prodi->delete($kode);
        redirect(base_url(). 'index.php/prodi', 'refresh');
    }

}
?>