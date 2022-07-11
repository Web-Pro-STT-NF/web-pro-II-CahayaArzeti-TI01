<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->model('Matakuliah_model', 'matkul1');
        $this->matkul1->nama='Matematika Komputer';
        $this->matkul1->sks = '2';
        $this->matkul1->kode= '211190';

        $this->load->model('Matakuliah_model', 'matkul2');
        $this->matkul2->nama='Jaringan Komputer';
        $this->matkul2->sks = '3';
        $this->matkul2->kode= '211287';
        
        $list_matkul = [$this->matkul1, $this->matkul2];
        $data['list_matkul'] = $list_matkul;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layout/footer');
    }
}
