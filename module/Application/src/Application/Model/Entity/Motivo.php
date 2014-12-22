<?php
/**
 * Objeto referente a la tabla de base de datos 'motivo'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Motivo y el intercambio de información con el hydrator.
 */
class Motivo
{

    private $mot_id;

    private $mot_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $mot_id
     */
    public function getMot_id()
    {
        return $this->mot_id;
    }

    /**
     *
     * @return the $mot_descripcion
     */
    public function getMot_descripcion()
    {
        return $this->mot_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $mot_id
     */
    public function setMot_id($mot_id)
    {
        $this->mot_id = $mot_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $mot_descripcion
     */
    public function setMot_descripcion($mot_descripcion)
    {
        $this->mot_descripcion = $mot_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->mot_id = (isset($data['mot_id'])) ? $data['mot_id'] : null;
        $this->mot_descripcion = (isset($data['mot_descripcion'])) ? $data['mot_descripcion'] : null;
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