<?php

require_once '../koneksi.php';

$id = $_GET['id'];

$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];

$perintah = "UPDATE `tb_pegawai` SET `nama_lengkap` = '".$nama_lengkap. "', `email` = '".$email. "', `alamat` = '".$alamat. "', `jurusan` = '".$jurusan."', `tempat_tanggal_lahir` = '".$tempat_tanggal_lahir."' WHERE `tb_pegawai`.`id` = " . $id;
echo $perintah;
if ($conn->query($perintah) === TRUE) {
    header("location: ../../pegawai.php");
} else {
    header("location: ../../pegawai.php");
}