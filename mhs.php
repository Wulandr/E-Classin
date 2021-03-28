<!-- DAFTAR MAHASISWA -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>
<body>
    <?php
        include("koneksi.php");
        include("nav.php");  
    ?>
    <br><br><br><br>
    <p style="text-align: center;color:#063b61;font-size:large;"><b>Data Mahasiswa D3 Teknik Informatika</b></p>
    <div class="container mt-4">
    <form class="form-inline my-2 my-lg-0" action="mhs.php"
    method="get">
    <input class="mb-1 form-control mr-sm-2 mt-4"
    type="search"
    placeholder="Search by name" aria-label="Search"
    name="cari">
    <button class="mb-1 btn btn-outline-success mt-4"
    type="submit">Search</button>
    </form>
    <br>
    </div>
    <div class="container">
    <table class="table mt-4">
    <thead style="color: #116787; background-color: #fcd;">
    <tr>
    <th scope="col">Nama</th>
    <th scope="col">NIM</th>
    <th scope="col">Jurusan</th>
    <th scope="col">Email</th>
    <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody style="background-color: #fef;">

    <?php
    if(isset($_GET['cari'])){
    $cari = $_GET['cari'];

    $result = mysqli_query($mysqli, "SELECT * FROM mahasiswa
    WHERE nama like '%".$cari."%'
    OR jurusan LIKE '%".$cari."%'
    ");
    }else{
    $result = mysqli_query($mysqli, "SELECT * FROM mahasiswa
    ORDER BY id ASC");
    }

    while($res = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$res['nama']."</td>";
    echo "<td>".$res['nim']."</td>";
    echo "<td>".$res['jurusan']."</td>";
    echo "<td>".$res['email']."</td>";
    echo "<td><a href=\"editmhs.php?id=$res[id]\">Edit</a> | <a
    href=\"hapusmhs.php?id=$res[id]\" onClick=\"return confirm('Are you sure
    you want to delete?')\">Delete</a></td>";
    }
    ?>
    </tbody>
    </table>

    <!-- Mencetak seluruh data (print) -->
    <form class="form-inline my-2 my-lg-0" action="cetak.php" target="_blank" method="get">
    <input class="form-control mr-sm-2 mt-4" type="hidden" name="cari" value="<?php echo $cari; ?>">
    <button class="btn mt-4" type="submit" name="export" style="color: #116787; background-color: #fcd;">Export to PDF</button>
    </form>
    </div>
    <br><br><br><br><br><br>
    <?php
    include("nav.php");
    ?>
</body>
</html>