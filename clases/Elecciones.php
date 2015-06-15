<?php
Class Elecciones {
	public $id;
	public $presidente;
	public $alcalde;
	public $diputado;
	public $anio;

	public function getid(){
		return $this->id;
	}
	public function setid($id){
		$this->id=$id;
	}

	public function getpresidente(){
		return $this->presidente;
	}
	public function setpresidente($presidente){
		$this->presidente=$presidente;
	}

	public function getalcalde(){
		return $this->alcalde;
	}
	public function setalcalde($alcalde){
		$this->alcalde=$alcalde;
	}

	public function getdiputado(){
		return $this->diputado;
	}
	public function setdiputado($diputado){
		$this->diputado=$diputado;
	}

	public function getanio(){
		return $this->anio;
	}
	public function setanio($anio){
		$this->anio=$anio;
	}
}
?>