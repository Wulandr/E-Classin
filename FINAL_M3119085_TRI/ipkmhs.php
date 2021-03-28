<?php
    include("nav.php");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eclassin";
    $mysqli2 = mysqli_connect($servername, $username, $password, $dbname);
    $hasil = mysqli_query($mysqli2, "SELECT * FROM ipk ORDER BY id ASC");
    echo "<br><br>";
    ?>
    <p style="text-align: center;color:#063b61;font-size:large;margin-top:2cm;"><b>Data IP Mahasiswa</b></p>
    <div class="container">
    <table class="table table-bordered mt-4">
    <thead style="color: #fff; background-color: 	#F08080;">
    <tr>
    <th scope="col">Nama</th>
    <th scope="col">NIM</th>
    <th scope="col">Kelas</th>
    <th scope="col">Semester</th>
    <th scope="col">Mata kuliah</th>
    <th scope="col" style="width: 3cm;">Tugas 1</th>
    <th scope="col" style="width: 3cm;">Tugas 2</th>
    <th scope="col" style="width: 3cm;">Tugas 3</th>
    <th scope="col" style="width: 3cm;">Tugas 4</th>
    <th scope="col">UTS</th>
    <th scope="col">UAS</th>
    <th scope="col">IP</th>
    <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody style="background-color: #FDF5E6;">
        <?php
        while($res = mysqli_fetch_array($hasil)) {
            echo "<tr>";
            echo "<td>".$res['nama']."</td>";
            echo "<td>".$res['nim']."</td>";
            echo "<td>".$res['kelas']."</td>";
            echo "<td>".$res['semester']."</td>";
            echo "<td>".$res['matakuliah']."</td>";
            echo "<td>".$res['tugas1']."</td>";
            echo "<td>".$res['tugas2']."</td>";
            echo "<td>".$res['tugas3']."</td>";
            echo "<td>".$res['tugas4']."</td>";
            echo "<td>".$res['uts']."</td>";
            echo "<td>".$res['uas']."</td>";
            echo "<td>".number_format($res['ip'],2)."</td>";
            echo "<td><a
            href=\"hapusipk.php?id=$res[id]\" onClick=\"return confirm('Are you sure
            you want to delete?')\">Delete</a></td>";
            }
            //Total Nilai Tugas 1 Mahasiswa
            $hasil1 = mysqli_query($mysqli2, "SELECT tugas1 FROM ipk");
            $nilai1 = 0;
            $hit1 = 0;
            while($res1 = mysqli_fetch_array($hasil1)){
            $res1['tugas1']." ";
            $nilai1 += $res1['tugas1'];
            $hit1+=1;
            } 
            $rata1 = $nilai1/$hit1;

            //Total Nilai Tugas 2 Mahasiswa
            $hasil2 = mysqli_query($mysqli2, "SELECT tugas2 FROM ipk");
            $nilai2 = 0;
            $hit2 = 0;
            while($res2 = mysqli_fetch_array($hasil2)){
            $res2['tugas2']." ";
            $nilai2 += $res2['tugas2'];
            $hit2+=1;
            } 
            $rata2 = $nilai2/$hit2;

            //Total Nilai Tugas 3 Mahasiswa
            $hasil3 = mysqli_query($mysqli2, "SELECT tugas3 FROM ipk");
            $nilai3 = 0;
            $hit3 = 0;
            while($res3 = mysqli_fetch_array($hasil3)){
            $res3['tugas3']." ";
            $nilai3 += $res3['tugas3'];
            $hit3+=1;
            } 
            $rata3 = $nilai3/$hit3;

            //Total Nilai Tugas 4 Mahasiswa
            $hasil4 = mysqli_query($mysqli2, "SELECT tugas4 FROM ipk");
            $nilai4 = 0;
            $hit4 = 0;
            while($res4 = mysqli_fetch_array($hasil4)){
            $res4['tugas4']." ";
            $nilai4 += $res4['tugas4'];
            $hit4+=1;
            } 
            $rata4 = $nilai4/$hit4;

            //Total Nilai UTS Mahasiswa
            $hasiluts = mysqli_query($mysqli2, "SELECT uts FROM ipk");
            $nilaiuts = 0;
            $count = 0;
            while($res_uts = mysqli_fetch_array($hasiluts)){
            $res_uts['uts']." ";
            $nilaiuts += $res_uts['uts'];
            $count+=1;
            } 
            $ratauts = $nilaiuts/$count;

            //Total Nilai UAS Mahasiswa
            $hasiluas = mysqli_query($mysqli2, "SELECT uas FROM ipk");
            $nilaiuas = 0;
            $count2 = 0;
            while($res_uas = mysqli_fetch_array($hasiluas)){
            $res_uas['uas']." ";
            $nilaiuas += $res_uas['uas'];
            $count2+=1;
            } 
            $ratauas = $nilaiuas/$count2;

            //Total Nilai IP Mahasiswa
            $hasilip = mysqli_query($mysqli2, "SELECT ip FROM ipk");
            $nilaiip = 0;
            $count3 = 0;
            while($res_ip = mysqli_fetch_array($hasilip)){
            $res_ip['ip']." ";
            $nilaiip+= $res_ip['ip'];
            $count3+=1;
            } 
            $rataip = $nilaiip/$count3;


 
?>
    </tbody>
    <tr style="background-color:#FFA07A;">
      <th scope="row" colspan="5">Total</th>
      <!-- <td colspan="5">Larry the Bird</td> -->
      <td><?= $nilai1?></td>
      <td><?= $nilai2?></td>
      <td><?= $nilai3?></td>
      <td><?= $nilai4?></td>
      <td><?= $nilaiuts?></td>
      <td><?= $nilaiuas ?></td>
      <td><?= number_format($nilaiip,2) ?></td>
      <td></td>
    </tr>
    <tr style="background-color: #FA8072;">
      <th scope="row" colspan="5">Rata-Rata</th>
      <!-- <td colspan="5">Larry the Bird</td> -->
      <td><?= number_format($rata1,2) ?></td>
      <td><?= number_format($rata2,2) ?></td>
      <td><?= number_format($rata3,2) ?></td>
      <td><?= number_format($rata4,2) ?></td>
      <td><?= number_format($ratauts,2) ?></td>
      <td><?= number_format($ratauas,2) ?></td>
      <td><?= number_format($rataip,2)  ?></td>
      <td></td>
    </tr>
    </table>
    </div>
<br><br><br>
<?php
include('nav.php');
?>



    