<?php

namespace ;

class Datosapirm extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $iD;

    /**
     *
     * @var string
     */
    protected $nombre;

    /**
     *
     * @var string
     */
    protected $status;

    /**
     *
     * @var string
     */
    protected $especies;

    /**
     *
     * @var string
     */
    protected $tipo;

    /**
     *
     * @var string
     */
    protected $genero;

    /**
     *
     * @var string
     */
    protected $fecha;

    /**
     *
     * @var string
     */
    protected $actualizacion;

    /**
     * Method to set the value of field ID
     *
     * @param integer $iD
     * @return $this
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Method to set the value of field nombre
     *
     * @param string $nombre
     * @return $this
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field especies
     *
     * @param string $especies
     * @return $this
     */
    public function setEspecies($especies)
    {
        $this->especies = $especies;

        return $this;
    }

    /**
     * Method to set the value of field tipo
     *
     * @param string $tipo
     * @return $this
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Method to set the value of field genero
     *
     * @param string $genero
     * @return $this
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Method to set the value of field fecha
     *
     * @param string $fecha
     * @return $this
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Method to set the value of field actualizacion
     *
     * @param string $actualizacion
     * @return $this
     */
    public function setActualizacion($actualizacion)
    {
        $this->actualizacion = $actualizacion;

        return $this;
    }

    /**
     * Returns the value of field iD
     *
     * @return integer
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Returns the value of field nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Returns the value of field status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field especies
     *
     * @return string
     */
    public function getEspecies()
    {
        return $this->especies;
    }

    /**
     * Returns the value of field tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Returns the value of field genero
     *
     * @return string
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Returns the value of field fecha
     *
     * @return string
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Returns the value of field actualizacion
     *
     * @return string
     */
    public function getActualizacion()
    {
        return $this->actualizacion;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("bd_API_RM");
        $this->setSource("datosApiRM");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Datosapirm[]|Datosapirm|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Datosapirm|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
