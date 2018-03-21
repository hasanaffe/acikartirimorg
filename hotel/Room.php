<?php

require_once 'Traits.php';

class Room {

    protected $beds;
    protected $roomNo;
    protected $belegt;

    use id;

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

    function setBeds(int $beds) {
        $this->beds = $beds;
    }

    function setRoomNo(string $roomNo) {
        $this->roomNo = $roomNo;
    }

    function getBelegt() {
        return $this->belegt;
    }

    function setBelegt($belegt) {
        if (is_int($belegt)) {
            $this->belegt = boolval($belegt);
        } else {
            $this->belegt = $belegt;
        }
    }

}
