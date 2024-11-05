<?php

// Parent Class: Pegawai
class Pegawai {
    protected $nama;
    protected $gajiPokok;

    public function __construct($nama, $gajiPokok = 0) {
        $this->nama = $nama;
        $this->gajiPokok = $gajiPokok;
    }

    public function infoPegawai() {
        echo "{$this->nama} memiliki gaji pokok Rp. {$this->gajiPokok}<br>";
    }
}

// Child Class: KaryawanTetap
class KaryawanTetap extends Pegawai {
    private $tunjangan;

    public function __construct($nama, $gajiPokok, $tunjangan) {
        parent::__construct($nama, $gajiPokok);
        $this->tunjangan = $tunjangan;
    }

    public function infoTunjangan() {
        echo "Tunjangan: Rp. {$this->tunjangan}<br>";
    }
}

// Child Class: Freelance
class Freelance extends Pegawai {
    private $jamKerja;
    private $upahPerJam;

    public function __construct($nama, $jamKerja, $upahPerJam) {
        parent::__construct($nama, 0); // Gaji pokok freelance dianggap 0
        $this->jamKerja = $jamKerja;
        $this->upahPerJam = $upahPerJam;
    }

    public function hitungGaji() {
        $totalGaji = $this->jamKerja * $this->upahPerJam;
        echo "Jam Kerja: {$this->jamKerja}, Upah per Jam: Rp. {$this->upahPerJam}<br>";
        echo "Total Gaji: Rp. {$totalGaji}<br>";
    }
}

// Membuat objek KaryawanTetap
$karyawanTetap = new KaryawanTetap("Ali", 5000000, 1000000);
echo "=== Karyawan Tetap ===<br>";
$karyawanTetap->infoPegawai();
$karyawanTetap->infoTunjangan();

echo "<br>";

// Membuat objek Freelance
$freelance = new Freelance("Budi", 50, 100000);
echo "Freelance ===<br>";
$freelance->infoPegawai();
$freelance->hitungGaji();

?>
