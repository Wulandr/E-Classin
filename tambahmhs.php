<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php
include("koneksi.php");
if(isset($_POST['Submit'])) {
 $nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
 $nim = mysqli_real_escape_string($mysqli, $_POST['nim']);
 $jurusan = mysqli_real_escape_string($mysqli, $_POST['jurusan']);
 $email = mysqli_real_escape_string($mysqli, $_POST['email']);

 //insert data to database
 $result = mysqli_query($mysqli, "INSERT INTO
mahasiswa(NAMA, NIM, JURUSAN, EMAIL)
VALUES('$nama','$nim','$jurusan', '$email')");
}
include("mhs.php");
?>

</body>
</html>