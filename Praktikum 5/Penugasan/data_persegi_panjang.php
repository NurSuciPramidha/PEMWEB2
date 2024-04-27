<?php
require_once('class_persegi_panjang.php');

$persegiPanjang = new PersegiPanjang(10, 5);

echo "Panjang: " . $persegiPanjang->getPanjang() . "<br>";
echo "Lebar: " . $persegiPanjang->getLebar() . "<br>";
echo "Luas: " . $persegiPanjang->hitungLuas() . "<br>";
echo "Keliling: " . $persegiPanjang->hitungKeliling() . "<br>";