<?php
/**
 * Objeto referente a la tabla de base de datos 'tarea'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Tarea y el intercambio de información con el hydrator.
 */
class Tarea
{

    private $tar_id;

    private $pry_id;

    private $tar_descripcion;

    private $tar_costo;

    private $tar_fecha_inicio;

    private $tar_fecha_fin;

    private $tar_peso;

    private $tar_porcentaje_avance;

    private $tar_avance_fecha;

    function __construct()
    {}

    /**
     *
     * @return the $tar_id
     */
    public function getTar_id()
    {
        return $this->tar_id;
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
     * @return the $tar_descripcion
     */
    public function getTar_descripcion()
    {
        return $this->tar_descripcion;
    }

    /**
     *
     * @return the $tar_costo
     */
    public function getTar_costo()
    {
        return $this->tar_costo;
    }

    /**
     *
     * @return the $tar_fecha_inicio
     */
    public function getTar_fecha_inicio()
    {
        return $this->tar_fecha_inicio;
    }

    /**
     *
     * @return the $tar_fecha_fin
     */
    public function getTar_fecha_fin()
    {
        return $this->tar_fecha_fin;
    }

    /**
     *
     * @return the $tar_peso
     */
    public function getTar_peso()
    {
        return $this->tar_peso;
    }

    /**
     *
     * @return the $tar_porcentaje_avance
     */
    public function getTar_porcentaje_avance()
    {
        return $this->tar_porcentaje_avance;
    }

    /**
     *
     * @return the $tar_avance_fecha
     */
    public function getTar_avance_fecha()
    {
        return $this->tar_avance_fecha;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $tar_id
     */
    public function setTar_id($tar_id)
    {
        $this->tar_id = $tar_id;
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
     *
     * @param
     *            Ambigous <NULL, array> $tar_descripcion
     */
    public function setTar_descripcion($tar_descripcion)
    {
        $this->tar_descripcion = $tar_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $tar_costo
     */
    public function setTar_costo($tar_costo)
    {
        $this->tar_costo = $tar_costo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $tar_fecha_inicio
     */
    public function setTar_fecha_inicio($tar_fecha_inicio)
    {
        $this->tar_fecha_inicio = $tar_fecha_inicio;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $tar_fecha_fin
     */
    public function setTar_fecha_fin($tar_fecha_fin)
    {
        $this->tar_fecha_fin = $tar_fecha_fin;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $tar_peso
     */
    public function setTar_peso($tar_peso)
    {
        $this->tar_peso = $tar_peso;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $tar_porcentaje_avance
     */
    public function setTar_porcentaje_avance($tar_porcentaje_avance)
    {
        $this->tar_porcentaje_avance = $tar_porcentaje_avance;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $tar_avance_fecha
     */
    public function setTar_avance_fecha($tar_avance_fecha)
    {
        $this->tar_avance_fecha = $tar_avance_fecha;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->tar_id = (isset($data['tar_id'])) ? $data['tar_id'] : null;
        $this->pry_id = (isset($data['pry_id'])) ? $data['pry_id'] : null;
        $this->tar_descripcion = (isset($data['tar_descripcion'])) ? $data['tar_descripcion'] : null;
        $this->tar_costo = (isset($data['tar_costo'])) ? $data['tar_costo'] : null;
        $this->tar_fecha_inicio = (isset($data['tar_fecha_inicio'])) ? $data['tar_fecha_inicio'] : null;
        $this->tar_fecha_fin = (isset($data['tar_fecha_fin'])) ? $data['tar_fecha_fin'] : null;
        $this->tar_peso = (isset($data['tar_peso'])) ? $data['tar_peso'] : null;
        $this->tar_porcentaje_avance = (isset($data['tar_porcentaje_avance'])) ? $data['tar_porcentaje_avance'] : null;
        $this->tar_avance_fecha = (isset($data['tar_avance_fecha'])) ? $data['tar_avance_fecha'] : null;
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