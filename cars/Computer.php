<?php
define('VERSSION', 1.1);
echo VERSION;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Computer {
    
    public $cpu;
    private $ram;
    static $color = "rot";
    const STECKER = "dick";
    
    public function __construct($ram, $cpu){
        echo "Initialisiere Computer";
        $this->ram = $ram;
        $this->cpu = $cpu;
    }
    
    function starten() {
        echo "Computer startet " . $this->cpu;
        $this->showStatus();
    }
    
    private function showStatus(){
        echo "Computer ist gestartet";
    }
    public function getRam() {
        return $this->ram;
    }

    public function setRam($ram) {
        $this->ram = $ram;
    }
}
echo Computer::$color;
echo Computer::$color = "Grün";
//Computer::getColor;
echo Computer::STECKER;
$meinComputer = new Computer($ram = '4 GB', $cpu = '( Kerne');
echo $meinComputer->$ram;
echo $meinComputer->$cpu;

var_dump($meinComputer);

$meinComputer->cpu = "4 Kerne";
$meinComputer->cpu = "8GB";
var_dump($meinComputer);

$meinComputer->starten("8 GB");
$meinComputer->setRam("12 GB");
echo $meinComputer->getRam();
echo STECKER;