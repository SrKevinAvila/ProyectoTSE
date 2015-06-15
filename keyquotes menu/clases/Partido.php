<?php
class Partido {
	private $id;
	private $bandera;
	private $dui;
	private $presidente;

	public function getid(){
		return $this->id;
	}
	public function set($id){
		$this->id=$id;
	}

	public function getbandera(){
		return $this->bandera;
	}
	public function setbandera($bandera){
		$this->bandera=$bandera;
	}

	public function getdui(){
		return $this->dui;
	}
	public function setdui($dui){
		$this->dui=$dui;
	}

	public function getpreidente(){
		return $this->dui;
	}
	public function setpresidente($presidente){
		$this->presidente=$presidente;
	}
}
?>