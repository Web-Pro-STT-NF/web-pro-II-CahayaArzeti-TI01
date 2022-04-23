<?php
include_once "class_pasien.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Calculator BMI | Cahaya Arzeti</title>

</head>

<body>
<div class="container mt-5">
    <div class="row">
      <div class="col">
        <form action="" method="GET">
          <div class="form-group row">
            <label class="col-4 col-form-label" for="tgl">Tanggal Periksa</label>
            <div class="col-8">
              <input id="tgl" name="tgl" placeholder="Tanggal saat pasien diperiksa" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="Kode Pasien" class="col-4 col-form-label">Kode Pasien</label>
            <div class="col-8">
              <input id="Kode" name="kode" placeholder="Kode pasien" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="Nama Pasien" class="col-4 col-form-label">Nama Pasien</label>
            <div class="col-8">
              <input id="Nama Pasien" name="nama" placeholder="Masukkan nama pasien" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="berat" class="col-4 col-form-label">Berat Badan (kg)</label>
            <div class="col-8">
              <input id="berat" name="berat" placeholder="Masukkan berat badan (kg)" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="tinggi" class="col-4 col-form-label">Tinggi Badan (cm)</label>
            <div class="col-8">
              <input id="tinggi" name="tinggi" placeholder="Masukkan tinggi badan (cm)" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Gender</label>
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki-laki">
                <label for="gender_0" class="custom-control-label">L</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Perempuan">
                <label for="gender_1" class="custom-control-label">P</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
      <?php $array = [
        $pasien1 = new BMIpasien('2022-01-01', 'P01', 'Ahmad', 'L', 69.8, 169),
        $pasien2 = new BMIpasien('2022-01-02', 'P02', 'Rina', 'P', 55.3, 165),
        $pasien3 = new BMIpasien('2022-01-02', 'P03', 'Lutfi', 'L', 45.2, 171),
      ];

      if (isset($_GET['submit'])) {
        $pasien4 = new BMIpasien($_GET['tgl'], $_GET['kode'], $_GET['nama'], $_GET['gender'], $_GET['berat'], $_GET['tinggi']);
        $array[] = $pasien4;
      }
      ?>
      <div class="row">
        <div class="col">
          <div class="table-responsive">
            <table class="table table-striped table-hover table-primary border-dark">
            <thead>
                <tr>
                  <th scope="col">NO</th>
                  <th scope="col">Tanggal Periksa</th>
                  <th scope="col">Kode Pasien</th>
                  <th scope="col">Nama Pasien</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Berat</th>
                  <th scope="col">Tinggi</th>
                  <th scope="col">Nilai</th>
                  <th scope="col">Status BMI</th>
                </tr>
              </thead>
              <tbody>
                <?php $nomer = 1; ?>
                <?php foreach ($array as $arr) : ?>
                  <tr>
                    <th scope="row"><?= $nomer++ ?></th>
                    <td><?= $arr->get_tanggal() ?></td>
                    <td><?= $arr->get_kode(); ?></td>
                    <td><?= $arr->get_nama(); ?></td>
                    <td><?= $arr->get_gender(); ?></td>
                    <td><?= $arr->get_berat() ?></td>
                    <td><?= $arr->get_tinggi() ?></td>
                    <td><?= $arr->nilaiBMI(); ?></td>
                    <td><?= $arr->statusBMI(); ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
              <caption>
                Captions of the table
              </caption>
            </table>
          </div>
</body>
</html>