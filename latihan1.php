<?php

// $mahasiswa = [
//     [
//         "nama" => "Rizki",
//         "nrp" => "043040023",
//         "email" => "Riz@gmail.com"
//     ],
//     [
//         "nama" => "Rizki",
//         "nrp" => "043040023",
//         "email" => "g@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=coba', 'root', '');
$db = $dbh->prepare('SELECT * FROM siswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>