<?php
include_once "class_kucing.php";

$molly = new Kucing("Molly", 3, "Oranye");
$ole = new Kucing("Ole", 1, "White");

echo $molly->nama, '<br>';

echo $molly->makan(), '<br>';
echo $molly->tidur(), '<br>';
echo $molly->lari(), '<br>';

echo $molly->makan(), '<br>';
echo $molly->tidur(), '<br>';
echo $molly->lari();