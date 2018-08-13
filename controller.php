<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

require_once("class/Trip.php");
require_once("class/TripDao.php");

$conexao = pg_connect("host=localhost port=5432 dbname=consystem user=postgres password=postgres")
or die("Could not connect to server\n");

$fh = fopen($_FILES['file']['tmp_name'], 'r+');
$lines = array();
while( ($row = fgetcsv($fh, 1000, ";")) !== FALSE ) {
    $lines[] = $row;
    $num = (int) $row[0];
    $duration = (float) $row[1];
    $trip = new Trip($num, $duration);
    var_dump($num);
    var_dump($duration);
    var_dump($trip);
    $tripDao = new TripDao($conexao);
    $tripDao->save($trip);
}

