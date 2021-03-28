<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>DOSEN</title>
</head>
<body>
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
        <a class="nav-link" href="pengumuman.php">Pengumuman</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Kontak</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="nav.php" id="nav" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="LogAdmin.html">Admin</a>
          <a class="dropdown-item" href="LogDosen.html">Dosen</a>
          <a class="dropdown-item" href="LogMhs.html">Mahasiswa</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<?php
include("koneksi.php");
include("nav.php");
?>


<br><br><br><br>
<div class="container-fluid px-lg-2" style="text-align: center;margin-top:3cm">
    <h1><?= ucwords("selamat datang dosen")?></h1>
    <br>
    <a href="hitungipk.php"><button type="button" class="btn btn-info">Hitung IP</button></a>
    <a href="ipkmhs.php"><button type="button" class="btn btn-info">Lihat IP</button></a>
    <a href="datapresensi.php"><button type="button" class="btn btn-info">Presensi Mahasiswa</button></a>
    <!-- <a href="uploadmateri.php"><button type="button" class="btn btn-info">Upload Materi</button></a>
    <a href="uploadtugas.php"><button type="button" class="btn btn-info">Upload Tugas</button></a> -->
</div>
</body>
</html>