<!DOCTYPE html>
<html>
<head>
<body>
<?php
    $tims = ["erwin","heru","ali","zaki"];
    array_unshift($tims,"joko","wati");
    foreach($tims as $person){
        echo $person. '<br>';
    }
?>
</body>
</html>