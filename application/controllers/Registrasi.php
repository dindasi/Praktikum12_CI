<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

    public function index(){
        $data = [];
        $this->load->view('registrasi', $data);
    }

    public function otentikasi(){
        $this->load->model("registrasi_model","registrasi");
        $_username = $this->input->post('username'); 
        $_email = $this->input->post('email'); 
        $_password = $this->input->post('password');
        $_konfirmasi_password = $this->input->post('password');

        $row = $this->registrasi->registrasi($_username, $_email, $_password, $_konfirmasi_password);
        if(isset($row)){
            // jika user terdaftar di database
            $this->session->set_userdata('USERNAME', $row->username);
            $this->session->set_userdata('USER', $row);

            redirect(base_url().'index.php/login');
        }else{// jika username, email, dan password tidak sesuai dengan data base
            redirect(base_url().'index.php/registrasi?status=f'); 
        }
    }
}
?>