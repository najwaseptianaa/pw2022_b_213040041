<?php
// Definisikan masing-masing sisi kubus
$a = 9;
$b = 4;

// hitung masing-masing sisi kubus
$volume_a = pow($a, 3);
$volume_b = pow($b, 3);

// hitung total 2 volume
$total = $volume_a + $volume_b;

// kembalikan nilai total
echo "Jumlah dari volume kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";

echo "<hr>";

// Dekralasi / definisi function
function totalVolumeDuaKubus($a, $b) {
    $volume_a = pow($a, 3);
    $volume_b = pow($b, 3);

    $total = $volume_a + $volume_b;

    return "Jumlah dari volume kubus dengan sisi $a dan kubus dengan sisi $b adalah $total";
} 

// pemnggilan / eksekusi function
echo totalVolumeDuaKubus(9,4);
echo "<br>";
echo totalVolumeDuaKubus(10,20);
echo "<br>";
echo totalVolumeDuaKubus(5,6);

echo "<hr>";

// buat sebuah fungsi untuk menghitung luas segitiga

echo luasSegitiga(2,4);
//Luas segi tiga dengan alas 2 dan tinggi 4 adalah 4
function luasSegitiga($alas, $tinggi) {
    return "Luas segi tiga dengan alas $alas dan tinggi $tinggi adalah 0.5 * $alas * $tinggi";
    
}

?>