<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l,d-M-Y ");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1978
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,9,22,2003));

// strtotime
echo date("l", strtotime("22 September 2003"));
?>