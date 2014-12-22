<?php
/**
 * Objeto referente a la tabla de base de datos 'cargo_reporta'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto CargoReporta y el intercambio de información con el hydrator.
 */
class CargoReporta
{

    private $car_id;

    private $car_rep_reporta;

    private $car_rep_principal;

    function __construct()
    {}

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
     * @return the $car_rep_reporta
     */
    public function getCar_rep_reporta()
    {
        return $this->car_rep_reporta;
    }

    /**
     *
     * @return the $car_rep_principal
     */
    public function getCar_rep_principal()
    {
        return $this->car_rep_principal;
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
     *            Ambigous <NULL, array> $car_rep_reporta
     */
    public function setCar_rep_reporta($car_rep_reporta)
    {
        $this->car_rep_reporta = $car_rep_reporta;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $car_rep_principal
     */
    public function setCar_rep_principal($car_rep_principal)
    {
        $this->car_rep_principal = $car_rep_principal;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->car_id = (isset($data['car_id'])) ? $data['car_id'] : null;
        $this->car_rep_reporta = (isset($data['car_rep_reporta'])) ? $data['car_rep_reporta'] : null;
        $this->car_rep_principal = (isset($data['car_rep_principal'])) ? $data['car_rep_principal'] : null;
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