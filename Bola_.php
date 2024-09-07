<?php

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

$bola = new Bola(10);
echo "Volume bola dengan jari-jari {$bola->jari_jari} cm adalah " . $bola->volume() . " cm³\n";
