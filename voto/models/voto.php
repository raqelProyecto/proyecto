<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 21/05/2015
 * Time: 04:26 PM
 */

class voto {
    private $idCandidato;
    private $votanteId;
    private $hojaId;
    private $anio;

    /**
     * @return mixed
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * @param mixed $anio
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;
    }
    /**
     * @return mixed
     */
    public function getIdCandidato()
    {
        return $this->idCandidato;
    }

    /**
     * @param mixed $idCandidato
     */
    public function setIdCandidato($idCandidato)
    {
        $this->idCandidato = $idCandidato;
    }

    /**
     * @return mixed
     */
    public function getVotanteId()
    {
        return $this->votanteId;
    }

    /**
     * @param mixed $votanteId
     */
    public function setVotanteId($votanteId)
    {
        $this->votanteId = $votanteId;
    }

    /**
     * @return mixed
     */
    public function getHojaId()
    {
        return $this->hojaId;
    }

    /**
     * @param mixed $hojaId
     */
    public function setHojaId($hojaId)
    {
        $this->hojaId = $hojaId;
    }
}