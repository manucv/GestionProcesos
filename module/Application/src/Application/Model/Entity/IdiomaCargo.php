<?php
/**
 * Objeto referente a la tabla de base de datos 'idioma_cargo'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto IdiomaCargo y el intercambio de información con el hydrator.
 */
class IdiomaCargo
{

    private $idi_id;

    private $car_id;

    private $idi_car_habla;

    private $idi_car_escribe;

    private $idi_car_lee;

    function __construct()
    {}

    /**
     *
     * @return the $idi_id
     */
    public function getIdi_id()
    {
        return $this->idi_id;
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
     * @return the $idi_car_habla
     */
    public function getIdi_car_habla()
    {
        return $this->idi_car_habla;
    }

    /**
     *
     * @return the $idi_car_escribe
     */
    public function getIdi_car_escribe()
    {
        return $this->idi_car_escribe;
    }

    /**
     *
     * @return the $idi_car_lee
     */
    public function getIdi_car_lee()
    {
        return $this->idi_car_lee;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $idi_id
     */
    public function setIdi_id($idi_id)
    {
        $this->idi_id = $idi_id;
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
     *            Ambigous <NULL, array> $idi_car_habla
     */
    public function setIdi_car_habla($idi_car_habla)
    {
        $this->idi_car_habla = $idi_car_habla;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $idi_car_escribe
     */
    public function setIdi_car_escribe($idi_car_escribe)
    {
        $this->idi_car_escribe = $idi_car_escribe;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $idi_car_lee
     */
    public function setIdi_car_lee($idi_car_lee)
    {
        $this->idi_car_lee = $idi_car_lee;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->idi_id = (isset($data['idi_id'])) ? $data['idi_id'] : null;
        $this->car_id = (isset($data['car_id'])) ? $data['car_id'] : null;
        $this->idi_car_habla = (isset($data['idi_car_habla'])) ? $data['idi_car_habla'] : null;
        $this->idi_car_escribe = (isset($data['idi_car_escribe'])) ? $data['idi_car_escribe'] : null;
        $this->idi_car_lee = (isset($data['idi_car_lee'])) ? $data['idi_car_lee'] : null;
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