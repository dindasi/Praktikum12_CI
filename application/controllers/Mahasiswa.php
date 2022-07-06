<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    public function index(){
        $this->load->model('mahasiswa_model','mahasiswa');

        $data['list_mahasiswa']=$this->mahasiswa->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('layout/footer');
        
    }

    public function view(){
        $_nim = $this->input->get('id');
        $this->load->model('mahasiswa_model','mahasiswa');
        $data['mhs']=$this->mahasiswa->findById($_nim);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/view',$data);
        $this->load->view('layout/footer');
        //die("NIM ".$_nim);
    }

    public function create(){
        $data['judul']='Form Kelola Mahasiswa';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('mahasiswa_model', 'mahasiswa');

        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_prodi = $this->input->post('prodi');
        $_ipk = $this->input->post('ipk');
        $_idedit = $this->input->post('idedit'); //hidden field kalau form nya update

        // membuat array yang nantinya akan di masukkan ke dalam $data_mhs.
        $data_mhs[] = $_nim; // ? 1
        $data_mhs[] = $_nama; // ? 2
        $data_mhs[] = $_gender; // ? 3
        $data_mhs[] = $_tmp_lahir; // ? 4
        $data_mhs[] = $_tgl_lahir; // ? 5
        $data_mhs[] = $_prodi; // ? 6
        $data_mhs[] = $_ipk; // ? 7

        if (isset($_idedit)){
            //update data lama
            $data_mhs[] = $_idedit; //? 8
            $this->mahasiswa->update($data_mhs);
        }else{
            //save data baru
            // untuk memanggil fungsi save di model
            $this->mahasiswa->save($data_mhs);
        }
        
        redirect(base_url(). 'index.php/mahasiswa/view?id='. $_nim , 'refresh');
        //redirect digunakan untuk membelokkan halaman, base_url dari redirect ini ada dari confignya, 

        //die(print r($this->mhs1));
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $mhsedit = $this->mahasiswa->findById($_id);

        $data['judul']='Form Update Mahasiswa';
        $data['mhsedit'] = $mhsedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $this->mahasiswa->delete($_id);
        redirect(base_url(). 'index.php/mahasiswa', 'refresh');
    }

}