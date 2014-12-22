<?php
/**
 * Objeto referente a la tabla de base de datos 'personal'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Personal y el intercambio de información con el hydrator.
 */
class Personal
{

    private $per_id;

    private $car_id;

    private $per_cedula_pasaporte;

    private $per_identificacion;

    private $per_nombre;

    private $per_apellido;

    private $per_direccion;

    private $per_email;

    private $per_telefono;

    private $per_celular;

    private $per_sexo;

    private $per_tipo;

    private $per_alta;

    function __construct()
    {}

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
     * @return the $car_id
     */
    public function getCar_id()
    {
        return $this->car_id;
    }

    /**
     *
     * @return the $per_cedula_pasaporte
     */
    public function getPer_cedula_pasaporte()
    {
        return $this->per_cedula_pasaporte;
    }

    /**
     *
     * @return the $per_identificacion
     */
    public function getPer_identificacion()
    {
        return $this->per_identificacion;
    }

    /**
     *
     * @return the $per_nombre
     */
    public function getPer_nombre()
    {
        return $this->per_nombre;
    }

    /**
     *
     * @return the $per_apellido
     */
    public function getPer_apellido()
    {
        return $this->per_apellido;
    }

    /**
     *
     * @return the $per_direccion
     */
    public function getPer_direccion()
    {
        return $this->per_direccion;
    }

    /**
     *
     * @return the $per_email
     */
    public function getPer_email()
    {
        return $this->per_email;
    }

    /**
     *
     * @return the $per_telefono
     */
    public function getPer_telefono()
    {
        return $this->per_telefono;
    }

    /**
     *
     * @return the $per_celular
     */
    public function getPer_celular()
    {
        return $this->per_celular;
    }

    /**
     *
     * @return the $per_sexo
     */
    public function getPer_sexo()
    {
        return $this->per_sexo;
    }

    /**
     *
     * @return the $per_tipo
     */
    public function getPer_tipo()
    {
        return $this->per_tipo;
    }

    /**
     *
     * @return the $per_alta
     */
    public function getPer_alta()
    {
        return $this->per_alta;
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
     *            Ambigous <NULL, array> $car_id
     */
    public function setCar_id($car_id)
    {
        $this->car_id = $car_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $per_cedula_pasaporte
     */
    public function setPer_cedula_pasaporte($per_cedula_pasaporte)
    {
        $this->per_cedula_pasaporte = $per_cedula_pasaporte;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $per_identificacion
     */
    public function setPer_identificacion($per_identificacion)
    {
        $this->per_identificacion = $per_identificacion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $per_nombre
     */
    public function setPer_nombre($per_nombre)
    {
        $this->per_nombre = $per_nombre;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $per_apellido
     */
    public function setPer_apellido($per_apellido)
    {
        $this->per_apellido = $per_apellido;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $per_direccion
     */
    public function setPer_direccion($per_direccion)
    {
        $this->per_direccion = $per_direccion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $per_email
     */
    public function setPer_email($per_email)
    {
        $this->per_email = $per_email;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $per_telefono
     */
    public function setPer_telefono($per_telefono)
    {
        $this->per_telefono = $per_telefono;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $per_celular
     */
    public function setPer_celular($per_celular)
    {
        $this->per_celular = $per_celular;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $per_sexo
     */
    public function setPer_sexo($per_sexo)
    {
        $this->per_sexo = $per_sexo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $per_tipo
     */
    public function setPer_tipo($per_tipo)
    {
        $this->per_tipo = $per_tipo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $per_alta
     */
    public function setPer_alta($per_alta)
    {
        $this->per_alta = $per_alta;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->per_id = (isset($data['per_id'])) ? $data['per_id'] : null;
        $this->car_id = (isset($data['car_id'])) ? $data['car_id'] : null;
        $this->per_cedula_pasaporte = (isset($data['per_cedula_pasaporte'])) ? $data['per_cedula_pasaporte'] : null;
        $this->per_identificacion = (isset($data['per_identificacion'])) ? $data['per_identificacion'] : null;
        $this->per_nombre = (isset($data['per_nombre'])) ? $data['per_nombre'] : null;
        $this->per_apellido = (isset($data['per_apellido'])) ? $data['per_apellido'] : null;
        $this->per_direccion = (isset($data['per_direccion'])) ? $data['per_direccion'] : null;
        $this->per_email = (isset($data['per_email'])) ? $data['per_email'] : null;
        $this->per_telefono = (isset($data['per_telefono'])) ? $data['per_telefono'] : null;
        $this->per_celular = (isset($data['per_celular'])) ? $data['per_celular'] : null;
        $this->per_sexo = (isset($data['per_sexo'])) ? $data['per_sexo'] : null;
        $this->per_tipo = (isset($data['per_tipo'])) ? $data['per_tipo'] : null;
        $this->per_alta = (isset($data['per_alta'])) ? $data['per_alta'] : null;
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