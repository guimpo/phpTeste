<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

require_once("class/Trip.php");
require_once("class/TripDao.php");

$conexao = pg_connect("host=localhost port=5432 dbname=consystem user=postgres password=postgres")
or die("Sem conexão com bd\n");

$fh = fopen($_FILES['file']['tmp_name'], 'r+');
$lines = array();

if($fh == NULL) {
    header("Location: http://localhost/erro.html");
}
while( ($row = fgetcsv($fh, 1000, ";")) !== FALSE ) {
    $lines[] = $row;
    $num = (int) $row[0];
    $duration = (float) $row[1];
    $trip = new Trip($num, $duration);
    $tripDao = new TripDao($conexao);
    $tripDao->save($trip);
}
header("Location: http://localhost/confirmacao.html");
