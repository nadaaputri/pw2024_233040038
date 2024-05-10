<?php

function cetak_bintang($angka)
{
    $j = "*";

    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

echo cetak_bintang (3);