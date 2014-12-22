<?php
/**
 * Objeto referente a la tabla de base de datos 'responsable_proceso'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto ResponsableProceso y el intercambio de información con el hydrator.
 */
class ResponsableProceso
{

    private $pro_id;

    private $per_id;

    private $res_pro_tipo;

    function __construct()
    {}

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
     * @return the $per_id
     */
    public function getPer_id()
    {
        return $this->per_id;
    }

    /**
     *
     * @return the $res_pro_tipo
     */
    public function getRes_pro_tipo()
    {
        return $this->res_pro_tipo;
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
     *            Ambigous <NULL, array> $per_id
     */
    public function setPer_id($per_id)
    {
        $this->per_id = $per_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $res_pro_tipo
     */
    public function setRes_pro_tipo($res_pro_tipo)
    {
        $this->res_pro_tipo = $res_pro_tipo;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->pro_id = (isset($data['pro_id'])) ? $data['pro_id'] : null;
        $this->per_id = (isset($data['per_id'])) ? $data['per_id'] : null;
        $this->res_pro_tipo = (isset($data['res_pro_tipo'])) ? $data['res_pro_tipo'] : null;
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