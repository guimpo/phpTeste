<?php

class TripDao {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}

	public function save(Trip $trip) {

		$num = $trip->getNum();
		$duration = $trip->getDuration();
		$query = "INSERT INTO trips (num, duration) VALUES ($1, $2)";
		
		pg_prepare($this->conexao, "", $query) or die ("erro no prepare\n");
		pg_execute($this->conexao, "", array($num, $duration)) or die ("erro no execute\n");
	}
}