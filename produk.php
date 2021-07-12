<?php

class Produk
{
    public $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0;
    public function sayHello()
    {
        return "Hello World";
    }

    public function print()
    {
        return $this->judul;
    }
}

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Mashashi Khisimoto";
$produk3->penerbit = "Jump Shonen";
$produk3->harga = 30000;

// var_dump($produk3);
echo "<br oekeeeeee>";
echo $produk3->sayHello();
echo $produk3->print();
