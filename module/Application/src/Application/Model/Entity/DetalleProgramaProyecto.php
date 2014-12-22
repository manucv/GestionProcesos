<?php
/**
 * Objeto referente a la tabla de base de datos 'detalle_programa_proyecto'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto DetalleProgramaProyecto y el intercambio de información con el hydrator.
 */
class DetalleProgramaProyecto
{

    private $det_pro_id;

    private $pry_id;

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
     * @return the $pry_id
     */
    public function getPry_id()
    {
        return $this->pry_id;
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
     *            Ambigous <NULL, array> $pry_id
     */
    public function setPry_id($pry_id)
    {
        $this->pry_id = $pry_id;
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
        $this->pry_id = (isset($data['pry_id'])) ? $data['pry_id'] : null;
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