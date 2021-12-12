<?php

require_once '../koneksi.php';

$id = $_GET['id'];

$id_mahasiswa = $_POST['id_mahasiswa'];
$nilai_akhir = $_POST['nilai_akhir'];

$perintah = "UPDATE `tb_nilai_mahasiswa` SET `id_mahasiswa` = '".$id_mahasiswa. "', `id_mahasiswa` = '".$id_mahasiswa."' WHERE `tb_nilai_mahasiswa`.`id` = " . $id;
echo $perintah;
if ($conn->query($perintah) === TRUE) {
    header("location: ../../nilai.php");
} else {
    header("location: ../../nilai.php");
}