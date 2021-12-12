<?php

require_once '../koneksi.php';

$mata_kuliah = $_POST['mata_kuliah'];
$sks = $_POST['sks'];
$id_dosen = $_POST['id_dosen'];
$ruang = $_POST['ruang'];
$hari = $_POST['hari'];
$waktu = $_POST['waktu'];

$perintah = "INSERT INTO `tb_jadwal_kuliah` VALUES (NULL, '".$mata_kuliah."', ".$sks.", ".$id_dosen.", '".$ruang."', '".$hari."', '".$waktu."')";

if ($conn->query($perintah) === TRUE) {
    header("location: ../../jadwal.php?status=SUCCESS");
} else {
    header("location: ../../jadwal.php?status=FAILED");
}