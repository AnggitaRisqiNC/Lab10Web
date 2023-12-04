<?php
/**
* Program sederhana pendefinisian class dan pemanggilan class.
**/

class Mobil
{
    private $warna;
    private $merk;
    private $harga;

    public function __construct()
    {
        $this->warna = "Biru";
        $this->merk = "BMW";
        $this->harga = "10000000";
    }

    public function gantiWarna($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }

    public function tampilWarna()
    {
        echo "Warna mobilnya : " . $this->warna;
    }
}

// Membuat objek mobil
$a = new Mobil();
$b = new Mobil();

// Memanggil object
?>

<h2>Mobil Pertama</h2>

<?= $a->tampilWarna(); ?>

<h2>Mobil Pertama ganti warna</h2>

<?php
$a->gantiWarna("Merah");
echo $a->tampilWarna(); 
?>

<h2>Mobil Kedua</h2>

<?php
$b->gantiWarna("Hijau");
echo $b->tampilWarna();