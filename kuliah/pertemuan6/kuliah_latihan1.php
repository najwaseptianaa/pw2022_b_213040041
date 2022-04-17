<?php
// Array Associative

// Array yang indexnya berupa string, yang berpasangan dengan nilainya

$mahasiswa = [
    [
        "nama" => "Najwa Septiana", 
        "npm" => "213040041",
        "email" => "najwanajwasptn22@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Putri Legiani", 
        "npm" => "213040039", 
        "email" => "legianiputri@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Aufa Husniati", 
        "npm" => "213040018", 
        "email"=> "aufahusniati@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],

];


// var_dump($mahasiswa[3]["nilai_tugas"][1]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NPM : <?php echo $mhs["npm"]; ?></li>
        <li>Email : <?php echo $mhs["email"]; ?></li>
        <li>Jurusan: <?php echo $mhs["jurusan"]; ?></li>
    </ul>

    <?php } ?>

