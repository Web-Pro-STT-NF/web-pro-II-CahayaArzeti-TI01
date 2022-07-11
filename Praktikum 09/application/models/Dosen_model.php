<?php
class dosen_model extends CI_Model {
    public $id;
    public $nama;
    public $nidn;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $pendidikan;

    public function predikat() {
        $predikat = ($this->pendidikan >= 2.00)?"Terpenuhi" : "Lulus";
        return $predikat;
    }
}