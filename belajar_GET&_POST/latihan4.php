<?php 
if ( !isset($_POST["nama"]) ) {
        header("Location: latihan3.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar POST pada PHP -4  </title>
</head>
<body>
    <h1>halo <?= $_POST["nama"] ?></h1>
</body>
</html>