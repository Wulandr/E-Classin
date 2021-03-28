<?php
    include("koneksi.php");
    $id = $_GET['id'];
    $result = mysqli_query($mysqli,"DELETE FROM ipk WHERE id=$id");
    header("Location:ipkmhs.php");
?>