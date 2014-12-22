<?php
/**
 * Objeto referente a la tabla de base de datos 'accion'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Accion y el intercambio de información con el hydrator.
 */
class Accion
{

    private $acc_id;

    private $acc_eva_id;

    private $nor_id;

    private $mot_id;

    private $lis_ver_id;

    private $pro_id;

    private $acc_tipo_hallazgo;

    private $acc_estado_accion;

    private $acc_tipo_accion;

    private $acc_referencia;

    private $acc_fecha_apertura;

    private $acc_fecha_cierre;

    private $acc_hallazgo;

    private $acc_correccion;

    private $acc_analisis_causa;

    private $acc_criterio_cierre;

    private $acc_aprobacion;

    private $acc_fecha_aprobacion;

    private $acc_fecha_verificacion;

    function __construct()
    {}

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
     * @return the $acc_eva_id
     */
    public function getAcc_eva_id()
    {
        return $this->acc_eva_id;
    }

    /**
     *
     * @return the $nor_id
     */
    public function getNor_id()
    {
        return $this->nor_id;
    }

    /**
     *
     * @return the $mot_id
     */
    public function getMot_id()
    {
        return $this->mot_id;
    }

    /**
     *
     * @return the $lis_ver_id
     */
    public function getLis_ver_id()
    {
        return $this->lis_ver_id;
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
     * @return the $acc_tipo_hallazgo
     */
    public function getAcc_tipo_hallazgo()
    {
        return $this->acc_tipo_hallazgo;
    }

    /**
     *
     * @return the $acc_estado_accion
     */
    public function getAcc_estado_accion()
    {
        return $this->acc_estado_accion;
    }

    /**
     *
     * @return the $acc_tipo_accion
     */
    public function getAcc_tipo_accion()
    {
        return $this->acc_tipo_accion;
    }

    /**
     *
     * @return the $acc_referencia
     */
    public function getAcc_referencia()
    {
        return $this->acc_referencia;
    }

    /**
     *
     * @return the $acc_fecha_apertura
     */
    public function getAcc_fecha_apertura()
    {
        return $this->acc_fecha_apertura;
    }

    /**
     *
     * @return the $acc_fecha_cierre
     */
    public function getAcc_fecha_cierre()
    {
        return $this->acc_fecha_cierre;
    }

    /**
     *
     * @return the $acc_hallazgo
     */
    public function getAcc_hallazgo()
    {
        return $this->acc_hallazgo;
    }

    /**
     *
     * @return the $acc_correccion
     */
    public function getAcc_correccion()
    {
        return $this->acc_correccion;
    }

    /**
     *
     * @return the $acc_analisis_causa
     */
    public function getAcc_analisis_causa()
    {
        return $this->acc_analisis_causa;
    }

    /**
     *
     * @return the $acc_criterio_cierre
     */
    public function getAcc_criterio_cierre()
    {
        return $this->acc_criterio_cierre;
    }

    /**
     *
     * @return the $acc_aprobacion
     */
    public function getAcc_aprobacion()
    {
        return $this->acc_aprobacion;
    }

    /**
     *
     * @return the $acc_fecha_aprobacion
     */
    public function getAcc_fecha_aprobacion()
    {
        return $this->acc_fecha_aprobacion;
    }

    /**
     *
     * @return the $acc_fecha_verificacion
     */
    public function getAcc_fecha_verificacion()
    {
        return $this->acc_fecha_verificacion;
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
     *            Ambigous <NULL, array> $acc_eva_id
     */
    public function setAcc_eva_id($acc_eva_id)
    {
        $this->acc_eva_id = $acc_eva_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $nor_id
     */
    public function setNor_id($nor_id)
    {
        $this->nor_id = $nor_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $mot_id
     */
    public function setMot_id($mot_id)
    {
        $this->mot_id = $mot_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $lis_ver_id
     */
    public function setLis_ver_id($lis_ver_id)
    {
        $this->lis_ver_id = $lis_ver_id;
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
     *            Ambigous <NULL, array> $acc_tipo_hallazgo
     */
    public function setAcc_tipo_hallazgo($acc_tipo_hallazgo)
    {
        $this->acc_tipo_hallazgo = $acc_tipo_hallazgo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $acc_estado_accion
     */
    public function setAcc_estado_accion($acc_estado_accion)
    {
        $this->acc_estado_accion = $acc_estado_accion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $acc_tipo_accion
     */
    public function setAcc_tipo_accion($acc_tipo_accion)
    {
        $this->acc_tipo_accion = $acc_tipo_accion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $acc_referencia
     */
    public function setAcc_referencia($acc_referencia)
    {
        $this->acc_referencia = $acc_referencia;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $acc_fecha_apertura
     */
    public function setAcc_fecha_apertura($acc_fecha_apertura)
    {
        $this->acc_fecha_apertura = $acc_fecha_apertura;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $acc_fecha_cierre
     */
    public function setAcc_fecha_cierre($acc_fecha_cierre)
    {
        $this->acc_fecha_cierre = $acc_fecha_cierre;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $acc_hallazgo
     */
    public function setAcc_hallazgo($acc_hallazgo)
    {
        $this->acc_hallazgo = $acc_hallazgo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $acc_correccion
     */
    public function setAcc_correccion($acc_correccion)
    {
        $this->acc_correccion = $acc_correccion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $acc_analisis_causa
     */
    public function setAcc_analisis_causa($acc_analisis_causa)
    {
        $this->acc_analisis_causa = $acc_analisis_causa;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $acc_criterio_cierre
     */
    public function setAcc_criterio_cierre($acc_criterio_cierre)
    {
        $this->acc_criterio_cierre = $acc_criterio_cierre;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $acc_aprobacion
     */
    public function setAcc_aprobacion($acc_aprobacion)
    {
        $this->acc_aprobacion = $acc_aprobacion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $acc_fecha_aprobacion
     */
    public function setAcc_fecha_aprobacion($acc_fecha_aprobacion)
    {
        $this->acc_fecha_aprobacion = $acc_fecha_aprobacion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $acc_fecha_verificacion
     */
    public function setAcc_fecha_verificacion($acc_fecha_verificacion)
    {
        $this->acc_fecha_verificacion = $acc_fecha_verificacion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->acc_id = (isset($data['acc_id'])) ? $data['acc_id'] : null;
        $this->acc_eva_id = (isset($data['acc_eva_id'])) ? $data['acc_eva_id'] : null;
        $this->nor_id = (isset($data['nor_id'])) ? $data['nor_id'] : null;
        $this->mot_id = (isset($data['mot_id'])) ? $data['mot_id'] : null;
        $this->lis_ver_id = (isset($data['lis_ver_id'])) ? $data['lis_ver_id'] : null;
        $this->pro_id = (isset($data['pro_id'])) ? $data['pro_id'] : null;
        $this->acc_tipo_hallazgo = (isset($data['acc_tipo_hallazgo'])) ? $data['acc_tipo_hallazgo'] : null;
        $this->acc_estado_accion = (isset($data['acc_estado_accion'])) ? $data['acc_estado_accion'] : null;
        $this->acc_tipo_accion = (isset($data['acc_tipo_accion'])) ? $data['acc_tipo_accion'] : null;
        $this->acc_referencia = (isset($data['acc_referencia'])) ? $data['acc_referencia'] : null;
        $this->acc_fecha_apertura = (isset($data['acc_fecha_apertura'])) ? $data['acc_fecha_apertura'] : null;
        $this->acc_fecha_cierre = (isset($data['acc_fecha_cierre'])) ? $data['acc_fecha_cierre'] : null;
        $this->acc_hallazgo = (isset($data['acc_hallazgo'])) ? $data['acc_hallazgo'] : null;
        $this->acc_correccion = (isset($data['acc_correccion'])) ? $data['acc_correccion'] : null;
        $this->acc_analisis_causa = (isset($data['acc_analisis_causa'])) ? $data['acc_analisis_causa'] : null;
        $this->acc_criterio_cierre = (isset($data['acc_criterio_cierre'])) ? $data['acc_criterio_cierre'] : null;
        $this->acc_aprobacion = (isset($data['acc_aprobacion'])) ? $data['acc_aprobacion'] : null;
        $this->acc_fecha_aprobacion = (isset($data['acc_fecha_aprobacion'])) ? $data['acc_fecha_aprobacion'] : null;
        $this->acc_fecha_verificacion = (isset($data['acc_fecha_verificacion'])) ? $data['acc_fecha_verificacion'] : null;
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