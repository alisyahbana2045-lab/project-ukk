<?php

include "includes/cek_session.php";
include "config/koneksi.php";

$nama_pengguna = $_SESSION['nama_pengguna'];
$peran = $_SESSION['peran'];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard SIPENJA</title>
</head>

<body>
    <h1>SIPENJA</h1>
    <p>
        Selamat datang,
        <b><?php echo $nama_pengguna; ?></b>
    </p>
    <p>
        Peran:
        <b><?php echo $peran; ?></b>
    </p>
    <hr>
    <h2>Menu</h2>
        <?php if ($peran == "Admin") { ?>
            <li>
                <a href="barang/data_barang.php">
                    Data Barang
                </a>
            </li>
            <li>
                <a href="pelanggan/data_pelanggan.php">
                    Data Pelanggan
                </a>
            </li>
        <?php } ?>
        <li>
            <a href="transaksi/transaksi.php">
                Transaksi
            </a>
        </li>
        <li>
            <a href="transaksi/riwayat_transaksi.php">
                Riwayat Transaksi
            </a>
        </li>
        <li>
            <a href="logout.php">
                Logout
            </a>
        </li>

</hr>

</body>
</html>