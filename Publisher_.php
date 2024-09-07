<?php

class Publisher {
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }

    public function setPhone(int $phone): void {
        $this->phone = $phone;
    }

    public function getPhone(): int {
        return $this->phone;
    }
}
