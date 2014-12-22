<?php
/**
 * Objeto referente a la tabla de base de datos 'aplicacion'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Aplicacion y el intercambio de información con el hydrator.
 */
class Aplicacion
{

    private $apl_id;

    private $apl_descripcion;

    private $apl_nombre;

    private $mod_id;

    function __construct()
    {}

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
     * @return the $apl_descripcion
     */
    public function getApl_descripcion()
    {
        return $this->apl_descripcion;
    }

    /**
     *
     * @return the $apl_nombre
     */
    public function getApl_nombre()
    {
        return $this->apl_nombre;
    }

    /**
     *
     * @return the $mod_id
     */
    public function getMod_id()
    {
        return $this->mod_id;
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
     *            Ambigous <NULL, array> $apl_descripcion
     */
    public function setApl_descripcion($apl_descripcion)
    {
        $this->apl_descripcion = $apl_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $apl_nombre
     */
    public function setApl_nombre($apl_nombre)
    {
        $this->apl_nombre = $apl_nombre;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $mod_id
     */
    public function setMod_id($mod_id)
    {
        $this->mod_id = $mod_id;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->apl_id = (isset($data['apl_id'])) ? $data['apl_id'] : null;
        $this->apl_descripcion = (isset($data['apl_descripcion'])) ? $data['apl_descripcion'] : null;
        $this->apl_nombre = (isset($data['apl_nombre'])) ? $data['apl_nombre'] : null;
        $this->mod_id = (isset($data['mod_id'])) ? $data['mod_id'] : null;
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