<?php
/**
 * Objeto referente a la tabla de base de datos 'registro'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Registro y el intercambio de información con el hydrator.
 */
class Registro
{

    private $reg_id;

    private $reg_codigo;

    private $reg_descripcion;

    private $reg_edicion;

    private $reg_fecha_elaboracion;

    private $reg_impreso_sn;

    private $reg_digital_sn;

    private $reg_path;

    function __construct()
    {}

    /**
     *
     * @return the $reg_id
     */
    public function getReg_id()
    {
        return $this->reg_id;
    }

    /**
     *
     * @return the $reg_codigo
     */
    public function getReg_codigo()
    {
        return $this->reg_codigo;
    }

    /**
     *
     * @return the $reg_descripcion
     */
    public function getReg_descripcion()
    {
        return $this->reg_descripcion;
    }

    /**
     *
     * @return the $reg_edicion
     */
    public function getReg_edicion()
    {
        return $this->reg_edicion;
    }

    /**
     *
     * @return the $reg_fecha_elaboracion
     */
    public function getReg_fecha_elaboracion()
    {
        return $this->reg_fecha_elaboracion;
    }

    /**
     *
     * @return the $reg_impreso_sn
     */
    public function getReg_impreso_sn()
    {
        return $this->reg_impreso_sn;
    }

    /**
     *
     * @return the $reg_digital_sn
     */
    public function getReg_digital_sn()
    {
        return $this->reg_digital_sn;
    }

    /**
     *
     * @return the $reg_path
     */
    public function getReg_path()
    {
        return $this->reg_path;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $reg_id
     */
    public function setReg_id($reg_id)
    {
        $this->reg_id = $reg_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $reg_codigo
     */
    public function setReg_codigo($reg_codigo)
    {
        $this->reg_codigo = $reg_codigo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $reg_descripcion
     */
    public function setReg_descripcion($reg_descripcion)
    {
        $this->reg_descripcion = $reg_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $reg_edicion
     */
    public function setReg_edicion($reg_edicion)
    {
        $this->reg_edicion = $reg_edicion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $reg_fecha_elaboracion
     */
    public function setReg_fecha_elaboracion($reg_fecha_elaboracion)
    {
        $this->reg_fecha_elaboracion = $reg_fecha_elaboracion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $reg_impreso_sn
     */
    public function setReg_impreso_sn($reg_impreso_sn)
    {
        $this->reg_impreso_sn = $reg_impreso_sn;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $reg_digital_sn
     */
    public function setReg_digital_sn($reg_digital_sn)
    {
        $this->reg_digital_sn = $reg_digital_sn;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $reg_path
     */
    public function setReg_path($reg_path)
    {
        $this->reg_path = $reg_path;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->reg_id = (isset($data['reg_id'])) ? $data['reg_id'] : null;
        $this->reg_codigo = (isset($data['reg_codigo'])) ? $data['reg_codigo'] : null;
        $this->reg_descripcion = (isset($data['reg_descripcion'])) ? $data['reg_descripcion'] : null;
        $this->reg_edicion = (isset($data['reg_edicion'])) ? $data['reg_edicion'] : null;
        $this->reg_fecha_elaboracion = (isset($data['reg_fecha_elaboracion'])) ? $data['reg_fecha_elaboracion'] : null;
        $this->reg_impreso_sn = (isset($data['reg_impreso_sn'])) ? $data['reg_impreso_sn'] : null;
        $this->reg_digital_sn = (isset($data['reg_digital_sn'])) ? $data['reg_digital_sn'] : null;
        $this->reg_path = (isset($data['reg_path'])) ? $data['reg_path'] : null;
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