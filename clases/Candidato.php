<?php
class Candidato {
	private $Id;
	private $nombre;
	private $apellido;
	private $dui;
	private $independiente;
	private $coalision;
	private $partidario;
	private $cargo;
	private $depto;
	private $municipio;

public function getId() {
	return $this->Id;
}

public function setId($Id) {
	$this->Id = $Id;
}

public function getnombre() {
	return $this->nombre;
}
public function setnombre($nombre) {
	$this->nombre = $nombre;
}

public function getapellido() {
	return $this->apellido;
}
public function setapellido($apellido) {
	$this->apellido = $apellido;
}

public function getdui() {
	return $this->dui;
}
public function setdui ($dui){
	$this->dui = $dui;
}

public function getindependiente() {
	return $this->independiente;
}
public function setindependiente($independiente){
	$this->independiente = $independiente;
}

public function getcoalision(){
	return $this->coalision;
}

public function setcoalision($coalision){
	$this->coalision=$coalision;
}

public function getpartidario() {
	return $this->partidario;
}
public function setpartidario ($partidario){
	$this->partidario = $partidario;
}

public function getcargo() {
	return $this->cargo;
}
public function setcargo ($cargo){
	$this->cargo = $cargo;
}

public function getdepto() {
	return $this->depto;
}
public function setdepto ($depto){
	$this->depto = $depto;
}

public function getmunicipio() {
	return $this->municipio;
}
public function setmunicipio ($municipio){
	$this->municipio = $municipio;
}

}
?>