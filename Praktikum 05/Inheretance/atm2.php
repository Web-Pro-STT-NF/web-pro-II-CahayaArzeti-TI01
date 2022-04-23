<?php
require_once 'class_accountbank.php';

$ab1 = new AccountBank("010",5000000,"rooney");
$ab2 = new AccountBank("011",15000000,"ronaldo");

/*$ab1->cetak();
echo '<hr>';
$ab2->cetak();
echo '<br>ronaldo transfer uang ke rooney 1250000<br>';
echo 'Biaya Admin : '.AccountBank::$biaya_admin.'<br>';
$ab2->transfer($ab1,1250000);
*/
/*$ab1->cetak();
echo '<hr>';
$ab2->cetak(); */

$ar_ab = [$ab1,$ab2];

$_norek = $_POST['norek'];
$_customer = $_POST['customer'];
$_saldo = $_POST['saldo'];

$ab3 = new AccountBank($_norek,$_saldo,$_customer);
array_push($ar_ab,$ab3);

?>

<table class="table">
    <thead>
        <tr>
            <th>No</th><th>No.Rekening</th><th>Customer</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($ar_ab as $obj){
            ?>
        <tr>
            <td><?= $nomor?></td>
            <td><?=$obj->nomor?></td>
            <td><?=$obj->customer?></td>
            <td><?=$obj->getsaldo()?></td>
        </tr>
    <?php
    $nomor++;
        }
    ?>
    </tbody>
    </table>