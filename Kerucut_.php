<?php

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

$nasi_tumpeng = new Kerucut(4, 10);
echo "Volume kerucut nasi tumpeng dengan jari-jari {$nasi_tumpeng->jari_jari} cm dan tinggi {$nasi_tumpeng->tinggi} cm adalah " . $nasi_tumpeng->volume() . " cm³\n";
?>