<?php
/**
* 
*/
class Coalicion {
	private $Id;
	private $nombrecoalicion;
	private $tipo;
	private $depto;
	private $municipio;
	private $partidosCoalicion;

	public function getId(){
		return $this->Id;
	}
	public function setId($Id){
		$this->Id = $Id;
	}

	public function getnombrecoalicion(){
		return $this->nombrecoalicion;
	}
	public function setnombrecoalicion($nombrecoalicion){
		$this->nombrecoalicion = $nombrecoalicion;
	}

	public function gettipo(){
		return $this->tipo;
	}
	public function settipo($tipo){
		$this->tipo = $tipo;
	}

	public function getdepto(){
		return $this->depto;
	}
	public function setdepto($depto){
		$this->depto = $depto;
	}

	public function getmunicipio(){
		return $this->municipio;
	}
	public function setmunicipio($municipio){
		$this->municipio = $municipio;
	}

	public function getpartidosCoalicion(){
		return $this->partidosCoalicion;
	}
	public function setpartidosCoalicion($partidosCoalicion){
		$this->partidosCoalicion = $partidosCoalicion;
	}
}
?>