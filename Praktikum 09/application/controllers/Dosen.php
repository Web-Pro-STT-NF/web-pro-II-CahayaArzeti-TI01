<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dosen extends CI_Controller {

    public function index()
    {
        $this->load->model('dosen_model','dsn1');
        $this->dsn1->id=1;
        $this->dsn1->nidn='444';
        $this->dsn1->nama='Sirojul Munir, S.Si., M.Kom.';
        $this->dsn1->gender='L';
       $this->dsn1->pendidikan=3.00;

        $this->load->model('dosen_model','dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nidn='666';
        $this->dsn2->nama='Chintia Handayani, S.S., M.Sas.';
        $this->dsn2->gender='P';
       $this->dsn2->pendidikan=2.00;

        $list_dsn = [$this->dsn1, $this->dsn2];

        $data['list_dsn']=$list_dsn;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index',$data);
        $this->load->view('layout/footer');   
    }
}