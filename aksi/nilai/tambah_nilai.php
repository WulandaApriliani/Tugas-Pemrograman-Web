<?php

require_once '../koneksi.php';

$id_mahasiswa = $_POST['id_mahasiswa'];
$nilai_akhir = $_POST['nilai_akhir'];

$perintah = "INSERT INTO `tb_nilai_mahasiswa` (`id`, `id_mahasiswa`, `nilai_akhir`) VALUES (NULL, '$id_mahasiswa', '$nilai_akhir')";

if ($conn->query($perintah) === TRUE) {
    header("location: ../../nilai.php?status=SUCCESS");
} else {
    header("location: ../../nilai.php?status=FAILED");
}