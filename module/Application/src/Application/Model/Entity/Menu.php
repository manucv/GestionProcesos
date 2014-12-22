<?php
/**
 * Objeto referente a la tabla de base de datos 'menu'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Menu y el intercambio de información con el hydrator.
 */
class Menu
{

    private $men_id;

    private $apl_id;

    private $men_id_padre;

    private $men_nombre;

    private $men_etiqueta;

    private $men_icon;

    private $men_divisor;

    function __construct()
    {}

    /**
     *
     * @return the $men_id
     */
    public function getMen_id()
    {
        return $this->men_id;
    }

    /**
     *
     * @return the $apl_id
     */
    public function getApl_id()
    {
        return $this->apl_id;
    }

    /**
     *
     * @return the $men_id_padre
     */
    public function getMen_id_padre()
    {
        return $this->men_id_padre;
    }

    /**
     *
     * @return the $men_nombre
     */
    public function getMen_nombre()
    {
        return $this->men_nombre;
    }

    /**
     *
     * @return the $men_etiqueta
     */
    public function getMen_etiqueta()
    {
        return $this->men_etiqueta;
    }

    /**
     *
     * @return the $men_icon
     */
    public function getMen_icon()
    {
        return $this->men_icon;
    }

    /**
     *
     * @return the $men_divisor
     */
    public function getMen_divisor()
    {
        return $this->men_divisor;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $men_id
     */
    public function setMen_id($men_id)
    {
        $this->men_id = $men_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $apl_id
     */
    public function setApl_id($apl_id)
    {
        $this->apl_id = $apl_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $men_id_padre
     */
    public function setMen_id_padre($men_id_padre)
    {
        $this->men_id_padre = $men_id_padre;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $men_nombre
     */
    public function setMen_nombre($men_nombre)
    {
        $this->men_nombre = $men_nombre;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $men_etiqueta
     */
    public function setMen_etiqueta($men_etiqueta)
    {
        $this->men_etiqueta = $men_etiqueta;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $men_icon
     */
    public function setMen_icon($men_icon)
    {
        $this->men_icon = $men_icon;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $men_divisor
     */
    public function setMen_divisor($men_divisor)
    {
        $this->men_divisor = $men_divisor;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->men_id = (isset($data['men_id'])) ? $data['men_id'] : null;
        $this->apl_id = (isset($data['apl_id'])) ? $data['apl_id'] : null;
        $this->men_id_padre = (isset($data['men_id_padre'])) ? $data['men_id_padre'] : null;
        $this->men_nombre = (isset($data['men_nombre'])) ? $data['men_nombre'] : null;
        $this->men_etiqueta = (isset($data['men_etiqueta'])) ? $data['men_etiqueta'] : null;
        $this->men_icon = (isset($data['men_icon'])) ? $data['men_icon'] : null;
        $this->men_divisor = (isset($data['men_divisor'])) ? $data['men_divisor'] : null;
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