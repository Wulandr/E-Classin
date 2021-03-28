<?php
    include('nav.php');
?>
<div class="container mt-4" style="margin-top: 8cm;">
<?php
    $servername = "localhost"; // atau ip address
    $username = "root";
    $password = "";
    $dbname = "eclassin";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $nim = $_POST['nim'];
    $ket = $_POST['ket'];

    echo "<br>";
    $sql = "INSERT INTO presensi (nim,keterangan) VALUES ('$nim', '$ket');";
    if (!mysqli_query($conn, $sql)) {
        ?>
        <button type="button" class="btn btn-success" style="margin-top: 8cm;">Berhasil Presensi
        </button>
        <?php
        } 
    
?>
</div>


