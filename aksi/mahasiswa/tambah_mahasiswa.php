<?php

require_once '../koneksi.php';

$nama = $_POST['nama_lengkap'];
$email = $_POST['email'];
$jurusan = $_POST['jurusan'];
$npm = $_POST['npm'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

$perintah = "INSERT INTO `tb_mahasiswa` (`id`, `nama_lengkap`, `email`, `jurusan`, `npm`, `jenis_kelamin`, `no_hp`, `alamat`) VALUES (NULL, '$nama', '$email', '$jurusan', '$npm', '$jenis_kelamin', '$no_hp', '$alamat')";

if ($conn->query($perintah) === TRUE) {
    header("location: ../../mahasiswa.php");
} else {
    header("location: ../../mahasiswa.php");
}