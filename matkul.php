<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
</head>
<body>
    <?php
    include("nav.php");
    $matkul = [
        "955122001"=>"Pengantar TI",
        "955122101"=>"Praktikum Pengantar TI",
        "955121002"=>"Sistem Operasi",
        "955121102"=>"Prak Sistem Operasi",
        "955122003	"=>"Algoritma & Pemrograman Dasar",
        "955122103"=>"Prak Algoritma & Pemrograman Dasar",
        "955131004"=>"Mikrokontroller I",
        "955131104"=>"Prak Mikrokontroller I",
        "955122005"=>"Matematika TI",
        "955121106"=>"Komputasi Matematika",
        "955152007"=>"Bahasa Inggris TI",
        "955112008"=>"Pendidikan Agama",
        "955112009"=>"Pancasila",
    ];
    ?>
    <br><br><br><br>
    <p style="text-align: center;color:#063b61;font-size:large;"><b>Mata Kuliah D3 Teknik Informatika</b></p>
    <div class="container">
    <table border="0" width="90" class="table" style="background-color:#fee;" >
        <tr style="background-color: #116787; color:#fff">
            <td>Kode</td>
            <td>Mata Kuliah</td>
        </tr>
        <?php
        foreach($matkul as $matkul => $indek){?>
            <tr>
                <td><?= $matkul ?></td>
                <td><?= $indek ?></td>
            </tr>
            
        <?php
        }
        ?>
    </table>
    </div>
    <?php
    include("nav.php");
    ?>
</body>
</html>