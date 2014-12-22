<?php
/**
 * Objeto referente a la tabla de base de datos 'detalle_accion'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto DetalleAccion y el intercambio de información con el hydrator.
 */
class DetalleAccion
{

    private $det_acc_id;

    private $acc_id;

    private $per_id;

    private $det_acc_actividad;

    private $det_acc_fecha_inicio;

    private $det_acc_fecha_fin;

    private $det_acc_fecha_avance;

    private $det_acc_porcentaje_avance;

    function __construct()
    {}

    /**
     *
     * @return the $det_acc_id
     */
    public function getDet_acc_id()
    {
        return $this->det_acc_id;
    }

    /**
     *
     * @return the $acc_id
     */
    public function getAcc_id()
    {
        return $this->acc_id;
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
     * @return the $det_acc_actividad
     */
    public function getDet_acc_actividad()
    {
        return $this->det_acc_actividad;
    }

    /**
     *
     * @return the $det_acc_fecha_inicio
     */
    public function getDet_acc_fecha_inicio()
    {
        return $this->det_acc_fecha_inicio;
    }

    /**
     *
     * @return the $det_acc_fecha_fin
     */
    public function getDet_acc_fecha_fin()
    {
        return $this->det_acc_fecha_fin;
    }

    /**
     *
     * @return the $det_acc_fecha_avance
     */
    public function getDet_acc_fecha_avance()
    {
        return $this->det_acc_fecha_avance;
    }

    /**
     *
     * @return the $det_acc_porcentaje_avance
     */
    public function getDet_acc_porcentaje_avance()
    {
        return $this->det_acc_porcentaje_avance;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_acc_id
     */
    public function setDet_acc_id($det_acc_id)
    {
        $this->det_acc_id = $det_acc_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $acc_id
     */
    public function setAcc_id($acc_id)
    {
        $this->acc_id = $acc_id;
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
     *            Ambigous <NULL, array> $det_acc_actividad
     */
    public function setDet_acc_actividad($det_acc_actividad)
    {
        $this->det_acc_actividad = $det_acc_actividad;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_acc_fecha_inicio
     */
    public function setDet_acc_fecha_inicio($det_acc_fecha_inicio)
    {
        $this->det_acc_fecha_inicio = $det_acc_fecha_inicio;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_acc_fecha_fin
     */
    public function setDet_acc_fecha_fin($det_acc_fecha_fin)
    {
        $this->det_acc_fecha_fin = $det_acc_fecha_fin;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_acc_fecha_avance
     */
    public function setDet_acc_fecha_avance($det_acc_fecha_avance)
    {
        $this->det_acc_fecha_avance = $det_acc_fecha_avance;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_acc_porcentaje_avance
     */
    public function setDet_acc_porcentaje_avance($det_acc_porcentaje_avance)
    {
        $this->det_acc_porcentaje_avance = $det_acc_porcentaje_avance;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->det_acc_id = (isset($data['det_acc_id'])) ? $data['det_acc_id'] : null;
        $this->acc_id = (isset($data['acc_id'])) ? $data['acc_id'] : null;
        $this->per_id = (isset($data['per_id'])) ? $data['per_id'] : null;
        $this->det_acc_actividad = (isset($data['det_acc_actividad'])) ? $data['det_acc_actividad'] : null;
        $this->det_acc_fecha_inicio = (isset($data['det_acc_fecha_inicio'])) ? $data['det_acc_fecha_inicio'] : null;
        $this->det_acc_fecha_fin = (isset($data['det_acc_fecha_fin'])) ? $data['det_acc_fecha_fin'] : null;
        $this->det_acc_fecha_avance = (isset($data['det_acc_fecha_avance'])) ? $data['det_acc_fecha_avance'] : null;
        $this->det_acc_porcentaje_avance = (isset($data['det_acc_porcentaje_avance'])) ? $data['det_acc_porcentaje_avance'] : null;
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