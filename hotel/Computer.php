<?php
// prozedural
define('VERSION', 1.1);
echo VERSION;

class Computer {
    
    public $cpu = "1 Kern";
    private $ram = "4gb";
    static $color = "rot";
    // Konstante
    const STECKER = "die dicken";
    
    /**
     * Konstruktur wird aufgerufen wenn aus einer Klasse
     * ein Objekt wird
     * 
     * @param type $cpu
     * @param type $ram
     */
    public function __construct($cpu, $ram = "24GB", $case = "Tower") {
        echo "Initialisiere Computer";
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->starten();
    }
    
    public function __destruct() {
        echo "Objekt wird jetzt zerstört!!!";
    }
    
    public function starten() {
        echo "Computer startet mit " . 
                $this->cpu . " und " . 
                $this->ram . " RAM";
        $this->showStatus();
    }
    
    private function showStatus() {
        echo "Computer ist gestartet mit " . $this->ram;
    }
    
    /**
     * Lesend auf ram zugreifen
     * 
     * @return type
     */
    public function getRam() {
        return $this->ram . " RAM";
    }

    /**
     * Schreibend auf ram zugreifen
     * 
     * @param type $ram
     */
    public function setRam($ram) {
        $this->ram = $ram;
    }

    static function getColor() {
        echo self::$color;
    }

}
// Statischer Aufruf ohne vorher 
// ein Objekt erstellen zu müssen
Computer::$color = "Grün";
Computer::getColor();
echo Computer::STECKER;

echo Computer::$color;

$meinComputer = new Computer("8 Kerne");

var_dump($meinComputer);

$meinComputer->cpu = "4 Kerne";

// Geht nicht da private
//$meinComputer->ram = "8GB";

var_dump($meinComputer);

//$meinComputer->starten("8GB");
$meinComputer->setRam("12GB");
echo $meinComputer->getRam();
// Geht nicht weil private
//$meinComputer->showStatus();
unset($meinComputer);
var_dump($meinComputer);