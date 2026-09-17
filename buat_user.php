<?php

include "config/koneksi.php";

$password = password_hash("admin123", PASSWORD_DEFAULT);

$query = mysqli_query($koneksi, "INSERT INTO pengguna (nama_pengguna, email, password, peran) VALUES 
('Administrator', 'admin@sipenja.com', '$password', 'Admin')");

if ($query) {
    echo "Akun admin berhasil dibuat.";
} else {
    echo "Gagal membuat akun: " . mysqli_error($koneksi);
}

?>