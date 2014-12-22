<?php
/**
 * Objeto referente a la tabla de base de datos 'responsabilidad'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Responsabilidad y el intercambio de información con el hydrator.
 */
class Responsabilidad
{

    private $rpo_id;

    private $car_id;

    private $rpo_descripcion;

    private $rpo_valor_f;

    private $rpo_valor_ga;

    private $rpo_val_c;

    function __construct()
    {}

    /**
     *
     * @return the $rpo_id
     */
    public function getRpo_id()
    {
        return $this->rpo_id;
    }

    /**
     *
     * @return the $car_id
     */
    public function getCar_id()
    {
        return $this->car_id;
    }

    /**
     *
     * @return the $rpo_descripcion
     */
    public function getRpo_descripcion()
    {
        return $this->rpo_descripcion;
    }

    /**
     *
     * @return the $rpo_valor_f
     */
    public function getRpo_valor_f()
    {
        return $this->rpo_valor_f;
    }

    /**
     *
     * @return the $rpo_valor_ga
     */
    public function getRpo_valor_ga()
    {
        return $this->rpo_valor_ga;
    }

    /**
     *
     * @return the $rpo_val_c
     */
    public function getRpo_val_c()
    {
        return $this->rpo_val_c;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rpo_id
     */
    public function setRpo_id($rpo_id)
    {
        $this->rpo_id = $rpo_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $car_id
     */
    public function setCar_id($car_id)
    {
        $this->car_id = $car_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rpo_descripcion
     */
    public function setRpo_descripcion($rpo_descripcion)
    {
        $this->rpo_descripcion = $rpo_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rpo_valor_f
     */
    public function setRpo_valor_f($rpo_valor_f)
    {
        $this->rpo_valor_f = $rpo_valor_f;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rpo_valor_ga
     */
    public function setRpo_valor_ga($rpo_valor_ga)
    {
        $this->rpo_valor_ga = $rpo_valor_ga;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rpo_val_c
     */
    public function setRpo_val_c($rpo_val_c)
    {
        $this->rpo_val_c = $rpo_val_c;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->rpo_id = (isset($data['rpo_id'])) ? $data['rpo_id'] : null;
        $this->car_id = (isset($data['car_id'])) ? $data['car_id'] : null;
        $this->rpo_descripcion = (isset($data['rpo_descripcion'])) ? $data['rpo_descripcion'] : null;
        $this->rpo_valor_f = (isset($data['rpo_valor_f'])) ? $data['rpo_valor_f'] : null;
        $this->rpo_valor_ga = (isset($data['rpo_valor_ga'])) ? $data['rpo_valor_ga'] : null;
        $this->rpo_val_c = (isset($data['rpo_val_c'])) ? $data['rpo_val_c'] : null;
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