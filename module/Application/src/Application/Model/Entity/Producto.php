<?php
/**
 * Objeto referente a la tabla de base de datos 'producto'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Producto y el intercambio de información con el hydrator.
 */
class Producto
{

    private $prd_id;

    private $pro_id;

    private $prd_descripcion;

    private $prd_correccion;

    private $prd_cliente;

    private $prd_requisito;

    function __construct()
    {}

    /**
     *
     * @return the $prd_id
     */
    public function getPrd_id()
    {
        return $this->prd_id;
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
     * @return the $prd_descripcion
     */
    public function getPrd_descripcion()
    {
        return $this->prd_descripcion;
    }

    /**
     *
     * @return the $prd_correccion
     */
    public function getPrd_correccion()
    {
        return $this->prd_correccion;
    }

    /**
     *
     * @return the $prd_cliente
     */
    public function getPrd_cliente()
    {
        return $this->prd_cliente;
    }

    /**
     *
     * @return the $prd_requisito
     */
    public function getPrd_requisito()
    {
        return $this->prd_requisito;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prd_id
     */
    public function setPrd_id($prd_id)
    {
        $this->prd_id = $prd_id;
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
     *            Ambigous <NULL, array> $prd_descripcion
     */
    public function setPrd_descripcion($prd_descripcion)
    {
        $this->prd_descripcion = $prd_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prd_correccion
     */
    public function setPrd_correccion($prd_correccion)
    {
        $this->prd_correccion = $prd_correccion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prd_cliente
     */
    public function setPrd_cliente($prd_cliente)
    {
        $this->prd_cliente = $prd_cliente;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prd_requisito
     */
    public function setPrd_requisito($prd_requisito)
    {
        $this->prd_requisito = $prd_requisito;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->prd_id = (isset($data['prd_id'])) ? $data['prd_id'] : null;
        $this->pro_id = (isset($data['pro_id'])) ? $data['pro_id'] : null;
        $this->prd_descripcion = (isset($data['prd_descripcion'])) ? $data['prd_descripcion'] : null;
        $this->prd_correccion = (isset($data['prd_correccion'])) ? $data['prd_correccion'] : null;
        $this->prd_cliente = (isset($data['prd_cliente'])) ? $data['prd_cliente'] : null;
        $this->prd_requisito = (isset($data['prd_requisito'])) ? $data['prd_requisito'] : null;
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