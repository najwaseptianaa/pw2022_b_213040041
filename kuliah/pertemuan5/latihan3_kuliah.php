<?php

$mahasiswa = [
    ["Najwa Septiana", "213040041", "najwanajwasptn22@gmail.com", "Teknik Informatika"],
    ["Putri Legiani", "213040039", "legianiputri@gmail.com", "Teknik Informatika"],
    ["Aufa Husniati", "213040018", "aufahusniati@gmail.com", "Teknik Informatika"],
    ["Risma Rahmania", "213040013", "rismaima@gmail.com", "Teknik Informatika"]
];

?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?php echo $mhs[0] ?></li>
        <li>NPM : <?php echo $mhs[1] ?></li>
        <li>Email :<?php echo $mhs[2] ?></li>
        <li>Jurusan : <?php echo $mhs[3] ?></li>
    </ul>
<?php } ?>