<?php
/**
 * Objeto referente a la tabla de base de datos 'detalle_programa_proceso'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto DetalleProgramaProceso y el intercambio de información con el hydrator.
 */
class DetalleProgramaProceso
{

    private $det_pro_id;

    private $pro_id;

    function __construct()
    {}

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
     * @return the $pro_id
     */
    public function getPro_id()
    {
        return $this->pro_id;
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
     *            Ambigous <NULL, array> $pro_id
     */
    public function setPro_id($pro_id)
    {
        $this->pro_id = $pro_id;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->det_pro_id = (isset($data['det_pro_id'])) ? $data['det_pro_id'] : null;
        $this->pro_id = (isset($data['pro_id'])) ? $data['pro_id'] : null;
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