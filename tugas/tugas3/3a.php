<?php
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r)
{
    $phi = 3.14;

    echo "Jari-jari lingkaran: $r cm <br>";
    return "Luas lingkaran = " . $phi * $r * $r . "cm<sup>2</sup> <br>";
}

echo hitungLuasLingkaran(10);
echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r)
{
    $phi = 3.14;

    echo "Jari-jari lingkaran: $r cm <br>";
    return "Keliling lingkaran = " . 2 * $phi * $r . "cm <br>";
}

echo hitungKelilingLingkaran(20);
echo "<hr>";
