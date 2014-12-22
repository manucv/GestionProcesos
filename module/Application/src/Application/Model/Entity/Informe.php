<?php
/**
 * Objeto referente a la tabla de base de datos 'informe'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Informe y el intercambio de información con el hydrator.
 */
class Informe
{

    private $inf_id;

    private $det_pro_id;

    private $inf_descripcion;

    private $inf_informe;

    function __construct()
    {}

    /**
     *
     * @return the $inf_id
     */
    public function getInf_id()
    {
        return $this->inf_id;
    }

    /**
     *
     * @return the $det_pro_id
     */
    public function getDet_pro_id()
    {
        return $this->det_pro_id;
    }

    /**
     *
     * @return the $inf_descripcion
     */
    public function getInf_descripcion()
    {
        return $this->inf_descripcion;
    }

    /**
     *
     * @return the $inf_informe
     */
    public function getInf_informe()
    {
        return $this->inf_informe;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $inf_id
     */
    public function setInf_id($inf_id)
    {
        $this->inf_id = $inf_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pro_id
     */
    public function setDet_pro_id($det_pro_id)
    {
        $this->det_pro_id = $det_pro_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $inf_descripcion
     */
    public function setInf_descripcion($inf_descripcion)
    {
        $this->inf_descripcion = $inf_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $inf_informe
     */
    public function setInf_informe($inf_informe)
    {
        $this->inf_informe = $inf_informe;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->inf_id = (isset($data['inf_id'])) ? $data['inf_id'] : null;
        $this->det_pro_id = (isset($data['det_pro_id'])) ? $data['det_pro_id'] : null;
        $this->inf_descripcion = (isset($data['inf_descripcion'])) ? $data['inf_descripcion'] : null;
        $this->inf_informe = (isset($data['inf_informe'])) ? $data['inf_informe'] : null;
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