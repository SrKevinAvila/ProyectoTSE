<?php
Class Ciudadano {
	private $id;
	private $apellido;
	private $nombre;
	private $dui;
	private $fotografia;
	private $genero;
	private $vencimiento;
	private $direccion;
	private $depto;
	private $municipio;

	public function getid() {
		return $this->id;
	} 
	public function setid($id) {
		$this->id=$id;
	}

	public function getapellido() {
		return $this->apellido;
	}
	public function setapellido($apellido) {
		$this->apellido=$apellido;
	}

	public function getnombre() {
		return $this->nombre;
	}
	public function setnombre($nombre) {
		$this->nombre=$nombre;
	}

	public function getdui() {
		return $this->dui;
	}
	public function setdui($dui) {
		$this->dui=$dui;
	}

	public function getfotografia() {
		return $this->fotografia;
	}
	public function setfotografia($fotografia) {
		$this->fotografia=$fotografia;
	}

    public function getgenero() {
    	return $this->genero;
    }
    public function setgenero($genero) {
    	$this->genero=$genero;
    }

	public function getvencimiento() {
		return $this->vencimiento;
	}
	public function setvencimiento($vencimiento) {
		$this->vencimiento=$vencimiento;
	}

	public function getdireccion() {
		return $this->direccion;
	}
	public function setdireccion($direccion) {
		$this->direccion=$direccion;
	}

	public function getdepto() {
		return $this->depto;
	}
	public function setdepto($depto) {
		$this->depto=$depto;
	}

	public function getmunicipio() {
		return $this->municipio;
	}
	public function setmunicipio($municipio) {
		$this->municipio=$municipio;
	}
}
?>