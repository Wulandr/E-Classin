<?php
    include('nav.php');
    $servername = "localhost"; // atau ip address
    $username = "root";
    $password = "";
    $dbname = "eclassin";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    echo "<br>";
    $presensi = mysqli_query($conn, "SELECT * FROM presensi ORDER BY id ASC");
    ?>
    <p style="text-align: center;color:#063b61;font-size:large;margin-top:2cm;"><b>Data Presensi Mahasiswa</b></p>
    <div class="container" style="text-align: center;">
    <table class="table mt-4" style="text-align: center;">
    <thead style="color: #fff; background-color: #063b61;">
    <tr>
    <th scope="col">NIM</th>
    <th scope="col">keterangan</th>
    </tr>
    </thead>
    <tbody style="background-color: #ddd; color:black;">
        <?php
        while($res = mysqli_fetch_array($presensi)) {
            echo "<tr>";
            echo "<td>".$res['nim']."</td>";
            echo "<td>".$res['keterangan']."</td>";
            }  
?>
</tbody>
</table>