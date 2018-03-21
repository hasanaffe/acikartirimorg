<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Room {
    protected $beds;
    protected $roomNo;
    
    public function __construct(int $beds, string $roomNo) {
        $this->beds = $beds;
        $this->roomNo = $roomNo;
    }
    
    function getBeds() {
        return $this->beds;
    }

    function getRoomNo() {
        return $this->roomNo;
    }

    function setBeds($beds) {
        $this->beds = $beds;
    }

    function setRoomNo($roomNo) {
        $this->roomNo = $roomNo;
    }


}
