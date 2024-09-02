<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4 / 3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1 / 3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

// Membuat objek dari masing masing class

$lingkaran = new Lingkaran(10);
echo "Luas lingkaran dengan jari-jari {$lingkaran->jari_jari} cm adalah " . $lingkaran->luas() . " cm²\n";
echo "Keliling lingkaran dengan jari-jari {$lingkaran->jari_jari} cm adalah " . $lingkaran->keliling() . " cm\n";

$bola = new Bola(10);
echo "Volume bola dengan jari-jari {$bola->jari_jari} cm adalah " . $bola->volume() . " cm³\n";

$tabung = new Tabung(10, 20);
echo "Volume tabung dengan jari-jari {$tabung->jari_jari} cm dan tinggi {$tabung->tinggi} cm adalah " . $tabung->volume() . " cm³\n";

$nasi_tumpeng = new Kerucut(4, 10);
echo "Volume kerucut nasi tumpeng dengan jari-jari {$nasi_tumpeng->jari_jari} cm dan tinggi {$nasi_tumpeng->tinggi} cm adalah " . $nasi_tumpeng->volume() . " cm³\n";
?>
