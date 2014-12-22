<?php
/**
 * Objeto referente a la tabla de base de datos 'rol_aplicacion'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto RolAplicacion y el intercambio de información con el hydrator.
 */
class RolAplicacion
{

    private $apl_id;

    private $rol_id;

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
     * @return the $rol_id
     */
    public function getRol_id()
    {
        return $this->rol_id;
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
     *            Ambigous <NULL, array> $rol_id
     */
    public function setRol_id($rol_id)
    {
        $this->rol_id = $rol_id;
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
        $this->rol_id = (isset($data['rol_id'])) ? $data['rol_id'] : null;
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