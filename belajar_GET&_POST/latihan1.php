<?php 

$data_siswa_lb = [
    [
        "nama" => "muhammad fariyd",
        "kelas" => "kelas 10",
        "jurusan" => "RPL"
    ],
    [
        "nama" => "rafie seno ramadhan",
        "kelas" => "kelas 10",
        "jurusan" => "RPL"
    ],
    [
        "nama" => "natanael",
        "kelas" => "kelas 10",
        "jurusan" => "TKRO"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar GET pada PHP - 1 </title>
</head>
<body>
    <h1>data siswa lentera bangsa</h1>
    <ol>
        <?php foreach($data_siswa_lb as $lb) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $lb["nama"];?>&kelas=<?=$lb["kelas"];?>&jurusan=<?= $lb["jurusan"];?>"> <?= $lb["nama"]; ?></a>
            </li>
        <?php endforeach ?>
    </ol>
    <a href="../">kembali</a>
</body>
</html>