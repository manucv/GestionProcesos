<?php
/**
 * Objeto referente a la tabla de base de datos 'recurso_proceso'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto RecursoProceso y el intercambio de información con el hydrator.
 */
class RecursoProceso
{

    private $rec_id;

    private $pro_id;

    private $rec_pro_cantidad;

    function __construct()
    {}

    /**
     *
     * @return the $rec_id
     */
    public function getRec_id()
    {
        return $this->rec_id;
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
     * @return the $rec_pro_cantidad
     */
    public function getRec_pro_cantidad()
    {
        return $this->rec_pro_cantidad;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rec_id
     */
    public function setRec_id($rec_id)
    {
        $this->rec_id = $rec_id;
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
     *            Ambigous <NULL, array> $rec_pro_cantidad
     */
    public function setRec_pro_cantidad($rec_pro_cantidad)
    {
        $this->rec_pro_cantidad = $rec_pro_cantidad;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->rec_id = (isset($data['rec_id'])) ? $data['rec_id'] : null;
        $this->pro_id = (isset($data['pro_id'])) ? $data['pro_id'] : null;
        $this->rec_pro_cantidad = (isset($data['rec_pro_cantidad'])) ? $data['rec_pro_cantidad'] : null;
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