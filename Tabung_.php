<?php

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

$tabung = new Tabung(10, 20);
echo "Volume tabung dengan jari-jari {$tabung->jari_jari} cm dan tinggi {$tabung->tinggi} cm adalah " . $tabung->volume() . " cm³\n";