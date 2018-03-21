<?php

require_once 'Room.php';
require_once 'Interface.php';
require_once 'Traits.php';

class Hotel implements Entry {

    protected $name;
    protected $address;
    protected $zip;
    protected $city;
    protected $country;
    protected $rooms = []; // anstatt array()

    use id;

    public function __construct(string $name) {
        $this->name = $name;
    }
    
    public function __toString() {
        return "Das ist ein Hotel mit dem Namen '" . $this->getName() . 
                "' mit '" . $this->countBeds() . "' Betten";
    }

    public function __get($name) {
        echo "Das gibt es hier nicht " . $name;
    }
    
    public function __set($name, $value) {
        echo "Du versuchst die Eigenschaft '" . $name . "' mit '" . $value . "' zu füllen";
    }
    
    public function __call($name, $arguments) {
        echo "Du versuchst die Methode '" . $name . "' aufzurufen";
        var_dump($arguments);
    }
    
    public function __sleep() {
       return ['name', 'id'];
    }
    
    public function __wakeup() {
        echo "es wird Objekt erstellt";
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

    function getRooms() {
        return $this->rooms;
    }

    function setName(string $name) {
        $this->name = $name;
    }

    /**
     * 
     * @param string $address
     */
    function setAddress(string $address) {
        $this->address = $address;
    }

    /**
     * 
     * @param string $zip
     */
    function setZip(string $zip) {
        $this->zip = $zip;
    }

    /**
     * 
     * @param string $city
     */
    function setCity(string $city) {
        $this->city = $city;
    }

    /**
     * Setzt das Land
     * 
     * @param string $country
     */
    function setCountry(string $country) {
        $this->country = $country;
    }

    /**
     * 
     * @param array $rooms
     */
    function setRooms(array $rooms) {
        $this->rooms = $rooms;
    }

    /**
     * 
     * @param Room $room
     */
    public function addRoom(Room $room) {
        // Zimmernummer
        $roomNo = $room->getRoomNo();

        // ist Zimmernummer schon vorhanden?
        if ($this->getRoom($roomNo) == NULL) {
            $this->rooms[] = $room;
        }
    }

    /**
     * Löscht ein Zimmer anhand der Zimmernummer
     * 
     * @param string $roomNo
     */
    public function removeRoom(string $roomNo) {
        // Das funktioiert leider nicht!
//        $room2remove = $this->getRoom($roomNo);
//        var_dump($room2remove);
//        unset($room2remove);
        // direkt aus dem rooms-Array löschen
        foreach ($this->getRooms() as $key => $room) {
            if ($room->getRoomNo() == $roomNo) {
                echo "Lösche";
                unset($this->rooms[$key]);
            }
        }

        // Alternativ neues Array erstellen und Hotel zuweisen
//        foreach($this->getRooms() as $room) {
//            if($room->getRoomNo() != $roomNo) {
//                $newRooms[] = $room;
//            }
//        }
//        var_dump($newRooms);
//        $this->setRooms($newRooms);
    }

    /**
     * Liefert mir ein Zimmer mit der entsprechenden Zimmernummer
     * 
     * @param string $roomNo
     * @return type
     */
    public function getRoom(string $roomNo) {
        foreach ($this->rooms as $room) {
            if ($room->getRoomNo() == $roomNo) {
                return $room;
            }
        }
        return NULL;
    }

    /**
     * 
     * @return type
     */
    public function countBeds() {
        $countBeds = 0;

        /**
         * @var Room $room
         */
        foreach ($this->getRooms() as $room) {
            $countBeds += $room->getBeds();
        }
        return $countBeds;
    }

    /**
     * 
     * @param string $roomNo
     */
    public function setRoomBelegt($roomNo) {
        $room = $this->getRoom($roomNo);
        if ($room != NULL) {
            var_dump($room);
            $room->setBelegt(1);
        }
    }

    public function destroyRooms() {
        
    }

}
