<?php
session_start();

if (isset($_SESSION['id_pengguna'])) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login SIPENJA</title>
</head>

<body>

    <h1>Login SIPENJA</h1>

    <?php if (isset($_GET['error'])) { ?>
        <p>Email atau password salah!</p>
    <?php } ?>

    <form action="proses_login.php" method="POST">

        <label>Email</label><br>
        <input type="email" name="email" required>

        <br><br>

        <label>Password</label><br>
        <input type="password" name="password" required>

        <br><br>

        <button type="submit">Login</button>

    </form>

</body>
</html>