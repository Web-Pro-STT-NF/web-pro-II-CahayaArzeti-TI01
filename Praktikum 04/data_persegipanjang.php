<?php
    require_once "class_persegipanjang.php";
    $LuasPersegi = new PersegiPanjang($_POST['panjang'], $_POST['lebar']);
    echo "Hasilnya adalah";
    echo "<br>Luas Persegi Panjang : ". $LuasPersegi->luasp();
    echo "<br>Keliling Persegi Panjang : ". $LuasPersegi->kelilingp();
        ?>