<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Hasil Perhitungan Nilai</title>
    <style>
        #par {
            text-align: center;
        }

        .body {
            text-align: center;
        }

        .center {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
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
<body>
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

    <br><br>
    <form action="uploadipk.php" method="GET">
<?php
    $nama = $_POST['nama'];
    $nim  = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $semester = $_POST['semester'];
    $matkul = $_POST['matkul'];
    $tugas1 = $_POST['tugas1'];
    $tugas2 = $_POST['tugas2'];
    $tugas3 = $_POST['tugas3'];
    $tugas4 = $_POST['tugas4'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    ?>
<br><br><br>
    <div id="par" class="card p-3 text-center col-sm-6-center">
        <div class="card-header">
            <?php $hello = "Selamat Datang Kawan" ?>
            <?= strtoupper(str_replace("Kawan", $nama, $hello)) ?>
        </div>
        <div class="card-body">
            <h5 class="card-title">Biodata : </h5>
            <p class="card-text">
                <table style="text-align: justify;" cellpadding="3">

                    <tr>
                        <td> <?= "Nama : " ?><br></td>
                        <td> <?= $nama ?><br></td>
                    </tr>
                    <tr>
                        <td> <?= "NIM : " ?><br></td>
                        <td> <?= $nim ?><br></td>
                    </tr>
                    <tr>
                        <td> <?= "Kelas : " ?><br></td>
                        <td> <?= $kelas ?><br></td>
                    </tr>
                    <tr>
                        <td> <?= "Semester : " ?><br></td>
                        <td> <?= $semester ?><br></td>
                    </tr>

                    <tr>
                        <td> <?= "Mata Kuliah : " ?><br></td>
                        <td> <?= $matkul ?><br></td>
                    </tr>
                </table>

            </p>
            <!-- <a href="#" class="btn btn-primary"></a> -->
        </div>
        <div class="card-footer text-muted">
            Perolehan :
            <br>
            <table border="2" width="800" class="center">
                <br>
                <tr>
                    <?php for ($i = 1; $i < 5; $i++) { ?>
                        <td><?= "Tugas " . $i ?></td>
                    <?php } ?>
                    <td>UTS</td>
                    <td>UAS</td>
                    <td>IP Semester <?= $semester ?></td>
                    <td>Huruf</td>
                </tr>
                <tr>
                    <td><?= $tugas1 ?></td>
                    <td><?= $tugas2 ?></td>
                    <td><?= $tugas3 ?></td>
                    <td><?= $tugas4 ?></td>
                    <td><?= $uts ?></td>
                    <td><?= $uas ?></td>
                    <?php
                    $totaltugas = (($tugas1 + $tugas2 + $tugas3 + $tugas4) / 4) * (20 / 100);
                    $persentase = ((($tugas1 + $tugas2 + $tugas3 + $tugas4) / 4) / 5) + ((($uts + $uas) / 2) - 20);
                    if ($uts != 0 || $uas != 0) {
                        $totalujian = ($uts * (40 / 100)) + ($uas * (40 / 100));
                        $totalnilai = $totaltugas + $totalujian;
                        $ip = $totalnilai * (4 / 100);
                    }
                    ?>
                    <td><?= $ip ?></td>

                    <?php
                    echo $persentase . "%";
                    echo "<br>";
                    function lulus($isi)
                    {
                    ?>
                        <button type="button" class="btn btn-success">
                            Anda Tidak Mengulang Mata Kuliah <?= $isi ?> 
                        </button>

                    <?php }
                    function ngulang($isi)
                    {
                    ?>
                        <button type="button" class="btn btn-danger">
                            Anda Mengulang Mata Kuliah <?= $isi ?> 
                        </button>
                        <br>
                    <?php }
                    if ($ip <= 4.000 && $ip > 3.700) {
                        $huruf = "A";
                        lulus($matkul);
                    } elseif ($ip <= 3.700 && $ip > 3.300) {
                        $huruf = "A-";
                        lulus($matkul);
                    } elseif ($ip <= 3.300 && $ip > 3.000) {
                        $huruf = "B+";
                        lulus($matkul);
                    } elseif ($ip <= 3.000 && $ip > 2.700) {
                        $huruf = "B";
                        lulus($matkul);
                    } else {
                        $huruf = "-";
                        ngulang($matkul);
                    }
                    ?>
                    <br>
                    <td><?= $huruf ?></td>
                </tr>
            </table>
            <br>
            <?php
            if ($uts == 0) {
                $hariuts = date_create('2020-12-28');
                $ini = date_create();
                $diff = date_diff($hariuts, $ini);
            ?>
                <button type="button" class="btn btn-warning"><?= 'Ikuti Ujian Susulan UTS 27 Desember 2020 ( ' . $diff->days . ' Hari Lagi )'; ?></button>
            <?php

            } elseif ($uas == 0) {
                $hariuas = date_create('2020-12-29');
                $now = date_create();
                $diff2 = date_diff($hariuas, $now);
            ?>
                <button type="button" class="btn btn-warning"><?= 'Ikuti Ujian Susulan UAS 28 Desember 2020  ( ' . $diff2->days . ' Hari Lagi )'; ?></button>
            <?php
            }
            ?>
        </div>
    

    <!-- <input type="hidden" name="id" value=<?php echo
    $_GET['id'];?>> -->
    
    
    <!-- <button type="submit" name="upload" class="btn
    btn-primary">Upload</button> -->
    </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eclassin";
    $mysqli2 = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "INSERT INTO ipk (nama,nim, kelas, semester, matakuliah, tugas1, tugas2, tugas3, tugas4, uts, uas, ip)
    VALUES ('$nama','$nim', '$kelas', '$semester', '$matkul','$tugas1','$tugas2','$tugas3','$tugas4','$uts', '$uas', '$ip')";
    if (mysqli_query($mysqli2, $sql)) {
    echo "New record created successfully";
    ?>
    <form action="ipkmhs.php" method="POST" style="text-align: center;">
    <a href="ipkmhs.php"><button type="button" class="btn btn-success">Lihat Data IP</button></a>
    </form>
    </div>
    <?php
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli2);
    }
    ?>

    <a href="submit.php" target="_BLANK">
            <script>
                window.print();
            </script>
        </a>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Jangan Lupa Liburan ! <br></strong>
        <?php
        $hariini = date("F j, Y");
        echo "Today : $hariini";

        $libur = date_create('2020-12-31');
        echo "<br> Weekend : December 30, 2020";
        $today = date_create();
        $diff = date_diff($libur, $today);
        echo '<br> D - ' . $diff->days . ' To Weekend';
        ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
</body>

</html>