<?php

require_once '../koneksi.php';

$id = $_GET['id'];

$perintah = "DELETE FROM `tb_dosen` WHERE `tb_dosen`.`id` = " . $id;

if ($conn->query($perintah) === TRUE) {
    header("location: ../../dosen.php");
} else {
    header("location: ../../dosen.php");
}