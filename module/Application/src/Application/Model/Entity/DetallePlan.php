<?php
/**
 * Objeto referente a la tabla de base de datos 'detalle_plan'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto DetallePlan y el intercambio de información con el hydrator.
 */
class DetallePlan
{

    private $det_pla_id;

    private $pro_id;

    private $det_pro_id;

    private $det_pla_estado_plan;

    private $det_pla_actividad;

    private $det_pla_fecha_inicio;

    private $det_pla_fecha_fin;

    private $det_pla_documentos_registrados;

    private $det_pla_observaciones;

    function __construct()
    {}

    /**
     *
     * @return the $det_pla_id
     */
    public function getDet_pla_id()
    {
        return $this->det_pla_id;
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
     * @return the $det_pro_id
     */
    public function getDet_pro_id()
    {
        return $this->det_pro_id;
    }

    /**
     *
     * @return the $det_pla_estado_plan
     */
    public function getDet_pla_estado_plan()
    {
        return $this->det_pla_estado_plan;
    }

    /**
     *
     * @return the $det_pla_actividad
     */
    public function getDet_pla_actividad()
    {
        return $this->det_pla_actividad;
    }

    /**
     *
     * @return the $det_pla_fecha_inicio
     */
    public function getDet_pla_fecha_inicio()
    {
        return $this->det_pla_fecha_inicio;
    }

    /**
     *
     * @return the $det_pla_fecha_fin
     */
    public function getDet_pla_fecha_fin()
    {
        return $this->det_pla_fecha_fin;
    }

    /**
     *
     * @return the $det_pla_documentos_registrados
     */
    public function getDet_pla_documentos_registrados()
    {
        return $this->det_pla_documentos_registrados;
    }

    /**
     *
     * @return the $det_pla_observaciones
     */
    public function getDet_pla_observaciones()
    {
        return $this->det_pla_observaciones;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pla_id
     */
    public function setDet_pla_id($det_pla_id)
    {
        $this->det_pla_id = $det_pla_id;
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
     *            Ambigous <NULL, array> $det_pro_id
     */
    public function setDet_pro_id($det_pro_id)
    {
        $this->det_pro_id = $det_pro_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pla_estado_plan
     */
    public function setDet_pla_estado_plan($det_pla_estado_plan)
    {
        $this->det_pla_estado_plan = $det_pla_estado_plan;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pla_actividad
     */
    public function setDet_pla_actividad($det_pla_actividad)
    {
        $this->det_pla_actividad = $det_pla_actividad;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pla_fecha_inicio
     */
    public function setDet_pla_fecha_inicio($det_pla_fecha_inicio)
    {
        $this->det_pla_fecha_inicio = $det_pla_fecha_inicio;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pla_fecha_fin
     */
    public function setDet_pla_fecha_fin($det_pla_fecha_fin)
    {
        $this->det_pla_fecha_fin = $det_pla_fecha_fin;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pla_documentos_registrados
     */
    public function setDet_pla_documentos_registrados($det_pla_documentos_registrados)
    {
        $this->det_pla_documentos_registrados = $det_pla_documentos_registrados;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pla_observaciones
     */
    public function setDet_pla_observaciones($det_pla_observaciones)
    {
        $this->det_pla_observaciones = $det_pla_observaciones;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->det_pla_id = (isset($data['det_pla_id'])) ? $data['det_pla_id'] : null;
        $this->pro_id = (isset($data['pro_id'])) ? $data['pro_id'] : null;
        $this->det_pro_id = (isset($data['det_pro_id'])) ? $data['det_pro_id'] : null;
        $this->det_pla_estado_plan = (isset($data['det_pla_estado_plan'])) ? $data['det_pla_estado_plan'] : null;
        $this->det_pla_actividad = (isset($data['det_pla_actividad'])) ? $data['det_pla_actividad'] : null;
        $this->det_pla_fecha_inicio = (isset($data['det_pla_fecha_inicio'])) ? $data['det_pla_fecha_inicio'] : null;
        $this->det_pla_fecha_fin = (isset($data['det_pla_fecha_fin'])) ? $data['det_pla_fecha_fin'] : null;
        $this->det_pla_documentos_registrados = (isset($data['det_pla_documentos_registrados'])) ? $data['det_pla_documentos_registrados'] : null;
        $this->det_pla_observaciones = (isset($data['det_pla_observaciones'])) ? $data['det_pla_observaciones'] : null;
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