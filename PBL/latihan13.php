<?php
namespace classes;

class EntitasTerbang
{
    public $nama;
    public $jumlahSayap;

    public function __construct($nama, $jumlahSayap)
    {
        $this->nama = $nama;
        $this->jumlahSayap = $jumlahSayap;
    }

    public function terbang()
    {
        echo "{$this->nama} sedang terbang.<br/>";
    }

    public function mendarat()
    {
        echo "{$this->nama} telah mendarat.<br/>";
    }
}

class Burung extends EntitasTerbang
{
    public $panjangParuh;

    public function __construct($nama, $jumlahSayap, $panjangParuh)
    {
        parent::__construct($nama, $jumlahSayap);
        $this->panjangParuh = $panjangParuh;
    }

    public function bersuara()
    {
        echo "{$this->nama} berbunyi: `cit...cit...cit`.<br/>";
    }
}

class KakakTua extends Burung
{
    public function __construct($nama, $jumlahSayap, $panjangParuh)
    {
        parent::__construct($nama, $jumlahSayap, $panjangParuh);
    }

    public function meniruSuaraManusia()
    {
        echo "{$this->nama} menirukan suara manusia: `Hola, aku cindy!`.<br/>";
    }
}

class AyamJantan extends Burung
{
    public function __construct($nama, $jumlahSayap, $panjangParuh)
    {
        parent::__construct($nama, $jumlahSayap, $panjangParuh);
    }

    public function berkokok()
    {
        echo "{$this->nama} berbunyi: `Kukuruyuk`.<br/>";
    }

    public function terbang()
    {
        echo "{$this->nama} mencoba untuk terbang.<br/>";
    }
}

class KendaraanUdara extends EntitasTerbang
{
    public $jumlahMesin;
    public $kapasitasPenumpang;

    public function __construct($nama, $jumlahSayap, $jumlahMesin, $kapasitasPenumpang)
    {
        parent::__construct($nama, $jumlahSayap);
        $this->jumlahMesin = $jumlahMesin;
        $this->kapasitasPenumpang = $kapasitasPenumpang;
    }

    public function lakukanPerawatanBerkala()
    {
        echo "{$this->nama} sedang dalam perawatan.<br/>";
    }
}

class PesawatTerbang extends KendaraanUdara
{
    public function __construct($nama, $jumlahSayap, $jumlahMesin, $kapasitasPenumpang)
    {
        parent::__construct($nama, $jumlahSayap, $jumlahMesin, $kapasitasPenumpang);
    }
}

class Helikopter extends KendaraanUdara
{
    public function __construct($nama, $jumlahSayap, $jumlahMesin, $kapasitasPenumpang)
    {
        parent::__construct($nama, $jumlahSayap, $jumlahMesin, $kapasitasPenumpang);
    }

    public function hover()
    {
        echo "{$this->nama} sedang melayang di udara.<br/>";
    }
}

// Contoh Implementasi
$kakakTua = new KakakTua("Kakatua", 2, "10 cm");
$kakakTua->bersuara();
$kakakTua->meniruSuaraManusia();
$kakakTua->terbang();
$kakakTua->mendarat();

$ayamJantan = new AyamJantan("Ayam Jago", 2, "5 cm");
$ayamJantan->bersuara();
$ayamJantan->berkokok();
$ayamJantan->terbang();

$pesawat = new PesawatTerbang("Lion AIR", 2, 4, 400);
$pesawat->terbang();
$pesawat->mendarat();
$pesawat->lakukanPerawatanBerkala();

$helikopter = new Helikopter("Heli heli", 0, 2, 12);
$helikopter->terbang();
$helikopter->hover();
$helikopter->mendarat();
