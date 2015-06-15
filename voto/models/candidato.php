<?php


class candidatos {
   private $id;
   private $dui;
   private $nombres;
   private $apellidos;
   private $dpto;
   private $municipio;
   private $patidoId;
   private $tipoelecId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getDui()
    {
        return $this->dui;
    }

    public  function  setDui($dui)
    {
        $this->dui =$dui;
    }

    /**
     * @return mixed
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * @param mixed $nombres
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return mixed
     */
    public function getTipoelecId()
    {
        return $this->tipoelecId;
    }

    /**
     * @param mixed $tipoelecId
     */
    public function setTipoelecId($tipoelecId)
    {
        $this->tipoelecId = $tipoelecId;
    }

    /**
     * @return mixed
     */
    public function getPatidoId()
    {
        return $this->patidoId;
    }

    /**
     * @param mixed $patidoId
     */
    public function setPatidoId($patidoId)
    {
        $this->patidoId = $patidoId;
    }

    /**
     * @return mixed
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * @param mixed $municipio
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    /**
     * @return mixed
     */
    public function getDpto()
    {
        return $this->dpto;
    }

    /**
     * @param mixed $dpto
     */
    public function setDpto($dpto)
    {
        $this->dpto = $dpto;
    }




}