<?php
require_once 'Hotel.php';
require_once 'Room.php';

$mysqli = new mysqli(
        'localhost', // Server
        'root',  // User
        '123456', // Passwort
        'php_schulung' // Datenbank
        );

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo "Juhuu....wir haben eine Verbindung!";

// Query für die DB
$query = 'SELECT * FROM Hotel WHERE id=1';

// Ergebnis-Objekt
$result = $mysqli->query($query);

var_dump($result);

// Ergebniszeile mit Werten
while($hotelRow = $result->fetch_assoc()) {
    var_dump($hotelRow);
    
    // Hotel-Objekt erstellen und mit Werten füllen
    $meinHotel = new Hotel($hotelRow['name']);
    
    foreach($hotelRow as $key => $value) {
        if($key != 'name') {
            $setterFunc = 'set' . ucfirst($key);
            $meinHotel->$setterFunc($value);
        }
    }
    
    // Auslesen der Zimmer zum Hotel
    $query = 'SELECT * FROM Room WHERE hotel_id=' . $hotelRow['id'];
    $resultRooms = $mysqli->query($query);
    unset($query);
    
    // Alle gefundenen Zimmer dem Hotel zuweisen
    while($roomRow = $resultRooms->fetch_assoc()) {
        // Zimmer-Objekt erstellen
        $newRoom = new Room($roomRow['beds'], $roomRow['roomNo']);
        $meinHotel->addRoom($newRoom);
    }
    var_dump($meinHotel->countBeds());
    
}
