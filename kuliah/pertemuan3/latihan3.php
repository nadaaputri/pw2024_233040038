<?php

// pengulangan
// while(kondisi true/false) { aksi }


echo "Mulai <br>";

$nilaiAwal = 1;

while ($nilaiAwal <= 10) {
    echo "Hello World $nilaiAwal x! <br>";
    $nilaiAwal = $nilaiAwal + 1;
    // pengulangan 1x = $nilaiAwal++
}
echo "Selesai <br>";

// for
echo "<hr>";
echo "Mulai <br>";
for ($i = 10; $i >= 1; $i--) {
    echo "Hello World $i x! <br>";
}
echo "Selesai";
