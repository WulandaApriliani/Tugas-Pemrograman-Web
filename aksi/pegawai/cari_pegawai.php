<?php

require_once 'aksi/koneksi.php';

$id = $_GET['id'];

$perintah = "SELECT * FROM tb_pegawai WHERE id = " . $id;
$result = $conn->query($perintah);