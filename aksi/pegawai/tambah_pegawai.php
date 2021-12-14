<?php

require_once '../koneksi.php';

$nama = $_POST['nama_lengkap'];
$email = $_POST['email'];
$tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

$perintah = "INSERT INTO `tb_pegawai` (`id`, `nama_lengkap`, `email`, `tempat_tanggal_lahir`, `jurusan`, `alamat`) VALUES (NULL, '$nama', '$email', '$tempat_tanggal_lahir', '$jurusan', '$alamat')";

if ($conn->query($perintah) === TRUE) {
    header("location: ../../pegawai.php");
} else {
    header("location: ../../pegawai.php");
}