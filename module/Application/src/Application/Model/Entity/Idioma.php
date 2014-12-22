<?php
/**
 * Objeto referente a la tabla de base de datos 'idioma'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Idioma y el intercambio de información con el hydrator.
 */
class Idioma
{

    private $idi_id;

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
     * @param
     *            Ambigous <NULL, array> $idi_id
     */
    public function setIdi_id($idi_id)
    {
        $this->idi_id = $idi_id;
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