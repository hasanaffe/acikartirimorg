<?php

class Kuehlschrank 
{
	public $door = 'closed';
	public $light = 'off';
	public $motor = 'is started ';
	public $temperature = 7;

	public function setRegulation($motor) {
			 $this->motor = $motor;
    }
    
    public function getRegulation($motor){
        return $this->motor;
    }
}
$meinKuehlschrank = new Kuehlschrank;

echo "Frigerater light is " . $meinKuehlschrank->light . "\n";
echo "Frigerater door is " . $meinKuehlschrank->door . "\n";
echo "Frigerater temperature is " . $meinKuehlschrank->temperature . "C\n";
echo "Frigerater motor " . $meinKuehlschrank->getRegulation('motor');