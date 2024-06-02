<?php 

function cetak($produk) {
    echo PHP_EOL . $produk;
}
require_once "Produk.php";

echo  PHP_EOL . "jenis : 1(komik) / 2(game)" . PHP_EOL;

$Komik1 = new Komik ("naruto","masashi yamamoto","piscok media",125_000,20);
$Game1 = new Game ("The detroit : become human","Arthur","Sony",800_000,1200);


cetak($Komik1->GetInfo());
cetak($Game1->GetInfo());
?>