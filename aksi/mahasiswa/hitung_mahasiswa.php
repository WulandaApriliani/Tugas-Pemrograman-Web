<?php

require_once './aksi/koneksi.php';

$perintah = "SELECT COUNT(id) as jumlah FROM `tb_mahasiswa`";
$result = $conn->query($perintah);

$jumlah_mahasiswa = $result->num_rows > 0 ? $result->fetch_array() : ['jumlah' => '0'];
