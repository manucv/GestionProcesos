<?php
/**
 * Objeto referente a la tabla de base de datos 'competencia_cargo'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto CompetenciaCargo y el intercambio de información con el hydrator.
 */
class CompetenciaCargo
{

    private $com_id;

    private $car_id;

    private $com_car_valor_ideal;

    function __construct()
    {}

    /**
     *
     * @return the $com_id
     */
    public function getCom_id()
    {
        return $this->com_id;
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
     * @return the $com_car_valor_ideal
     */
    public function getCom_car_valor_ideal()
    {
        return $this->com_car_valor_ideal;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $com_id
     */
    public function setCom_id($com_id)
    {
        $this->com_id = $com_id;
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
     *            Ambigous <NULL, array> $com_car_valor_ideal
     */
    public function setCom_car_valor_ideal($com_car_valor_ideal)
    {
        $this->com_car_valor_ideal = $com_car_valor_ideal;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->com_id = (isset($data['com_id'])) ? $data['com_id'] : null;
        $this->car_id = (isset($data['car_id'])) ? $data['car_id'] : null;
        $this->com_car_valor_ideal = (isset($data['com_car_valor_ideal'])) ? $data['com_car_valor_ideal'] : null;
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