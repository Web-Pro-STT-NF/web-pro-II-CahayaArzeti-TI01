<?php
include_once "pasien.php";
include_once "class_bmi.php";

class BMIpasien extends BMI
{
    use Pasien;
    public $tanggal;
    public function __construct($tanggal, $kode, $nama, $gender, $berat, $tinggi)
    {
        $this->nama = $nama;
        $this->gender = $gender;
        $this->tanggal = $tanggal;
        $this->kode = $kode;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }
    public function get_tanggal()
    {
        return $this->tanggal;
    }
    public function get_berat()
    {
        return $this->berat;
    }
    public function get_tinggi()
    {
        return $this->tinggi;
    }
    public function get_kode()
    {
        return $this->kode;
    }
    public function get_nama()
    {
        return $this->nama;
    }
    public function get_gender()
    {
        return $this->gender;
    }
}