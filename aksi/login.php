<?php

require_once './koneksi.php';

session_start();

if (isset($_SESSION['username'])) {
    header("Location: ../dashboard.php");
}

$email = $_POST['email'];
$password = $_POST['password'];

$perintah = "SELECT * FROM tb_user WHERE email='$email' AND password='$password'";
$result = $conn->query($perintah);

$loginResult = $result->num_rows > 0 ? ['status' => 'SUCCESS'] : ['status' => 'FAILED'];

if($loginResult['status'] == 'SUCCESS') {
    $row = $result->fetch_array();
    $_SESSION['username'] = $row['username'];
    $_SESSION['jabatan'] = $row['jabatan'];
    header("location: ../dashboard.php");
}
else header("location: ../log_in.php?status=FAILED");