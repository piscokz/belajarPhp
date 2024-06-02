<?php

session_start();

if (!isset($_SESSION["hasil"])) {
    $_SESSION["hasil"] = 0;
} else if (isset($_POST["reset"])) {
    $_SESSION["hasil"] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator - index</title>
    
</head>

<body>
    <?php if (isset($_GET["error"])) { ?>
        <h2>WARNING :
            <?= $_GET["error"] ?>
        </h2>
        <hr>
    <?php } ?>
    <h1>selamat datang di web kalkulator</h1>
    <fieldset>
        <legend>
            <h2>aritmatika</h2>
        </legend>
        <form action="operasi.php" method="POST">
            <?php if (!isset($_POST["submit_lagi"])) { ?>
                <p>
                    <label for="i1">masukkan angka ke-1 :</label>
                    <input id="i1" name="i1" type="text" placeholder="masukkan angka .." required>
                </p>
            <?php } else { ?>
                <p><label for="i1">jumlah sebelumnya : /label>
                        <input id="i1" name="i1" type="text" placeholder="<?= $_SESSION["hasil"] ?>"
                            value="<?= $_SESSION["hasil"] ?>">
                </p>
            <?php } ?>
            <p>
                <label for="i1">masukkan operator :</label>
                <input id="i_operator" name="i_operator" type="text" placeholder="+ / - / : / x" required>
            </p>
            <p>
                <label for="i2">masukkan angka ke-2 :</label>
                <input id="i2" name="i2" type="text" placeholder="masukkan angka .." required>
            </p>
            <p>
                <button type="submit" name="submit">jumlahkan</button>
            </p>
        </form>
        <h2>hasilnya adalah :
            <?= $_SESSION["hasil"] ?>
        </h2>
        <form action="index.php" method="POST" class="bawah">
            <button type="submit" name="submit_lagi">tambahkan penjumlahan</button>
            <button type="submit" name="reset">reset jumlah</button>
        </form>

    </fieldset>