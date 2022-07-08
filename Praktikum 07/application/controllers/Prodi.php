<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Prodi extends CI_Controller {
    
    public function index(){

        $data = [];
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/index',$data);
        $this->load->view('layout/footer');
    }
}
?>