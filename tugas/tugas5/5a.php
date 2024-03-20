<?php
$mahasiswa = [
    [
        "nama" => "Nada Putri Aqilah Rukanda",
        "nrp" => "233040038",
        "email" => "putriaqilah05@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nada.jpg"
    ],
    [
        "nama" => "Chalida Rahma Listy Hidayat",
        "nrp" => "233040046",
        "email" => "chalidarlh@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "chalida.jpg"
    ],
    [
        "nama" => "Haifa Zahirah Ramdhan",
        "nrp" => "233040051",
        "email" => "haifazahirahr5@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "haifa.jpg"
    ],
    [
        "nama" => "Nurfatimah",
        "nrp" => "233040074",
        "email" => "nurfatimahhh1603z@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nurfatimah.jpg"
    ],
    [
        "nama" => "Reza Nurjaman",
        "nrp" => "233040071",
        "email" => "rezanurjaman@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "reza.jpg"
    ],
    [
        "nama" => "Faizal Akbar Budiansyah",
        "nrp" => "233040156",
        "email" => "faizalakbarbudiansyah@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "faizal.jpg"
    ],
    [
        "nama" => "Lisna Nurhaliza",
        "nrp" => "233010053",
        "email" => "lisnanrhlz2@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "lisna.jpg"
    ],
    [
        "nama" => "Andien Anastasya Salsabilla",
        "nrp" => "233020038",
        "email" => "andien.anastasya.aa@gmail.com",
        "jurusan" => "Teknologi Pangan",
        "gambar" => "andien.jpg"
    ],
    [
        "nama" => "Tazqia Nasywa Nabilah",
        "nrp" => "23060137",
        "email" => "tazqianaswa1@gmail.com",
        "jurusan" => "PGSD",
        "gambar" => "tazqia.jpg"
    ],
    [
        "nama" => "Gina Amallia",
        "nrp" => "1223B0015",
        "email" => "amalliag03@gmail.com",
        "jurusan" => "Keperawatan",
        "gambar" => "gina.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>

        </ul>
    <?php endforeach; ?>
</body>

</html>