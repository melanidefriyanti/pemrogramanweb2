<?php
    include "Melani.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Praktikum 2</h1>
    <div>
        <?php
            // proses instansiasi
            $mahasiswa = new Melani ('Melani Defri Yanti');

            // menggunakan setter dan getter
            $mahasiswa->setNama('Melani Defri Yanti');
            $mahasiswa->setTglLahir('2005-05-09');
            $mahasiswa->setAlamat('Murni, Kota Jambi');

            echo "<br>";
            echo "Data Mahasiswa ". $mahasiswa->getNama() . "<br>";
            echo "Nama : " . $mahasiswa->getNama() . "<br>";
            echo "Tgl Lahir : " . $mahasiswa->getTglLahir() . "<br>";
            echo "Alamat : " . $mahasiswa->getAlamat() . "<br>";

            

            // memanggil method
            $mahasiswa->ucapkanSalam();

            echo"<Br>";

            $mahasiswa2 = new Melani('Raynaldi');

            $mahasiswa2->ucapkanSalam();
        ?>
    </div>

</body>
</html>