<?php
/**
 * Objeto referente a la tabla de base de datos 'tipo_documento'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto TipoDocumento y el intercambio de información con el hydrator.
 */
class TipoDocumento
{

    private $tip_doc_id;

    private $tip_doc_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $tip_doc_id
     */
    public function getTip_doc_id()
    {
        return $this->tip_doc_id;
    }

    /**
     *
     * @return the $tip_doc_descripcion
     */
    public function getTip_doc_descripcion()
    {
        return $this->tip_doc_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $tip_doc_id
     */
    public function setTip_doc_id($tip_doc_id)
    {
        $this->tip_doc_id = $tip_doc_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $tip_doc_descripcion
     */
    public function setTip_doc_descripcion($tip_doc_descripcion)
    {
        $this->tip_doc_descripcion = $tip_doc_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->tip_doc_id = (isset($data['tip_doc_id'])) ? $data['tip_doc_id'] : null;
        $this->tip_doc_descripcion = (isset($data['tip_doc_descripcion'])) ? $data['tip_doc_descripcion'] : null;
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