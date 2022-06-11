<?php
// SUPERGLOBALS
// Variabel bawaan PHP yang bisa diakses dimanapun
// Bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER
// $_GET = ["nama" => 'Najwa', "email"=>"najwanajwasptn22@gmail.com"] ;
// $_GET["nama"] ="Najwa";
// $_GET["email"] ="najwanajwasptn22@gmail.com";
// var_dump($_GET);

?>

<!-- <h1>Halo, <?= $_GET["nama"]; ?></h1> -->

<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=Najwa&npm=213040041&email=najwanajwasptn22@gmail.com">Najwa</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Legi&npm=213040039&email=legi234@gmail.com">Legi</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Aufa&npm=213040018&email=aufaaupeh@gmail.com">Aufa</a>
    </li>

</ul>