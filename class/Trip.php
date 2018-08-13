<?php
class Trip {

    private $num;
    private $duration;
    /*private $routeLength;
    private $co2;
    private $fuel; */

    function __construct($num, $duration) {
        $this->num = $num;
        $this->duration = $duration;
        /*$this->routeLength = $routeLength;
        $this->co2 = $co2;
        $this->fuel = $fuel;*/
    }

    function getNum() {
        return  $this->num;
    }

    function setNumber($num) {
        $this->num = $num;
    }

    function getDuration() {
        return  $this->duration;
    }

    function setDuration($duration) {
        $this->duration = $duration;
    }

    /*function getRouteLength() {
        return  $this->routeLength;
    }

    function setRouteLength($routeLength) {
        $this->routeLength = $routeLength;
    }

    function getCo2() {
        return  $this->co2;
    }

    function setCo2($co2) {
        $this->co2 = $co2;
    }

    function getFuel() {
        return  $this->fuel;
    }

    function setFuel($fuel) {
        $this->fuel = $fuel;
    }*/
}