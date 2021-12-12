<?php

require_once './aksi/koneksi.php';

$perintah = "SELECT COUNT(id) as jumlah FROM `tb_dosen`";
$result = $conn->query($perintah);

$jumlah_dosen = $result->num_rows > 0 ? $result->fetch_array() : ['jumlah' => '0'];
