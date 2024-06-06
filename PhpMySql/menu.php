<?php

require_once "getConnection.php";

function menu()
{
    $connection = getConnection();

    echo PHP_EOL . "SELAMAT DATANG di tabel siswa, default database : " . $GLOBALS["database"] . PHP_EOL;

    do {
        echo <<<query

        list program siswa :

        edit
        list
        tambah
        hapus
        \q
    
        pilih program : 
        query;
        $input = trim(fgets(STDIN));

        switch ($input) {
            case "tambah":
                echo "nama = ";
                $inputNama = $connection->quote(trim(fgets(STDIN)));
                echo "jurusan = ";
                $inputJurusan = $connection->quote(trim(fgets(STDIN)));
                $inputJurusan = strtoupper($inputJurusan);
                echo "kelas = ";
                $inputKelas = $connection->quote(trim(fgets(STDIN)));
                $connection->query("INSERT INTO listSiswa VALUES ('', $inputNama, $inputJurusan, $inputKelas);");
                break;

            case "hapus":
                echo "hapus data siswa dengan id = ";
                $inputId = $connection->quote(trim(fgets(STDIN)));
                $connection->query("DELETE FROM listSiswa WHERE id = '$inputId';");
                break;

            case "list":
                $queryAmbilSemuaData = "SELECT * FROM listSiswa;";
                $statement = $connection->query($queryAmbilSemuaData);
                echo PHP_EOL . "list siswa : " . PHP_EOL;

                $i = 1;
                foreach ($statement as $row) {
                    $id = $row["id"];
                    $nama = $row["nama"];
                    $jurusan = $row["jurusan"];
                    $kelas = $row["kelas"];
                    
                    echo <<<STR

                     
                    NO.$i --->>>
                    |  id = $id
                    |---
                    |  nama = $nama
                    |----
                    |  jurusan = $jurusan
                    |------
                    |  kelas = $kelas
                    ---------<<<
                    
                    STR;
                    $i++;
                }
                break;
            
            case "edit" :
                // belum selesai
                break;

            case "\q":
                echo "bye bye ~ " . PHP_EOL;
                break;

        }

    } while ($input != "\q");

    $connection = null;
}
