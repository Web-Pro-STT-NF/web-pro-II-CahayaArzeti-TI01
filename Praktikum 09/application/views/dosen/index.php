<div class="col-md-12">
    <h3>
        Daftar Dosen
    </h3>
 <table class="table">
    <thead>
        <tr>
    <th>No</th>
    <th>NIDN</th>
    <th>Nama</th>
    <th>Gender</th>
    <th>Pendidikan</th>
    <th>Predikat</th>
        </tr>
    </thead>
    <tbody>
 <?php
    $nomor=1;
    foreach($list_dsn as $dsn){
 ?>
    <tr>
        <td><?=$nomor?></td>
        <td><?=$dsn->nidn?></td>
        <td><?=$dsn->nama?></td>
        <td><?=$dsn->gender?></td>
        <td><?=$dsn->pendidikan?></td>
        <td><?=$dsn->predikat()?></td>
    </tr>
 <?php
 $nomor++;
 }
 ?>
    </tbody>
 </table>
</div>