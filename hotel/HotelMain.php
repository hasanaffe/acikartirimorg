<?php

$integer = 0;
var_dump($integer);
$bool = boolval($integer);
var_dump($bool);

require_once 'Hotel.php';
require_once 'Room.php';

$rooms = [];
$rooms[] = new Room(2, '101');

var_dump($rooms);

$meinHotel = new Hotel('Adlon');
$meinHotel->setRooms($rooms);


$meinHotel->addRoom(new Room(4, '201'));

// Wird nicht hinzugefügt, da Zimmernummer schon vorhanden
$meinHotel->addRoom(new Room(4, '202'));
var_dump($meinHotel);
echo "Zimmer löschen";
$meinHotel->removeRoom('101');
//$newRooms = $meinHotel->getRooms();
//$newRooms[] = new Room(4, '201');
//$meinHotel->setRooms($newRooms);

var_dump($meinHotel);

// Liefert mir den Raum mit Zimmmernr 101
var_dump($meinHotel->getRoom('101'));

// Liefert kein Zimmer
var_dump($meinHotel->getRoom('301'));
$meinHotel->setRoomBelegt('201');

var_dump($meinHotel);

echo $meinHotel;

$meinHotel->irgendwas = 'Wert';

$meinHotel->getVolleAddresse('Köln', 'Bonn');


var_dump( $meinHotel->countBeds() );

$serializedObject = serialize($meinHotel);
var_dump ($serializedObject);
var_dump (unserialize($serializedObject));

