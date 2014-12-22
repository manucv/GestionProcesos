<?php
/**
 * Objeto referente a la tabla de base de datos 'programa'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Programa y el intercambio de información con el hydrator.
 */
class Programa
{

    private $prg_id;

    private $prg_estado_programa;

    private $per_id;

    private $prg_referencia;

    private $prg_descripcion;

    private $prg_ejecucion_desde;

    private $prg_ejecucion_hasta;

    private $prg_elaboracion;

    private $prg_criterios_auditoria;

    private $prg_objetivo;

    private $prg_alcance;

    private $prg_metodologia;

    private $prg_documentacion;

    private $prg_fecha_reunion_apertura;

    private $prg_fecha_reunion_cierre;

    private $prg_observacion;

    function __construct()
    {}

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
     * @return the $prg_estado_programa
     */
    public function getPrg_estado_programa()
    {
        return $this->prg_estado_programa;
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
     * @return the $prg_referencia
     */
    public function getPrg_referencia()
    {
        return $this->prg_referencia;
    }

    /**
     *
     * @return the $prg_descripcion
     */
    public function getPrg_descripcion()
    {
        return $this->prg_descripcion;
    }

    /**
     *
     * @return the $prg_ejecucion_desde
     */
    public function getPrg_ejecucion_desde()
    {
        return $this->prg_ejecucion_desde;
    }

    /**
     *
     * @return the $prg_ejecucion_hasta
     */
    public function getPrg_ejecucion_hasta()
    {
        return $this->prg_ejecucion_hasta;
    }

    /**
     *
     * @return the $prg_elaboracion
     */
    public function getPrg_elaboracion()
    {
        return $this->prg_elaboracion;
    }

    /**
     *
     * @return the $prg_criterios_auditoria
     */
    public function getPrg_criterios_auditoria()
    {
        return $this->prg_criterios_auditoria;
    }

    /**
     *
     * @return the $prg_objetivo
     */
    public function getPrg_objetivo()
    {
        return $this->prg_objetivo;
    }

    /**
     *
     * @return the $prg_alcance
     */
    public function getPrg_alcance()
    {
        return $this->prg_alcance;
    }

    /**
     *
     * @return the $prg_metodologia
     */
    public function getPrg_metodologia()
    {
        return $this->prg_metodologia;
    }

    /**
     *
     * @return the $prg_documentacion
     */
    public function getPrg_documentacion()
    {
        return $this->prg_documentacion;
    }

    /**
     *
     * @return the $prg_fecha_reunion_apertura
     */
    public function getPrg_fecha_reunion_apertura()
    {
        return $this->prg_fecha_reunion_apertura;
    }

    /**
     *
     * @return the $prg_fecha_reunion_cierre
     */
    public function getPrg_fecha_reunion_cierre()
    {
        return $this->prg_fecha_reunion_cierre;
    }

    /**
     *
     * @return the $prg_observacion
     */
    public function getPrg_observacion()
    {
        return $this->prg_observacion;
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
     *            Ambigous <NULL, array> $prg_estado_programa
     */
    public function setPrg_estado_programa($prg_estado_programa)
    {
        $this->prg_estado_programa = $prg_estado_programa;
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
     *            Ambigous <NULL, array> $prg_referencia
     */
    public function setPrg_referencia($prg_referencia)
    {
        $this->prg_referencia = $prg_referencia;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prg_descripcion
     */
    public function setPrg_descripcion($prg_descripcion)
    {
        $this->prg_descripcion = $prg_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prg_ejecucion_desde
     */
    public function setPrg_ejecucion_desde($prg_ejecucion_desde)
    {
        $this->prg_ejecucion_desde = $prg_ejecucion_desde;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prg_ejecucion_hasta
     */
    public function setPrg_ejecucion_hasta($prg_ejecucion_hasta)
    {
        $this->prg_ejecucion_hasta = $prg_ejecucion_hasta;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prg_elaboracion
     */
    public function setPrg_elaboracion($prg_elaboracion)
    {
        $this->prg_elaboracion = $prg_elaboracion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prg_criterios_auditoria
     */
    public function setPrg_criterios_auditoria($prg_criterios_auditoria)
    {
        $this->prg_criterios_auditoria = $prg_criterios_auditoria;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prg_objetivo
     */
    public function setPrg_objetivo($prg_objetivo)
    {
        $this->prg_objetivo = $prg_objetivo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prg_alcance
     */
    public function setPrg_alcance($prg_alcance)
    {
        $this->prg_alcance = $prg_alcance;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prg_metodologia
     */
    public function setPrg_metodologia($prg_metodologia)
    {
        $this->prg_metodologia = $prg_metodologia;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prg_documentacion
     */
    public function setPrg_documentacion($prg_documentacion)
    {
        $this->prg_documentacion = $prg_documentacion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prg_fecha_reunion_apertura
     */
    public function setPrg_fecha_reunion_apertura($prg_fecha_reunion_apertura)
    {
        $this->prg_fecha_reunion_apertura = $prg_fecha_reunion_apertura;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prg_fecha_reunion_cierre
     */
    public function setPrg_fecha_reunion_cierre($prg_fecha_reunion_cierre)
    {
        $this->prg_fecha_reunion_cierre = $prg_fecha_reunion_cierre;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prg_observacion
     */
    public function setPrg_observacion($prg_observacion)
    {
        $this->prg_observacion = $prg_observacion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->prg_id = (isset($data['prg_id'])) ? $data['prg_id'] : null;
        $this->prg_estado_programa = (isset($data['prg_estado_programa'])) ? $data['prg_estado_programa'] : null;
        
        $this->per_id = (isset($data['per_id'])) ? $data['per_id'] : null;
        $this->prg_referencia = (isset($data['prg_referencia'])) ? $data['prg_referencia'] : null;
        $this->prg_descripcion = (isset($data['prg_descripcion'])) ? $data['prg_descripcion'] : null;
        $this->prg_ejecucion_desde = (isset($data['prg_ejecucion_desde'])) ? $data['prg_ejecucion_desde'] : null;
        $this->prg_ejecucion_hasta = (isset($data['prg_ejecucion_hasta'])) ? $data['prg_ejecucion_hasta'] : null;
        $this->prg_elaboracion = (isset($data['prg_elaboracion'])) ? $data['prg_elaboracion'] : null;
        $this->prg_criterios_auditoria = (isset($data['prg_criterios_auditoria'])) ? $data['prg_criterios_auditoria'] : null;
        $this->prg_objetivo = (isset($data['prg_objetivo'])) ? $data['prg_objetivo'] : null;
        $this->prg_alcance = (isset($data['prg_alcance'])) ? $data['prg_alcance'] : null;
        $this->prg_metodologia = (isset($data['prg_metodologia'])) ? $data['prg_metodologia'] : null;
        $this->prg_documentacion = (isset($data['prg_documentacion'])) ? $data['prg_documentacion'] : null;
        $this->prg_fecha_reunion_apertura = (isset($data['prg_fecha_reunion_apertura'])) ? $data['prg_fecha_reunion_apertura'] : null;
        $this->prg_fecha_reunion_cierre = (isset($data['prg_fecha_reunion_cierre'])) ? $data['prg_fecha_reunion_cierre'] : null;
        $this->prg_observacion = (isset($data['prg_observacion'])) ? $data['prg_observacion'] : null;
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