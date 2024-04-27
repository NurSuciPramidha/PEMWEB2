<?php
// array indexing
$mhs1 = ['0110123031', 'Nur Suci Pramidha', 'Sistem Informasi', [3.5, 3.7, 4.0]];

// panggil array
echo 'Nama: ' . $mhs1 [1] . '<br>'; // kokatenasi string (penggabungan dua string)
echo "NIM: $mhs1[0] <br>"; // string interpolation (kutip dua dapat memanggil variable seperti ini)
echo "IPS semester 1: " . $mhs1[3][0]; // memanggil array dapat menggunakan dua kurung kotak