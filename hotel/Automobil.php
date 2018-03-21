<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Automobil {

    protected $brand;
    public $achsen = 2;
    protected $color;
    protected $doors = 2;
    protected $motor = "Otto";

    function getAchsen() {
        return $this->achsen;
    }

    function getColor() {
        return $this->color;
    }

    function getDoors() {
        return $this->doors;
    }

    function getMotor() {
        return $this->motor;
    }

    function setAchsen($achsen) {
        $this->achsen = $achsen;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function setDoors($doors) {
        $this->doors = $doors;
    }

    function setMotor($motor) {
        $this->motor = $motor;
    }

    function getBrand() {
        return $this->brand;
    }

    function setBrand($brand) {
        $this->brand = $brand;
    }

    public function __construct($brand, $color, $doors = NULL) {
        var_dump(__CLASS__);
        var_dump(__METHOD__);
        $this->brand = $brand;
        $this->color = $color;
        if ($doors != NULL) {
            $this->doors = $doors;
        }
        if (isset($this->seats)) {
            echo "Sitze: " . $this->seats;
        }
    }

    public function __toString() {
        return "Das ist ein Automobil!!";
    }

    public function startAutomobil() {
        echo "Starting " . $this->getBrand();
    }

}

class Bus extends Automobil {

    protected $seats;

    public function __construct(...$args) {
        var_dump(__CLASS__);
        // bis PHP 5.6 anstatt ...$args
//        $args = func_get_args();
//        var_dump($args);
        switch (count($args)) {
            case 2:
                parent::__construct($args[0], $args[1]);
                break;
            case 3:
                parent::__construct($args[0], $args[1], $args[2]);
                break;

            case 4:

                $this->setSeats($args[3]);
                parent::__construct($args[0], $args[1], $args[2]);
        }
//        parent::__construct($brand, $color, $doors);
//        $this->seats = $seats;
    }

    function getSeats() {
        return $this->seats;
    }

    function setSeats($seats) {
        $this->seats = $seats;
    }

    function setAchsen($achsen) {
        $this->achsen = $achsen;
//        echo parent::setAchsen($achsen);
//        $this->achsen = $achsen;
//        parent::setAchsen($achsen);
    }

}

class Lkw extends Automobil {

    protected $zugkraft;

    public function __construct($brand, $color, $doors = NULL) {
        parent::__construct($brand, $color, $doors);
    }

    function getZugkraft() {
        return $this->zugkraft;
    }

    function setZugkraft($zugkraft) {
        $this->zugkraft = $zugkraft;
    }

}

//$meinVW = new Automobil('VW', 'grün', '2');
//$meinVW->setMotor('Diesel');
//$meinVW->startAutomobil();
//var_dump($meinVW);
//echo "Was ist das? " . $meinVW;

$class = 'Bus';
$meinBus = new $class('T1', 'weiß', 2, 9);
$meinBus->setSeats(9);
$meinBus->setAchsen(4);
$achsen = 'achsen';
$meinBus->$achsen;
$method = 'getSeats';

//echo $meinBus->$method();
     

// Fürht zu einem Fehler
//echo "Achsen: " . $meinBus->achsen;
echo '<pre>';
var_dump($meinBus);
echo '</pre>';  
echo "<hr/>";
$meinLkw = new Lkw('Benz', 'rot', 2);
echo '<pre>';  
var_dump($meinLkw);
echo '</pre>';  

