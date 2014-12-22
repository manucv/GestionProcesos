<?php
/**
 * Objeto referente a la tabla de base de datos 'experiencia_cargo'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto ExperienciaCargo y el intercambio de información con el hydrator.
 */
class ExperienciaCargo
{

    private $exp_id;

    private $car_id;

    private $exp_car_anios;

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
     * @return the $car_id
     */
    public function getCar_id()
    {
        return $this->car_id;
    }

    /**
     *
     * @return the $exp_car_anios
     */
    public function getExp_car_anios()
    {
        return $this->exp_car_anios;
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
     *            Ambigous <NULL, array> $car_id
     */
    public function setCar_id($car_id)
    {
        $this->car_id = $car_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $exp_car_anios
     */
    public function setExp_car_anios($exp_car_anios)
    {
        $this->exp_car_anios = $exp_car_anios;
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
        $this->car_id = (isset($data['car_id'])) ? $data['car_id'] : null;
        $this->exp_car_anios = (isset($data['exp_car_anios'])) ? $data['exp_car_anios'] : null;
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