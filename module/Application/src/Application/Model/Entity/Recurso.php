<?php
/**
 * Objeto referente a la tabla de base de datos 'recurso'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Recurso y el intercambio de información con el hydrator.
 */
class Recurso
{

    private $rec_id;

    private $rec_descripcion;

    private $rec_tipo;

    private $rec_tasa_hora;

    private $rec_costo;

    function __construct()
    {}

    /**
     *
     * @return the $rec_id
     */
    public function getRec_id()
    {
        return $this->rec_id;
    }

    /**
     *
     * @return the $rec_descripcion
     */
    public function getRec_descripcion()
    {
        return $this->rec_descripcion;
    }

    /**
     *
     * @return the $rec_tipo
     */
    public function getRec_tipo()
    {
        return $this->rec_tipo;
    }

    /**
     *
     * @return the $rec_tasa_hora
     */
    public function getRec_tasa_hora()
    {
        return $this->rec_tasa_hora;
    }

    /**
     *
     * @return the $rec_costo
     */
    public function getRec_costo()
    {
        return $this->rec_costo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rec_id
     */
    public function setRec_id($rec_id)
    {
        $this->rec_id = $rec_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rec_descripcion
     */
    public function setRec_descripcion($rec_descripcion)
    {
        $this->rec_descripcion = $rec_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rec_tipo
     */
    public function setRec_tipo($rec_tipo)
    {
        $this->rec_tipo = $rec_tipo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rec_tasa_hora
     */
    public function setRec_tasa_hora($rec_tasa_hora)
    {
        $this->rec_tasa_hora = $rec_tasa_hora;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rec_costo
     */
    public function setRec_costo($rec_costo)
    {
        $this->rec_costo = $rec_costo;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->rec_id = (isset($data['rec_id'])) ? $data['rec_id'] : null;
        $this->rec_descripcion = (isset($data['rec_descripcion'])) ? $data['rec_descripcion'] : null;
        $this->rec_tipo = (isset($data['rec_tipo'])) ? $data['rec_tipo'] : null;
        $this->rec_tasa_hora = (isset($data['rec_tasa_hora'])) ? $data['rec_tasa_hora'] : null;
        $this->rec_costo = (isset($data['rec_costo'])) ? $data['rec_costo'] : null;
    }

    /**
     * Obtiene los valores de los atributos de clase para poblar el hydrator.
     *
     * @return array
     */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
}