<?php
include("koneksi.php");
include("nav.php");

if(isset($_POST['update'])) {
$id = mysqli_real_escape_string($mysqli,$_POST['id']);
 $nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
 $nim = mysqli_real_escape_string($mysqli, $_POST['nim']);
 $jurusan = mysqli_real_escape_string($mysqli, $_POST['jurusan']);
 $email = mysqli_real_escape_string($mysqli, $_POST['email']);

 // checking empty fields
 if(empty($nama) || empty($nim) || empty($jurusan) ||
empty($email)) {

 if(empty($nama)) {
 echo "<font color='red'>Nama masih belum
diisi</font><br/>";
 }

 if(empty($nim)) {
 echo "<font color='red'>NIM masih belum diisi</font><br/>";
 }

 if(empty($jurusan)) {
 echo "<font color='red'>Jurusan masih belum
diisi</font><br/>";
 }

 if(empty($email)) {
 echo "<font color='red'>Nama masih belum
diisi</font><br/>";
 }

 //link to the previous page
 echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
 } else {
 // if all the fields are filled (not empty)

//updating the table
$result = mysqli_query(
  $mysqli,
  "UPDATE mahasiswa SET nama='$nama',nim='$nim',
 jurusan='$jurusan', email='$email' WHERE id=$id"
  );
 
  //redirectig to the display page. In our case, it is index.php
  header("Location: index.php");
 }
}


//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE
id=$id");
while ($res = mysqli_fetch_array($result)) {
 $nama = $res['nama'];
 $nim = $res['nim'];
 $jurusan = $res['jurusan'];
 $email = $res['email'];
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data Akademik</title>
  </head>
  <body>
  <div class="container mt-4" style="margin-top: 10cm;">
    
    <form class="col-4" method="post" action="editmhs.php" name="form1">
<div class="form-group" style="margin-top: 3cm;">
<h3>Form Edit Data</h3>
<br>
<label for="nama">Nama</label>
<input style="background-color:#B0E0E6;" type="nama" class="form-control"
name="nama" value="<?php echo $nama;?>">
</div>
<div class="form-group">
<label for="nim">NIM</label>
<input style="background-color:#B0E0E6;" type="nim" class="form-control" name="nim"
value="<?php echo $nim;?>">
</div>
<div class="form-group">
<label for="jurusan">Jurusan</label>
<input style="background-color:#B0E0E6;" type="jurusan" class="form-control"
name="jurusan" value="<?php echo $jurusan;?>">
 </div>
 <div class="form-group">
 <label for="email">Email</label>
 <input style="background-color:#B0E0E6;" type="email" class="form-control"
name="email" value="<?php echo $email;?>">
 </div>
 <input type="hidden" name="id" value=<?php echo
$_GET['id'];?>>
 <button type="submit" name="update" class="btn
btn" style="background-color:#4682B4;color:white">Update</button>
 </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>
