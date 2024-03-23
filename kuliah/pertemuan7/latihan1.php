<?php
// variabel scope / lingkup variabel
$x = 10;

function tampilX()
{
    global $x;
    echo $x;
}

tampilX();
echo "<hr>";

// superglobals
// variabel global milik PHP
// merupakan array associative

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
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?gambar=<?= $mhs["gambar"]; ?>&nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>