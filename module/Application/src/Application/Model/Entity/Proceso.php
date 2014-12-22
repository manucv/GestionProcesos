<?php
/**
 * Objeto referente a la tabla de base de datos 'proceso'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Proceso y el intercambio de información con el hydrator.
 */
class Proceso
{

    private $pro_id;

    private $pro_id_padre;

    private $pro_codigo;

    private $pro_descripcion;

    private $pro_proposito;

    private $pro_alcance;

    private $pro_edicion;

    private $pro_vigencia;

    function __construct()
    {}

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
     * @return the $pro_id_padre
     */
    public function getPro_id_padre()
    {
        return $this->pro_id_padre;
    }

    /**
     *
     * @return the $pro_codigo
     */
    public function getPro_codigo()
    {
        return $this->pro_codigo;
    }

    /**
     *
     * @return the $pro_descripcion
     */
    public function getPro_descripcion()
    {
        return $this->pro_descripcion;
    }

    /**
     *
     * @return the $pro_proposito
     */
    public function getPro_proposito()
    {
        return $this->pro_proposito;
    }

    /**
     *
     * @return the $pro_alcance
     */
    public function getPro_alcance()
    {
        return $this->pro_alcance;
    }

    /**
     *
     * @return the $pro_edicion
     */
    public function getPro_edicion()
    {
        return $this->pro_edicion;
    }

    /**
     *
     * @return the $pro_vigencia
     */
    public function getPro_vigencia()
    {
        return $this->pro_vigencia;
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
     *            Ambigous <NULL, array> $pro_id_padre
     */
    public function setPro_id_padre($pro_id_padre)
    {
        $this->pro_id_padre = $pro_id_padre;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pro_codigo
     */
    public function setPro_codigo($pro_codigo)
    {
        $this->pro_codigo = $pro_codigo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pro_descripcion
     */
    public function setPro_descripcion($pro_descripcion)
    {
        $this->pro_descripcion = $pro_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pro_proposito
     */
    public function setPro_proposito($pro_proposito)
    {
        $this->pro_proposito = $pro_proposito;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pro_alcance
     */
    public function setPro_alcance($pro_alcance)
    {
        $this->pro_alcance = $pro_alcance;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pro_edicion
     */
    public function setPro_edicion($pro_edicion)
    {
        $this->pro_edicion = $pro_edicion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pro_vigencia
     */
    public function setPro_vigencia($pro_vigencia)
    {
        $this->pro_vigencia = $pro_vigencia;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->pro_id = (isset($data['pro_id'])) ? $data['pro_id'] : null;
        $this->pro_id_padre = (isset($data['pro_id_padre'])) ? $data['pro_id_padre'] : null;
        
        $this->pro_codigo = (isset($data['pro_codigo'])) ? $data['pro_codigo'] : null;
        $this->pro_descripcion = (isset($data['pro_descripcion'])) ? $data['pro_descripcion'] : null;
        $this->pro_proposito = (isset($data['pro_proposito'])) ? $data['pro_proposito'] : null;
        $this->pro_alcance = (isset($data['pro_alcance'])) ? $data['pro_alcance'] : null;
        $this->pro_edicion = (isset($data['pro_edicion'])) ? $data['pro_edicion'] : null;
        $this->pro_vigencia = (isset($data['pro_vigencia'])) ? $data['pro_vigencia'] : null;
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