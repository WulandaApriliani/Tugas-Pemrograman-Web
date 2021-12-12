<?php

require_once './aksi/koneksi.php';

$perintah = "SELECT tb_jadwal_kuliah.id as id, tb_dosen.id as id_dosen, mata_kuliah, sks, nama_lengkap, ruang, hari, waktu  FROM `tb_jadwal_kuliah` INNER JOIN tb_dosen ON tb_dosen.id = tb_jadwal_kuliah.id_dosen";
$result = $conn->query($perintah);
$no = 1;