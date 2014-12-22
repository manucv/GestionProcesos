<?php
/**
 * Objeto referente a la tabla de base de datos 'detalle_programa'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto DetallePrograma y el intercambio de información con el hydrator.
 */
class DetallePrograma
{

    private $det_pro_id;

    private $per_id;

    private $prg_id;

    private $det_pro_estado;

    private $det_pro_referencia;

    private $det_pro_descripcion;

    private $det_pro_fecha_inicio;

    private $det_pro_fecha_fin;

    private $det_pro_objetivo;

    private $det_pro_fecha_elaboracion;

    private $det_pro_alcance;

    private $det_pro_observacion;

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
     * @return the $per_id
     */
    public function getPer_id()
    {
        return $this->per_id;
    }

    /**
     *
     * @return the $prg_id
     */
    public function getPrg_id()
    {
        return $this->prg_id;
    }

    /**
     *
     * @return the $det_pro_estado
     */
    public function getDet_pro_estado()
    {
        return $this->det_pro_estado;
    }

    /**
     *
     * @return the $det_pro_referencia
     */
    public function getDet_pro_referencia()
    {
        return $this->det_pro_referencia;
    }

    /**
     *
     * @return the $det_pro_descripcion
     */
    public function getDet_pro_descripcion()
    {
        return $this->det_pro_descripcion;
    }

    /**
     *
     * @return the $det_pro_fecha_inicio
     */
    public function getDet_pro_fecha_inicio()
    {
        return $this->det_pro_fecha_inicio;
    }

    /**
     *
     * @return the $det_pro_fecha_fin
     */
    public function getDet_pro_fecha_fin()
    {
        return $this->det_pro_fecha_fin;
    }

    /**
     *
     * @return the $det_pro_objetivo
     */
    public function getDet_pro_objetivo()
    {
        return $this->det_pro_objetivo;
    }

    /**
     *
     * @return the $det_pro_fecha_elaboracion
     */
    public function getDet_pro_fecha_elaboracion()
    {
        return $this->det_pro_fecha_elaboracion;
    }

    /**
     *
     * @return the $det_pro_alcance
     */
    public function getDet_pro_alcance()
    {
        return $this->det_pro_alcance;
    }

    /**
     *
     * @return the $det_pro_observacion
     */
    public function getDet_pro_observacion()
    {
        return $this->det_pro_observacion;
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
     *            Ambigous <NULL, array> $per_id
     */
    public function setPer_id($per_id)
    {
        $this->per_id = $per_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prg_id
     */
    public function setPrg_id($prg_id)
    {
        $this->prg_id = $prg_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pro_estado
     */
    public function setDet_pro_estado($det_pro_estado)
    {
        $this->det_pro_estado = $det_pro_estado;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pro_referencia
     */
    public function setDet_pro_referencia($det_pro_referencia)
    {
        $this->det_pro_referencia = $det_pro_referencia;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pro_descripcion
     */
    public function setDet_pro_descripcion($det_pro_descripcion)
    {
        $this->det_pro_descripcion = $det_pro_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pro_fecha_inicio
     */
    public function setDet_pro_fecha_inicio($det_pro_fecha_inicio)
    {
        $this->det_pro_fecha_inicio = $det_pro_fecha_inicio;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pro_fecha_fin
     */
    public function setDet_pro_fecha_fin($det_pro_fecha_fin)
    {
        $this->det_pro_fecha_fin = $det_pro_fecha_fin;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pro_objetivo
     */
    public function setDet_pro_objetivo($det_pro_objetivo)
    {
        $this->det_pro_objetivo = $det_pro_objetivo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pro_fecha_elaboracion
     */
    public function setDet_pro_fecha_elaboracion($det_pro_fecha_elaboracion)
    {
        $this->det_pro_fecha_elaboracion = $det_pro_fecha_elaboracion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pro_alcance
     */
    public function setDet_pro_alcance($det_pro_alcance)
    {
        $this->det_pro_alcance = $det_pro_alcance;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pro_observacion
     */
    public function setDet_pro_observacion($det_pro_observacion)
    {
        $this->det_pro_observacion = $det_pro_observacion;
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
        $this->per_id = (isset($data['per_id'])) ? $data['per_id'] : null;
        $this->prg_id = (isset($data['prg_id'])) ? $data['prg_id'] : null;
        $this->det_pro_estado = (isset($data['det_pro_estado'])) ? $data['det_pro_estado'] : null;
        $this->det_pro_referencia = (isset($data['det_pro_referencia'])) ? $data['det_pro_referencia'] : null;
        $this->det_pro_descripcion = (isset($data['det_pro_descripcion'])) ? $data['det_pro_descripcion'] : null;
        $this->det_pro_fecha_inicio = (isset($data['det_pro_fecha_inicio'])) ? $data['det_pro_fecha_inicio'] : null;
        $this->det_pro_fecha_fin = (isset($data['det_pro_fecha_fin'])) ? $data['det_pro_fecha_fin'] : null;
        $this->det_pro_objetivo = (isset($data['det_pro_objetivo'])) ? $data['det_pro_objetivo'] : null;
        $this->det_pro_fecha_elaboracion = (isset($data['det_pro_fecha_elaboracion'])) ? $data['det_pro_fecha_elaboracion'] : null;
        $this->det_pro_alcance = (isset($data['det_pro_alcance'])) ? $data['det_pro_alcance'] : null;
        $this->det_pro_observacion = (isset($data['det_pro_observacion'])) ? $data['det_pro_observacion'] : null;
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