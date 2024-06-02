<?php

session_start();

$cek1 = is_numeric($_POST["i1"]);
$cek2 = is_numeric($_POST["i2"]);

if ($cek1 != true || $cek2 != true) {
    header("Location: index.php?error=input angka salah, coba lagi !!");
}

if ($_POST["i_operator"] == "+") {
    $_SESSION["hasil"] = $_POST["i1"] + $_POST["i2"];
    header("Location: index.php");
    exit;
}
elseif ($_POST["i_operator"] == "-") {
    $_SESSION["hasil"] = $_POST["i1"] - $_POST["i2"];
    header("Location: index.php");
    exit;
}
elseif ($_POST["i_operator"] == "x") {
    $_SESSION["hasil"] = $_POST["i1"] * $_POST["i2"];
    header("Location: index.php");
    exit;
    
}
elseif ($_POST["i_operator"] == ":") {
    $_SESSION["hasil"] = $_POST["i1"] / $_POST["i2"];
    header("Location: index.php");
    exit;
}
else {
    header("Location: index.php?error=input operator salah, coba lagi !!");
}

?>