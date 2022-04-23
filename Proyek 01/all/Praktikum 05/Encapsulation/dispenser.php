<?php
class Dispenser
{
    protected $volume;
    protected $hargaPergelas;
    private $volumeGelas;
    public $namaMinuman;

    function __construct($minuman){
        $this->volume = 10000;
        $this->hargaPergelas = 3000;
        $this->volumeGelas = 250;
        $this->namaMinuman = $minuman;
    }

    public function cetak_Dispenser(){
        echo "<p>Air didalam dispenser sebanyak = " . $this->volume . " cm3";
        echo "<br>Harga Per Satu Gelas Rp." . $this->hargaPergelas;
        echo "<br>Volume Gelas = " . $this->volumeGelas . " ml";
        echo "<br>Nama Merk Dispenser = " . $this->namaMinuman . "</p>";
    }
    public function harga($beli){
        echo "<p>Harga dari {$beli} Gelas adalah Rp." .  $this->hargaPergelas * $beli; 
        echo "<br>Sisa Volume Dispenser = " . ($this->volume - ($this->volumeGelas * $beli)) . " cm3</p>";
    }

}

$Pembeli1 = new Dispenser("Aqua");
$Pembeli1-> cetak_Dispenser();
$Pembeli1->harga(4);
?>
