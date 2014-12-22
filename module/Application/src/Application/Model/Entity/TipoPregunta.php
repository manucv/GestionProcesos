<?php
/**
 * Objeto referente a la tabla de base de datos 'tipo_pregunta'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto TipoPregunta y el intercambio de información con el hydrator.
 */
class TipoPregunta
{

    private $tip_pre_id;

    private $tip_pre_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $tip_pre_id
     */
    public function getTip_pre_id()
    {
        return $this->tip_pre_id;
    }

    /**
     *
     * @return the $tip_pre_descripcion
     */
    public function getTip_pre_descripcion()
    {
        return $this->tip_pre_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $tip_pre_id
     */
    public function setTip_pre_id($tip_pre_id)
    {
        $this->tip_pre_id = $tip_pre_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $tip_pre_descripcion
     */
    public function setTip_pre_descripcion($tip_pre_descripcion)
    {
        $this->tip_pre_descripcion = $tip_pre_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->tip_pre_id = (isset($data['tip_pre_id'])) ? $data['tip_pre_id'] : null;
        $this->tip_pre_descripcion = (isset($data['tip_pre_descripcion'])) ? $data['tip_pre_descripcion'] : null;
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