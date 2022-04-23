<?php
class Kucing {
    public $nama;
    public $umur;
    public $warna;

    public function __construct($nama, $umur, $warna){
        $this->nama = $nama;
        $this->umur = $umur;
        $this->warna = $warna;
    }

    public function makan(){
        return "{$this->nama} Sedang Makan";
    }
    public function tidur(){
        return "{$this->nama} Sedang Tidur";
    }
    public function lari(){
        return "{$this->nama} Sedang Lari";
    }
}