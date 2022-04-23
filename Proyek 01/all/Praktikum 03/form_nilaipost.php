<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form Nilai Mahasiswa | Cahaya Arzeti</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  <div class="container card">
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Sistem Penilaian</p>
            </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h4>Form Nilai Siswa</h4>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
    <form class="form-horizontal" action="form_nilaipost.php" method="POST">
      <div class="form-group row">
        <label for="name" class="col-2 col-form-label">Nama :</label> 
        <div class="col-6">
          <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="matkul" class="col-2 col-form-label">Mata Kuliah :</label> 
        <div class="col-6">
          <select id="matkul" name="matkul" class="custom-select">
            <option value="Jaringan Komputer">Jaringan Komputer</option>
            <option value="Pemrograman Web-2">Pemrograman Web-2</option>
            <option value="Basis Data">Basis Data</option>
            <option value="Statistika dan Probabilitas">Statistika dan Probabilitas</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_uts" class="col-2 col-form-label">Nilai UTS :</label> 
        <div class="col-6">
          <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_uas" class="col-2 col-form-label">Nilai UAS :</label> 
        <div class="col-6">
          <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_tugas" class="col-2 col-form-label">Nilai Tugas/Praktikum :</label> 
        <div class="col-6">
          <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
      </div>
    </div>
    <div class="row">
        <div class="col-12 bg-light pt-3">
        <p>Develop by Mahasiswa STT NF</p>
        </div>
    </div>
</div>
    </form>
    <?php
    include_once 'libfungsi.php';
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

    echo '<br>Nama : '.$nama_siswa;
    echo '<br>Mata Kuliah : '.$mata_kuliah;
    echo '<br>Nilai UTS : '.$nilai_uts;
    echo '<br>Nilai UAS : '.$nilai_uas;
    echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas;

    $result = persentase($nilai_uts, $nilai_uas, $nilai_tugas);
    $grade_nilai = grade_nilai($result);

    echo '<br>Nilai Akhir : '.$result;
    echo '<br>Status : '.kelulusan($result);
    echo '<br>Grade Nilai : '.grade_nilai ($result);
    echo '<br>Predikat Nilai : '.predikat_nilai($grade_nilai);
?>
  </body>
</html>
