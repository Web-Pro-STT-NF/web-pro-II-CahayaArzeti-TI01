<?php
class mahasiswa_model extends CI_Model {
    public $id;
    public $nama;
    public $nim;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $ipk;
    public $prodi;

    public function predikat() {
        $predikat = ($this->ipk >= 3.75)?"Cumlaude" : "Baik";
        return $predikat;
    }
}