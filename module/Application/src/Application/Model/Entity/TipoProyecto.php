<?php
/**
 * Objeto referente a la tabla de base de datos 'tipo_proyecto'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto TipoProyecto y el intercambio de información con el hydrator.
 */
class TipoProyecto
{

    private $tip_pro_id;

    private $tip_pro_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $tip_pro_id
     */
    public function getTip_pro_id()
    {
        return $this->tip_pro_id;
    }

    /**
     *
     * @return the $tip_pro_descripcion
     */
    public function getTip_pro_descripcion()
    {
        return $this->tip_pro_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $tip_pro_id
     */
    public function setTip_pro_id($tip_pro_id)
    {
        $this->tip_pro_id = $tip_pro_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $tip_pro_descripcion
     */
    public function setTip_pro_descripcion($tip_pro_descripcion)
    {
        $this->tip_pro_descripcion = $tip_pro_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->tip_pro_id = (isset($data['tip_pro_id'])) ? $data['tip_pro_id'] : null;
        $this->tip_pro_descripcion = (isset($data['tip_pro_descripcion'])) ? $data['tip_pro_descripcion'] : null;
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