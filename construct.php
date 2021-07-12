<?php

class Produk
{
    public $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->$penulis = $penulis;
        $this->$penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getProduk()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }

    public function print()
    {
        return $this->judul;
    }
}

$produk1 = new Produk("Perahu Kertas", "Nomar", "Gramedia", 10000);
$produk2 = new Produk("The Expandible", "Budi", "MD Entertainment", 20000);
echo $produk1->getProduk();
