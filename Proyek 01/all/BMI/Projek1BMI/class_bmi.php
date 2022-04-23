<?php
class BMI
{
    protected $tinggi;
    protected $berat;

    public function nilaiBMI()
    {
        $tbhasil = $this->tinggi / 100;
        $hasil = $this->berat / ($tbhasil * $tbhasil);
        return number_format($hasil, 2);
    }
    public function statusBMI()
    {
        if ($this->nilaiBMI() <= 15.5) {
            return 'Kekurangan';
        } elseif ($this->nilaiBMI() <= 18.5) {
            return 'Normal';
        } elseif ($this->nilaiBMI() <= 25) {
            return 'Normal';
        } elseif ($this->nilaiBMI() > 30) {
            return 'Kegemukan';
        } elseif ($this->nilaiBMI() > 35) {
            return 'Obesitas Kelas 1';
        } elseif ($this->nilaiBMI() > 40) {
            return 'Obesitas Kelas 2';
        } elseif ($this->nilaiBMI() > 45) {
            return 'Obesitas Kelas 3';
        }
    }
}
