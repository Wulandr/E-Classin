<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title><?php strtoupper("e-classin") ?></title>
</head>
<body style="background-color: 	#F0FFFF;">
  <!-- style="background-color: #e3f2fd; -->
<nav class="shadow-lg p-3 mb-5 fixed-top navbar navbar-expand-lg navbar-dark" style="background-color: #063b61;">
  <a class="navbar-brand" href="#"><img src="logo.png" alt="1" width="100" height="50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="matkul.php"><?= ucwords("mata kuliah"); ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mhs.php">Data Mahasiswa</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="LogAdmin.html">Admin</a>
          <a class="dropdown-item" href="LogDosen.html">Dosen</a>
          <a class="dropdown-item" href="LogMhs.html">Mahasiswa</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Kontak</a>
      </li>
    </ul>
  </div>
</nav>
<br>
<?php
$matkul = [
    "Pengantar TI",
    "Praktikum Pengantar TI",
    "Sistem Operasi",
    "Prak Sistem Operasi",
    "Algoritma & Pemrograman Dasar",
    "Prak Algoritma & Pemrograman Dasar",
    "Mikrokontroller I",
    "Prak Mikrokontroller I",
    "Matematika TI",
    "Komputasi Matematika",
    "Bahasa Inggris TI",
    "Pendidikan Agama",
    "Pancasila",
];
$semester = [1, 3, 5];
$kelas = ['A','B','C','D'];

?>
<br><br>
<br><br>
<div class="container">
    <form id="form" method="POST" action="submitipk.php">
    <p style="text-align: center;color:#063b61;font-size:larger; margin-top: 1cm;"><b>Perhitungan IP Mahasiswa</b></p>    
        
        <br><br>
        <!-- Nama : <input type="text" name="nama" placeholder="Nama Mahasiswa :"></br> -->
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama">
            </div>
        </div>
        <!-- NIM : <input type="text" name="nim" placeholder="NIM Mahasiswa :"></br> -->
        <div class="form-group row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nim">
            </div>
        </div>

        <div class="form-group row">
            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
            <select name="kelas" class="form-control col-sm-1">
                <option selected>Choose...</option>
                <?php foreach ($kelas as $kelas) { ?>
                    <option><?= $kelas ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group row">
            <label for="semester" class="col-sm-2 col-form-label">Semester</label>
            <select name="semester" class="form-control col-sm-1">
                <option selected>Choose...</option>
                <?php foreach ($semester as $semester) { ?>
                    <option><?= $semester ?></option>
                <?php } ?>
            </select>
        </div>
        
        <div class="form-group row">
            <label for="matkul" class="col-sm-2 col-form-label">Mata Kuliah</label>
            <select name="matkul" class="form-control col-sm-1">
                <option selected>Choose...</option>
                <?php
                foreach ($matkul as $matkul) { ?>
                    <option><?= $matkul ?></option>
                <?php } ?>
            </select>
        </div>

        <?php for ($i = 1; $i < 5; $i++) { ?>
            <div class="form-group row" method="POST" action="submitipk.php">
                <label for="tugas<?= $i ?>" class="col-sm-2 col-form-label">Tugas <?= $i ?> </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="tugas<?= $i ?>">
                </div>
            </div>
        <?php } ?>

        <div class="form-group row" method="POST" action="submitipk.php">
            <label for="uts" class="col-sm-2 col-form-label" >UTS</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="uts" placeholder="Isi 0 jika belum">
            </div>
        </div>
        <div class="form-group row" method="POST" action="submitipk.php">
            <label for="uas" class="col-sm-2 col-form-label" >UAS</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="uas" placeholder="Isi 0 jika belum">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="button">Submit</button>
        <form action="ipkmhs.php" method="POST" style="text-align: center;">
        <a href="ipkmhs.php"><button type="button" class="btn btn-success">Lihat Data IP</button></a>
        </form>
    </form>
</div>
</body>

</html>