<?php

class Coalicion {
    private $id;
    private $nombre;
    private $coalicion_id;
    private $candidato_id;

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

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getCoalicionId()
    {
        return $this->coalicion_id;
    }

    /**
     * @param mixed $coalicion_id
     */
    public function setCoalicionId($coalicion_id)
    {
        $this->coalicion_id = $coalicion_id;
    }

    /**
     * @return mixed
     */
    public function getCandidatoId()
    {
        return $this->candidato_id;
    }

    /**
     * @param mixed $candidato_id
     */
    public function setCandidatoId($candidato_id)
    {
        $this->candidato_id = $candidato_id;
    }
}