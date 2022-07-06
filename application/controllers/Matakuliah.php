<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {
    public function index(){
        $this->load->model('Matakuliah_model','mk1');
        $this->mk1->id=1;
        $this->mk1->nama='Pemrograman Web';
        $this->mk1->sks='20';
        $this->mk1->kode='PW001';

        $this->load->model('Matakuliah_model','mk2');
        $this->mk2->id=2;
        $this->mk2->nama='Basis Data';
        $this->mk2->sks='24';
        $this->mk2->kode='BD003';

        $this->load->model('Matakuliah_model','mk3');
        $this->mk3->id=3;
        $this->mk3->nama='Jaringan Komputer';
        $this->mk3->sks='18';
        $this->mk3->kode='JK008';

        $list_mk = [$this->mk1, $this->mk2, $this->mk3 ];
        $data['list_mk'] = $list_mk;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layout/footer');
	}
    public function create(){
        $data['judul'] = 'Form Kelola Matakuliah';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('Matakuliah_model', 'matkul1');
        $this->matkul1->nama=$this->input->post('matkul');
        $this->matkul1->sks=$this->input->post('sks');
        $this->matkul1->kode=$this->input->post('kode');

        // die(print_r($this->matkul1));

        $data['matkul1'] = $this->matkul1;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('Matakuliah/view', $data);
        $this->load->view('layout/footer');

    }
}