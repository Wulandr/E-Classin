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
        <li class="nav-item">
          <a class="nav-link" href="#">
          <?php
          $array_hari = array(
            1 => "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"
          );
          $hari = $array_hari[date("N")];
          echo $hari . ",";
          ?>

          <?php
          $tanggal = date("d");
          echo $tanggal . " ";
          ?>

          <?php
          $array_bulan = array(
            1 => "Januari", "Februari", "Maret",
            "April", "Mei",
            "Juni", "Juli", "Agustus", "September", "Oktober",
            "November", "Desember"
          );
          $bulan = $array_bulan[date("n")];
          $year = date("Y");
          echo $bulan . " " . $year . "<br>";
          ?>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <br><br><br>
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="background-color: 	#F0FFFF;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="carousel-caption d-none d-md-block text-light">
        <h1>E-CLASSIN</h1>
        <p>Continue to grow as integrated digital company</p>
      </div>
      <img src="uns1.jpg" class="d-block w-100" alt="uns1.jpg">
      
    </div>
    <div class="carousel-item">
      <img src="uns2.jpg" class="d-block w-100" alt="uns2.jpg">
      <div class="carousel-caption d-none d-md-block">
        <h1>E-CLASSIN</h1>
        <p>Continue to grow as integrated digital company</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="uns3.jpg" class="d-block w-100" alt="uns3.jpg">
      <div class="carousel-caption d-none d-md-block">
        <h1>E-CLASSIN</h1>
        <p>Continue to grow as integrated digital company</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <div class="container-fluid px-lg-2" style="background-color: 	#F0FFFF;">
    <!-- <div class="container py-20 px-lg-18 border bg-light">
      <h1><?= strtoupper("e-classin"); ?></h1>
    </div> -->
    <br>
    <ul class="list-unstyled" style="background-color: 	#F0FFFF;">
  <li class="media">
    <img src="mhs.jpg" class="mr-3" alt="mhs.jpg" height="300" width="600">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Tips Belajar</h5>
      Banyak dari kita yang menghabiskan waktu untuk hal yang tidak bermanfaat [...]
    </div>
  </li>
  <li class="media my-4">
    <img src="mhs2.jpg" class="mr-3" alt="mhs2.jpg" height="300" width="600">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Cumlaude Saat Wisuda? Siapa Takut!</h5>
      Wisuda merupakan momen yang paling dinanti-nanti oleh semua mahasiswa [...]
      </div>
  </li>
  <li class="media">
    <img src="mhs3.jpg" class="mr-3" alt="mhs3.jpg" height="300" width="600">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Menyontek Bukan Hal Biasa!</h5>
      Katanya mau mencari ilmu, tetapi kenapa menyontek? 
      </div>
  </li>
</ul>
      <!-- <div class="container px-lg-5">
        <div class="row mx-lg-n5">
          <div class="col py-3 px-lg-5 border bg-light">Ilmu itu lebih berharga daripada harta. Ilmu menjagamu, harta melalaikanmu</div>
          <div class="col py-3 px-lg-2"> </div>
          <div class="col py-3 px-lg-5 border bg-light">Pintar saja tidak cukup, perlu integritas</div>
        </div>
      </div> -->
  </div>
  </div>
  
  <div class="position-bottom" style="background-color: #053a53;">
<div class="navbar text-white mb-7" style="max-width: 88rem; background-color: #053a53;">
  <div class="mx-auto" style="width: 100px;">Tri Wulandari</div>
</div>
  </div>
</body>
</html>