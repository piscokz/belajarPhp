<?php 
if (!isset($_GET["nama"])||
    !isset($_GET["kelas"]) ||
    !isset($_GET["jurusan"])) {
        header("Location: latihan1.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar GET pada PHP - 2 </title>
</head>
<body>
    <h1>biodata <?= $_GET["nama"]; ?></h1>
    <ul>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["kelas"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>
    <a href="latihan1.php">kembali ke latihan1.php</a>
</body>
</html>