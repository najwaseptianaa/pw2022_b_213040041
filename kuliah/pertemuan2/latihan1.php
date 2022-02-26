<?php 
// Pertemuan 2, belajar sintaks PHP

// NILAI
// angka (integer), tulisan (string), true/false (boolean)
echo 10; // integer
echo '<br>';
echo 'Najwa'; // string
echo '<br>';
echo false; // boolean null
echo '<hr>';

// VARIABEL
// Tempat menampung NILAI
// awali dengan tanda $
// boleh mengandung angka, tidak boleh diawali angka
// tidak boleh ada spasi
$nama_depan = 'Septiana';
echo $nama_depan;
echo '<hr>';

// STRING
// ' ', ""
$hari = "Jum'at";
echo $hari;
echo "<br>";
echo 'Najwa: "Hello, Semua!"';
echo '<br>';
// Escape Character
// \
echo 'Najawa: "Selamat hari Jum\'at"';
echo'<br>';
echo "Najwa: \"Selamat hari Jum'at\"";
echo '<br>';
// Interpolasi
// Mencetak langsung isi variabel
// hanya bisa oleh ""
echo "Halo, nama saya $nama_depan";
echo '<hr>';



// Concat / Penggabung String
// .
$nama_depan = 'Najwa';
$nama_belakang = 'Septiana';
echo $nama_depan . " " . $nama_belakang;
echo '<br>';
echo 'Najwa: "Selamat' . "hari Jum'at\"";
echo '<hr>';

// OPERATOR
// Aritmatika
// +, -, *, /, % (modulo / modulus / sisa bagi)
echo 1 + 1; // Hasil 1 + 1 adalah 2
echo '<br>';
echo 'Hasil dari 1 + 1 adalah ' . 1 + 1;
echo '<br>';
echo (1 + 2) * 3 - 4; // KaBaTaKu
echo 10 % 5;
echo '<hr>';
echo 1 + "1" + 1;
echo '<hr>';


// Perbandingan
// <, >, <=, ==, !=
echo 1 < 5;
echo '<br>';
echo 1 == 1;
echo '<hr>';

// Identitas / Strick Comparison
// ===, !==
echo 1 === "1";
echo '<hr>';

// Increment / Decrement
// tambah / kurang 1
// ++, --
$x = 10;
echo $x++;
echo '<br>';
echo $x;

?>