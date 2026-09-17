<?php

session_start();

include "config/koneksi.php";

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM pengguna WHERE email = '$email' LIMIT 1"
);

$data = mysqli_fetch_assoc($query);

if ($data) {

    if (password_verify($password, $data['password'])) {

        $_SESSION['id_pengguna'] = $data['id_pengguna'];
        $_SESSION['nama_pengguna'] = $data['nama_pengguna'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['peran'] = $data['peran'];

        header("Location: dashboard.php");
        exit;

    } else {

        header("Location: login.php?error=1");
        exit;

    }

} else {

    header("Location: login.php?error=1");
    exit;

}

?>