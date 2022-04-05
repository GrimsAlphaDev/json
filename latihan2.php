<?php

$data = file_get_contents('coba.json');
$mahasiswa = json_decode($data, true);

var_dump($mahasiswa);
echo "<br><br>";
echo $mahasiswa[0]['pembimbing']['pembimbing1'];
?>