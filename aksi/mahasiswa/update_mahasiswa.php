<?php

require_once '../koneksi.php';

$id = $_GET['id'];

$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$npm = $_POST['npm'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];

$perintah = "UPDATE `tb_mahasiswa` SET `nama_lengkap` = '".$nama_lengkap. "', `email` = '".$email. "', `alamat` = '".$alamat. "', `jurusan` = '".$jurusan."', `npm` = '".$npm."', `jenis_kelamin` = '".$jenis_kelamin."', `no_hp` = '".$no_hp."' WHERE `tb_mahasiswa`.`id` = " . $id;
echo $perintah;
if ($conn->query($perintah) === TRUE) {
    header("location: ../../mahasiswa.php");
} else {
    header("location: ../../mahasiswa.php");
}