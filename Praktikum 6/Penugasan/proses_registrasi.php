<?php
// tangkap input form registrasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skills = $_POST['skills'] ?? [];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

$nilai_skills = [
    'HTML' => 10,
    'CSS' => 10,
    'Javascript' => 20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50,
];

$skor_skill = 0;
foreach ($skills as $value) {
    $skor_skill += $nilai_skills[$value];
}

// kategori skill
if($skor_skill == 0 ) {
    $predikat = "Tidak Memadai";
} else if($skor_skill >= 0 && $skor_skill <=40) {
    $predikat = "Kurang";
} else if($skor_skill >= 40 && $skor_skill <=60) {
    $predikat = "Cukup";
} else if($skor_skill >= 60 && $skor_skill <=100) {
    $predikat = "Baik";
} else {
    $predikat = "Sangat Baik";
}


// tampilakan hasil form
echo "NIM : $nim";
echo "<br>Nama Lengkap : $nama";
echo "<br>Jenis Kelamin : $jk";
echo "<br>Program Studi : $prodi";
echo "<br>Skill : " .  join(', ', $skills);
echo "<br>Asal Domisili : $domisili";
echo "<br>Email : $email";
echo "<br>Skor Skill : $skor_skill";
echo "<br>Kategori Skill : $predikat";