<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Konsep Pewarisan</h1>
    <div  class="" style="font-size: 45px;">
        <?php
            include_once "OrangBiasa.php";
            include_once "OrangInggris.php";
            include_once "Mahasiswa.php";

            $ences = new OrangBiasa("ences");
            $ences->ucapSalam();
            echo "<br>";

            $umi = new OrangInggris('umi');
            $umi->ucapSalam(); //override
            echo "<br>";

            $bubub = new Mahasiswa("bubub");
            $bubub->ucapSalam();
            echo "<br>";
            $bubub->setNim("701230034");
            $bubub->setProdi("Sistem Informasi");

            $nilaiBubub = new Nilai();
            $nilaiBubub->setTugas(90);
            $nilaiBubub->setUts(76);
            $nilaiBubub->setUas(78);
        
            $bubub->setNilai($nilaiBubub);
            $bubub->tampilkanData();
        ?>
    </div>
</body>
</html>