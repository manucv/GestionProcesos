<?php
/**
 * Objeto referente a la tabla de base de datos 'experiencia'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Experiencia y el intercambio de información con el hydrator.
 */
class Experiencia
{

    private $exp_id;

    private $exp_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $exp_id
     */
    public function getExp_id()
    {
        return $this->exp_id;
    }

    /**
     *
     * @return the $exp_descripcion
     */
    public function getExp_descripcion()
    {
        return $this->exp_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $exp_id
     */
    public function setExp_id($exp_id)
    {
        $this->exp_id = $exp_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $exp_descripcion
     */
    public function setExp_descripcion($exp_descripcion)
    {
        $this->exp_descripcion = $exp_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->exp_id = (isset($data['exp_id'])) ? $data['exp_id'] : null;
        $this->exp_descripcion = (isset($data['exp_descripcion'])) ? $data['exp_descripcion'] : null;
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