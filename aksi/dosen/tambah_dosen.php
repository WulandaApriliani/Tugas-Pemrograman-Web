<?php

require_once '../koneksi.php';

$nama = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$nidn = $_POST['nidn'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];

$perintah = "INSERT INTO `tb_dosen` (`id`, `nama_lengkap`, `email`, `jurusan`, `alamat`, `nidn`, `jenis_kelamin`, `no_hp`) VALUES (NULL, '$nama', '$email', '$alamat', '$jurusan', '$nidn', '$jenis_kelamin', '$no_hp')";

if ($conn->query($perintah) === TRUE) {
    header("location: ../../dosen.php");
} else {
    header("location: ../../dosen.php");
}