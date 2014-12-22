<?php
/**
 * Objeto referente a la tabla de base de datos 'documento'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Documento y el intercambio de información con el hydrator.
 */
class Documento
{

    private $doc_id;

    private $tip_doc_id;

    private $doc_descripcion;

    private $doc_vigencia;

    private $doc_path;

    function __construct()
    {}

    /**
     *
     * @return the $doc_id
     */
    public function getDoc_id()
    {
        return $this->doc_id;
    }

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
     * @return the $doc_descripcion
     */
    public function getDoc_descripcion()
    {
        return $this->doc_descripcion;
    }

    /**
     *
     * @return the $doc_vigencia
     */
    public function getDoc_vigencia()
    {
        return $this->doc_vigencia;
    }

    /**
     *
     * @return the $doc_path
     */
    public function getDoc_path()
    {
        return $this->doc_path;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $doc_id
     */
    public function setDoc_id($doc_id)
    {
        $this->doc_id = $doc_id;
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
     *            Ambigous <NULL, array> $doc_descripcion
     */
    public function setDoc_descripcion($doc_descripcion)
    {
        $this->doc_descripcion = $doc_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $doc_vigencia
     */
    public function setDoc_vigencia($doc_vigencia)
    {
        $this->doc_vigencia = $doc_vigencia;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $doc_path
     */
    public function setDoc_path($doc_path)
    {
        $this->doc_path = $doc_path;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->doc_id = (isset($data['doc_id'])) ? $data['doc_id'] : null;
        $this->tip_doc_id = (isset($data['tip_doc_id'])) ? $data['tip_doc_id'] : null;
        $this->doc_descripcion = (isset($data['doc_descripcion'])) ? $data['doc_descripcion'] : null;
        $this->doc_vigencia = (isset($data['doc_vigencia'])) ? $data['doc_vigencia'] : null;
        $this->doc_path = (isset($data['doc_path'])) ? $data['doc_path'] : null;
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