<?php
/**
 * Objeto referente a la tabla de base de datos 'documento_proceso'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto DocumentoProceso y el intercambio de información con el hydrator.
 */
class DocumentoProceso
{

    private $doc_pro_id;

    private $pro_id;

    private $doc_id;

    private $doc_pro_version;

    function __construct()
    {}

    /**
     *
     * @return the $doc_pro_id
     */
    public function getDoc_pro_id()
    {
        return $this->doc_pro_id;
    }

    /**
     *
     * @return the $pro_id
     */
    public function getPro_id()
    {
        return $this->pro_id;
    }

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
     * @return the $doc_pro_version
     */
    public function getDoc_pro_version()
    {
        return $this->doc_pro_version;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $doc_pro_id
     */
    public function setDoc_pro_id($doc_pro_id)
    {
        $this->doc_pro_id = $doc_pro_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pro_id
     */
    public function setPro_id($pro_id)
    {
        $this->pro_id = $pro_id;
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
     *            Ambigous <NULL, array> $doc_pro_version
     */
    public function setDoc_pro_version($doc_pro_version)
    {
        $this->doc_pro_version = $doc_pro_version;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->doc_pro_id = (isset($data['doc_pro_id'])) ? $data['doc_pro_id'] : null;
        $this->pro_id = (isset($data['pro_id'])) ? $data['pro_id'] : null;
        $this->doc_id = (isset($data['doc_id'])) ? $data['doc_id'] : null;
        $this->doc_pro_version = (isset($data['doc_pro_version'])) ? $data['doc_pro_version'] : null;
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