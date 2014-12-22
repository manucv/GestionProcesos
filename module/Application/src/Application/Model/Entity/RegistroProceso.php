<?php
/**
 * Objeto referente a la tabla de base de datos 'registro_proceso'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto RegistroProceso y el intercambio de información con el hydrator.
 */
class RegistroProceso
{

    private $reg_id;

    private $pro_id;

    private $reg_pro_tipo;

    private $reg_pro_version_cliente;

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
     * @return the $pro_id
     */
    public function getPro_id()
    {
        return $this->pro_id;
    }

    /**
     *
     * @return the $reg_pro_tipo
     */
    public function getReg_pro_tipo()
    {
        return $this->reg_pro_tipo;
    }

    /**
     *
     * @return the $reg_pro_version_cliente
     */
    public function getReg_pro_version_cliente()
    {
        return $this->reg_pro_version_cliente;
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
     *            Ambigous <NULL, array> $pro_id
     */
    public function setPro_id($pro_id)
    {
        $this->pro_id = $pro_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $reg_pro_tipo
     */
    public function setReg_pro_tipo($reg_pro_tipo)
    {
        $this->reg_pro_tipo = $reg_pro_tipo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $reg_pro_version_cliente
     */
    public function setReg_pro_version_cliente($reg_pro_version_cliente)
    {
        $this->reg_pro_version_cliente = $reg_pro_version_cliente;
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
        $this->pro_id = (isset($data['pro_id'])) ? $data['pro_id'] : null;
        $this->reg_pro_tipo = (isset($data['reg_pro_tipo'])) ? $data['reg_pro_tipo'] : null;
        $this->reg_pro_version_cliente = (isset($data['reg_pro_version_cliente'])) ? $data['reg_pro_version_cliente'] : null;
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