<?php 
// array assosiative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Najwa Septiana", 
        "npm" => "213040041", 
        "email" => "najwanajwasptn22@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/wawa.jpeg"
    ],

    [
        "nama" => "Putri Legiani", 
        "npm" =>"213040039", 
        "email" => "iilegip@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/mput.png"
    ],

    
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="<?= $mhs["gambar"]; ?>" width="100px">
             </li>
           
            <li>Nama: <?php echo $mhs["nama"]; ?> </li>
            <li>NPM: <?php echo $mhs["npm"]; ?> </li> 
            <li>Email: <?php echo $mhs["email"]; ?></li>
            <li>Jurusan: <?php echo $mhs["jurusan"]; ?></li>
        </ul>    
<?php endforeach; ?>          
       
</body>
</html>