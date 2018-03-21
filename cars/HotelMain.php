<?php

require_once 'Hotel.php';
require_once 'Room.php';

$rooms = [];
$room101 = new Room(2, '101');
var_dump($rooms);

$meinHotel = new Hotel('Adlon');
$meinHotel->setRooms($rooms);
var_dump($meinHotel);

$meinHotel->addRoom('4', '201');

var_dump($meinHotel);
var_dump($meinHotel->getRoom('101'));

var_dump($meinHotel->getRoom('301'));