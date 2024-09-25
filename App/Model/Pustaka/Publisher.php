<?php

Class Publisher{
    public $name;
    public $address;
    public $phone;

    function __construct($name,$address,$phone){
        $this->name =$name;
        $this->address =$address;
        $this->phone = $phone;
    }
    public function setphone($phone){
        $this->phone = $phone;
    }
    public function getphone(){
        return $this->phone;
    }
}