<?php
/**
 * Objeto referente a la tabla de base de datos 'empresa'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Empresa y el intercambio de información con el hydrator.
 */
class Empresa
{

    private $emp_id;

    private $emp_razon_social;

    private $emp_nombre_comercial;

    private $emp_ruc;

    private $emp_logo;

    private $emp_direccion;

    private $emp_telefono;

    private $emp_pagina_web;

    private $emp_mision;

    private $emp_vision;

    private $emp_politica_calidad;

    private $emp_alcance_sgc;

    function __construct()
    {}

    /**
     *
     * @return the $emp_id
     */
    public function getEmp_id()
    {
        return $this->emp_id;
    }

    /**
     *
     * @return the $emp_razon_social
     */
    public function getEmp_razon_social()
    {
        return $this->emp_razon_social;
    }

    /**
     *
     * @return the $emp_nombre_comercial
     */
    public function getEmp_nombre_comercial()
    {
        return $this->emp_nombre_comercial;
    }

    /**
     *
     * @return the $emp_ruc
     */
    public function getEmp_ruc()
    {
        return $this->emp_ruc;
    }

    /**
     *
     * @return the $emp_logo
     */
    public function getEmp_logo()
    {
        return $this->emp_logo;
    }

    /**
     *
     * @return the $emp_direccion
     */
    public function getEmp_direccion()
    {
        return $this->emp_direccion;
    }

    /**
     *
     * @return the $emp_telefono
     */
    public function getEmp_telefono()
    {
        return $this->emp_telefono;
    }

    /**
     *
     * @return the $emp_pagina_web
     */
    public function getEmp_pagina_web()
    {
        return $this->emp_pagina_web;
    }

    /**
     *
     * @return the $emp_mision
     */
    public function getEmp_mision()
    {
        return $this->emp_mision;
    }

    /**
     *
     * @return the $emp_vision
     */
    public function getEmp_vision()
    {
        return $this->emp_vision;
    }

    /**
     *
     * @return the $emp_politica_calidad
     */
    public function getEmp_politica_calidad()
    {
        return $this->emp_politica_calidad;
    }

    /**
     *
     * @return the $emp_alcance_sgc
     */
    public function getEmp_alcance_sgc()
    {
        return $this->emp_alcance_sgc;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $emp_id
     */
    public function setEmp_id($emp_id)
    {
        $this->emp_id = $emp_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $emp_razon_social
     */
    public function setEmp_razon_social($emp_razon_social)
    {
        $this->emp_razon_social = $emp_razon_social;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $emp_nombre_comercial
     */
    public function setEmp_nombre_comercial($emp_nombre_comercial)
    {
        $this->emp_nombre_comercial = $emp_nombre_comercial;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $emp_ruc
     */
    public function setEmp_ruc($emp_ruc)
    {
        $this->emp_ruc = $emp_ruc;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $emp_logo
     */
    public function setEmp_logo($emp_logo)
    {
        $this->emp_logo = $emp_logo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $emp_direccion
     */
    public function setEmp_direccion($emp_direccion)
    {
        $this->emp_direccion = $emp_direccion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $emp_telefono
     */
    public function setEmp_telefono($emp_telefono)
    {
        $this->emp_telefono = $emp_telefono;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $emp_pagina_web
     */
    public function setEmp_pagina_web($emp_pagina_web)
    {
        $this->emp_pagina_web = $emp_pagina_web;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $emp_mision
     */
    public function setEmp_mision($emp_mision)
    {
        $this->emp_mision = $emp_mision;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $emp_vision
     */
    public function setEmp_vision($emp_vision)
    {
        $this->emp_vision = $emp_vision;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $emp_politica_calidad
     */
    public function setEmp_politica_calidad($emp_politica_calidad)
    {
        $this->emp_politica_calidad = $emp_politica_calidad;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $emp_alcance_sgc
     */
    public function setEmp_alcance_sgc($emp_alcance_sgc)
    {
        $this->emp_alcance_sgc = $emp_alcance_sgc;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->emp_id = (isset($data['emp_id'])) ? $data['emp_id'] : null;
        $this->emp_razon_social = (isset($data['emp_razon_social'])) ? $data['emp_razon_social'] : null;
        $this->emp_nombre_comercial = (isset($data['emp_nombre_comercial'])) ? $data['emp_nombre_comercial'] : null;
        
        $this->emp_ruc = (isset($data['emp_ruc'])) ? $data['emp_ruc'] : null;
        $this->emp_logo = (isset($data['emp_logo'])) ? $data['emp_logo'] : null;
        $this->emp_direccion = (isset($data['emp_direccion'])) ? $data['emp_direccion'] : null;
        $this->emp_telefono = (isset($data['emp_telefono'])) ? $data['emp_telefono'] : null;
        $this->emp_pagina_web = (isset($data['emp_pagina_web'])) ? $data['emp_pagina_web'] : null;
        $this->emp_mision = (isset($data['emp_mision'])) ? $data['emp_mision'] : null;
        $this->emp_vision = (isset($data['emp_vision'])) ? $data['emp_vision'] : null;
        $this->emp_politica_calidad = (isset($data['emp_politica_calidad'])) ? $data['emp_politica_calidad'] : null;
        $this->emp_alcance_sgc = (isset($data['emp_alcance_sgc'])) ? $data['emp_alcance_sgc'] : null;
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