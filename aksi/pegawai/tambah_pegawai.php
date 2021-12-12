<?php

require_once '../koneksi.php';

$nama = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];

$perintah = "INSERT INTO `tb_pegawai` (`id`, `nama_lengkap`, `email`, `jurusan`, `alamat`, `tempat_tanggal_lahir`) VALUES (NULL, '$nama', '$email', '$alamat', '$jurusan', '$tempat_tanggal_lahir')";

if ($conn->query($perintah) === TRUE) {
    header("location: ../../pegawai.php");
} else {
    header("location: ../../pegawai.php");
}