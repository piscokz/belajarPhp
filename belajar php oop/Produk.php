<?php

class Produk {

    public
    $Judul,
    $Penerbit,
    $Penulis,
    $Harga,
    $Tipe;


    public function __construct($Judul = "Judul", $Penerbit  = "penerbit", $Penulis = "penulis", $Harga = 0, $Tipe = 0){
        $this->Judul = $Judul;
        $this->Penulis = $Penulis;
        $this->Penerbit = $Penerbit;
        $this->Harga = $Harga;
        $this->Tipe = $Tipe;
    }
}

class Komik extends Produk{
    function GetInfo(){
        $Info = "Komik : $this->Judul | $this->Penulis, $this->Penerbit | Rp.$this->Harga | $this->Tipe Halaman";
        return $Info;
    }
}
class Game extends Produk{
    function GetInfo(){
        $Info = "Game : $this->Judul | $this->Penulis, $this->Penerbit | Rp.$this->Harga | Waktu main : $this->Tipe menit";
        return $Info;
    }
}
