<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Automobil {

    private $farbe = 'rot';
    private $fahrzeugTyp = 'Geländewagen';
    protected $verbrennungsMotor = 'Diesel';
    private $fahrzeugKlasse = 'Cabrio';
    public $geschwindigkeit = '0';
    public  $gestartet = false;

    function getFarbe() {
        return $this->farbe;
    }

    function getFahrzeugTyp() {
        return $this->fahrzeugTyp;
    }

    function getVerbrennungsMotor() {
        return $this->verbrennungsMotor;
    }

    function getFahrzeugKlasse() {
        return $this->fahrzeugKlasse;
    }

    function setFarbe($farbe) {
        $this->farbe = $farbe = "rot";
    }

    function setFahrzeugTyp($fahrzeugTyp) {
        $this->fahrzeugTyp = $fahrzeugTyp;
    }

    function setVerbrennungsMotor($verbrennungsMotor) {
        $this->verbrennungsMotor = $verbrennungsMotor;
    }

    function setFahrzeugKlasse($fahrzeugKlasse) {
        $this->fahrzeugKlasse = $fahrzeugKlasse;
    }

    public function starten($gestartet) {
        if ($gestartet == false) {
            return $this->gestartet = true;
        } else {
            return $this->gestartet = false;
        }
    }
}

class Bus extends Automobil {
    
    private $seats = 45;
	private $farbe = 'blaurot';
    
//    public function __construct($farbe, $fahrzeugTyp, $verbrennungsMotor, $seats){
//            parent::__construct($farbe, $fahrzeugTyp, $verbrennungsMotor);
//            $this->seats = $seats;
//    }
    function getSeats() {
        return $this->seats;
    }
    
    function setSeats() {
        $this->seats = $seats;
    }
    function getFarbe() {
        return $this->farbe;
    }
    
    function setFarbe($farbe) {
        $this->farbe = $farbe;
    }
}

class Lkw extends Automobil{
    protected $zugkraft = '1500 PS';
    public $geschwindigkeit = '85';
    
    public function __construct($verbrennungsMotor, $zugkraft){
        return $verbrennungsMotor;
        return $zugkraft;
    }    
    function getZugkraft() {
        return $this->zugkraft;
    }

    function setZugkraft($zugkraft) {
        $this->zugkraft = $zugkraft;
    }

    /**
     * @return string
     */
    public function getGeschwindigkeit()
    {
        return $this->geschwindigkeit;
    }

    /**
     * @param string $geschwindigkeit
     */
    public function setGeschwindigkeit($geschwindigkeit = '85')
    {
        $this->geschwindigkeit = $geschwindigkeit;
    }


}

$meinBrummi = new Lkw($verbrennungsMotor = "Diesel", $zugkraft = "1500 PS");

echo $meinBrummi->getVerbrennungsMotor(). "<br />";
echo $meinBrummi->getZugkraft() . "<br />";

$meinBus = new Bus('T1', 'weiß', 'Diesel', '4');
var_dump($meinBus);
$meinAutomobil = new Automobil;
echo $meinAutomobil->getFahrzeugTyp() . "<br />";
echo $meinAutomobil->getVerbrennungsMotor() . "<br />";
echo $meinAutomobil->getFahrzeugKlasse() . "<br />";
echo $meinAutomobil->getFarbe() . "<br />";
echo 'TEST oki doki' . '<br />';
echo 'try' . '<br />';
echo $meinAutomobil->starten($gestartet) . '<br />';
echo $meinBrummi->getGeschwindigkeit() . '<br />';
'<pre>';
var_dump($meinBrummi);
'</pre>';
