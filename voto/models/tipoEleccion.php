<?php 
  /**
  * 
  */
  class tipoEleccion
  {
  	private $id;
  	private $estado;
  	private $anio;

  	public function getId()
  	{
  		return $this->id;
  	}

  	public function setId($id)
  	{
  		$this->id = $id;
  	}

  	public function getEstado()
  	{
  		return $this->estado;
  	}
  	
  	public function setEstado($estado)
  	{
  		$this->estado = $estado;
  	}

  		public function getAnio()
  	{
  		return $this->anio;
  	}
  	
  	public function setAnio($anio)
  	{
  		$this->anio = $anio;
  	}
  }