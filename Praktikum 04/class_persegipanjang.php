<?php
class PersegiPanjang{
    public $panjang;
    public $lebar;

    function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
     function luasp(){
        $luas = $this->panjang * $this->lebar;
        return $luas;

    }
     function kelilingp(){
        $keliling = 2 * ($this->panjang + $this->lebar);
        return $keliling;
    }

}
?>