<?php

require_once './aksi/koneksi.php';

$perintah = "SELECT tb_nilai_mahasiswa.id as id, tb_mahasiswa.id as id_mahasiswa, tb_mahasiswa.nama_lengkap as nama_lengkap, nilai_akhir FROM `tb_nilai_mahasiswa` INNER JOIN tb_mahasiswa ON tb_mahasiswa.id = tb_nilai_mahasiswa.id_mahasiswa";
$result = $conn->query($perintah);
$no = 1;