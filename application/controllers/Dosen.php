<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
    public function index(){
        $this->load->model('dosen_model', 'dosen');

        $data['list_dosen']=$this->dosen->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $nidn = $this->input->get('id');
        $this->load->model('dosen_model','dosen');
        $data['dosen']=$this->dosen->findById($nidn);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul'] = 'Form Kelola Data Dosen';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('dosen_model', 'dosen');

        $_nidn = $this->input->post('nidn');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_pendidikan_akhir = $this->input->post('pendidikan_akhir');
        $_prodi_kode = $this->input->post('prodi_kode');
        $dosen_edit = $this->input->post('dosen_edit'); //hidden field kalau form nya update

        // membuat array yang nantinya akan di masukkan ke dalam $data_mhs.
        $data_dosen[] = $_nidn; // ? 1
        $data_dosen[] = $_nama; // ? 2
        $data_dosen[] = $_gender; // ? 3
        $data_dosen[] = $_tgl_lahir; // ? 4
        $data_dosen[] = $_tmp_lahir; // ? 5
        $data_dosen[] = $_pendidikan_akhir; // ? 6
        $data_dosen[] = $_prodi_kode; // ? 7

        if (isset($dosen_edit)){
            //update data lama
            $data_dosen[] = $dosen_edit; //? 8
            $this->dosen->update($data_dosen);
        }else{
            //save data baru
            // untuk memanggil fungsi save di model
            $this->dosen->save($data_dosen);
        }
        
        redirect(base_url(). 'index.php/dosen/view?id='. $_nidn , 'refresh');
        //redirect digunakan untuk membelokkan halaman, base_url dari redirect ini ada dari confignya, 

        //die(print r($this->mhs1));

    }

    public function edit(){
        $_nidn = $this->input->get('id');
        $this->load->model('dosen_model', 'dosen');
        $dosen_edit = $this->dosen->findById($_nidn);

        $data['judul']='Form Update Data Dosen';
        $data['dosen_edit'] = $dosen_edit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $nidn = $this->input->get('id');
        $this->load->model('dosen_model', 'dosen');
        $this->dosen->delete($nidn);
        redirect(base_url(). 'index.php/dosen', 'refresh');
    }
}

?>