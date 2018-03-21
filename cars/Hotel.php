<?php

class Hotel {
    protected $name;
    
    protected $address;
    protected $zip;
    protected $city;
    protected $country;
    protected $rooms = [];
    
    public function __construct(string $name) {
        $this->name = $name;
    }
            
    function getName() {
        return $this->name;
    }

    function getAddress() {
        return $this->address;
    }

    function getZip() {
        return $this->zip;
    }

    function getCity() {
        return $this->city;
    }

    function getCountry() {
        return $this->country;
    }

    function setName(string $name) {
        $this->name = $name;
    }

    function setAddress(string $address) {
        $this->address = $address;
    }

    function setZip(string $zip) {
        $this->zip = $zip;
    }

    function setCity(string $city) {
        $this->city = $city;
    }

    function setCountry(string $country) {
        $this->country = $country;
    }
    function getRooms() {
        return $this->rooms;
    }

    function setRooms(array $rooms) {
        $this->rooms = $rooms;
    }

    public function addRoom(string $room){
        $roomNo = $room->getRoomNo();
        if(!$this->getRoom($room) == NULL){
         $this->rooms[] = $room;   
        }
    }
    
    public function getRoom(string $roomNo){
        foreach ($this->rooms() as $room) {
            if($room->getRoomNo() == $roomNo){
            return $room;
       } 
       return NULL;
    }
  }
}

