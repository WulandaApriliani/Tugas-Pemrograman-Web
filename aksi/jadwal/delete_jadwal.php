<?php

require_once '../koneksi.php';

$id = $_GET['id'];

$perintah = "DELETE FROM `tb_jadwal_kuliah` WHERE `id` = " . $id;

if ($conn->query($perintah) === TRUE) {
    header("location: ../../jadwal.php?status=SUCCESS");
} else {
    header("location: ../../jadwal.php?status=FAILED");
}