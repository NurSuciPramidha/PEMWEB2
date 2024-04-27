<?php
// menghitung luas segitiga
function luas_segitiga($alas, $tinggi){
    $luas = $alas * $tinggi / 2;
    return "Hasil perhitungan luas: $luas";
}

// memanggil function
echo luas_segitiga(5, 8);