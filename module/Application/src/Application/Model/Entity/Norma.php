<?php
/**
 * Objeto referente a la tabla de base de datos 'norma'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Norma y el intercambio de información con el hydrator.
 */
class Norma
{

    private $nor_id;

    private $nor_codigo;

    private $nor_descripcion;

    private $nor_nivel;

    private $nor_contenido;

    function __construct()
    {}

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
     * @return the $nor_codigo
     */
    public function getNor_codigo()
    {
        return $this->nor_codigo;
    }

    /**
     *
     * @return the $nor_descripcion
     */
    public function getNor_descripcion()
    {
        return $this->nor_descripcion;
    }

    /**
     *
     * @return the $nor_nivel
     */
    public function getNor_nivel()
    {
        return $this->nor_nivel;
    }

    /**
     *
     * @return the $nor_contenido
     */
    public function getNor_contenido()
    {
        return $this->nor_contenido;
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
     *            Ambigous <NULL, array> $nor_codigo
     */
    public function setNor_codigo($nor_codigo)
    {
        $this->nor_codigo = $nor_codigo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $nor_descripcion
     */
    public function setNor_descripcion($nor_descripcion)
    {
        $this->nor_descripcion = $nor_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $nor_nivel
     */
    public function setNor_nivel($nor_nivel)
    {
        $this->nor_nivel = $nor_nivel;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $nor_contenido
     */
    public function setNor_contenido($nor_contenido)
    {
        $this->nor_contenido = $nor_contenido;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->nor_id = (isset($data['nor_id'])) ? $data['nor_id'] : null;
        $this->nor_codigo = (isset($data['nor_codigo'])) ? $data['nor_codigo'] : null;
        $this->nor_descripcion = (isset($data['nor_descripcion'])) ? $data['nor_descripcion'] : null;
        $this->nor_nivel = (isset($data['nor_nivel'])) ? $data['nor_nivel'] : null;
        $this->nor_contenido = (isset($data['nor_contenido'])) ? $data['nor_contenido'] : null;
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