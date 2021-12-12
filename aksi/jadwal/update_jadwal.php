<?php

require_once '../koneksi.php';

$id = $_GET['id'];

$mata_kuliah = $_POST['mata_kuliah'];
$sks = $_POST['sks'];
$id_dosen = $_POST['id_dosen'];
$ruang = $_POST['ruang'];
$hari = $_POST['hari'];
$waktu = $_POST['waktu'];

$perintah = "UPDATE `tb_jadwal_kuliah` SET `mata_kuliah` = '".$mata_kuliah. "', `sks` = '".$sks. "', `id_dosen` = '".$id_dosen. "', `ruang` = '".$ruang."', `hari` = '".$hari."', `waktu` = '".$waktu."' WHERE `id` = " . $id;

if ($conn->query($perintah) === TRUE) {
    header("location: ../../jadwal.php?status=SUCCESS");
} else {
    header("location: ../../jadwal.php?status=FAILED");
}