<?php
/**
 * Objeto referente a la tabla de base de datos 'accion_evaluacion'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto AccionEvaluacion y el intercambio de información con el hydrator.
 */
class AccionEvaluacion
{

    private $acc_eva_id;

    private $acc_eva_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $acc_eva_id
     */
    public function getAcc_eva_id()
    {
        return $this->acc_eva_id;
    }

    /**
     *
     * @return the $acc_eva_descripcion
     */
    public function getAcc_eva_descripcion()
    {
        return $this->acc_eva_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $acc_eva_id
     */
    public function setAcc_eva_id($acc_eva_id)
    {
        $this->acc_eva_id = $acc_eva_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $acc_eva_descripcion
     */
    public function setAcc_eva_descripcion($acc_eva_descripcion)
    {
        $this->acc_eva_descripcion = $acc_eva_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->acc_eva_id = (isset($data['acc_eva_id'])) ? $data['acc_eva_id'] : null;
        $this->acc_eva_descripcion = (isset($data['acc_eva_descripcion'])) ? $data['acc_eva_descripcion'] : null;
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