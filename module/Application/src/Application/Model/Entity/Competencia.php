<?php
/**
 * Objeto referente a la tabla de base de datos 'competencia'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Competencia y el intercambio de información con el hydrator.
 */
class Competencia
{

    private $com_id;

    private $com_tipo;

    private $com_nombre;

    private $com_conce_resumido;

    private $com_conce_amplio;

    function __construct()
    {}

    /**
     *
     * @return the $com_id
     */
    public function getCom_id()
    {
        return $this->com_id;
    }

    /**
     *
     * @return the $com_tipo
     */
    public function getCom_tipo()
    {
        return $this->com_tipo;
    }

    /**
     *
     * @return the $com_nombre
     */
    public function getCom_nombre()
    {
        return $this->com_nombre;
    }

    /**
     *
     * @return the $com_conce_resumido
     */
    public function getCom_conce_resumido()
    {
        return $this->com_conce_resumido;
    }

    /**
     *
     * @return the $com_conce_amplio
     */
    public function getCom_conce_amplio()
    {
        return $this->com_conce_amplio;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $com_id
     */
    public function setCom_id($com_id)
    {
        $this->com_id = $com_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $com_tipo
     */
    public function setCom_tipo($com_tipo)
    {
        $this->com_tipo = $com_tipo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $com_nombre
     */
    public function setCom_nombre($com_nombre)
    {
        $this->com_nombre = $com_nombre;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $com_conce_resumido
     */
    public function setCom_conce_resumido($com_conce_resumido)
    {
        $this->com_conce_resumido = $com_conce_resumido;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $com_conce_amplio
     */
    public function setCom_conce_amplio($com_conce_amplio)
    {
        $this->com_conce_amplio = $com_conce_amplio;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->com_id = (isset($data['com_id'])) ? $data['com_id'] : null;
        $this->com_tipo = (isset($data['com_tipo'])) ? $data['com_tipo'] : null;
        $this->com_nombre = (isset($data['com_nombre'])) ? $data['com_nombre'] : null;
        $this->com_conce_resumido = (isset($data['com_conce_resumido'])) ? $data['com_conce_resumido'] : null;
        $this->com_conce_amplio = (isset($data['com_conce_amplio'])) ? $data['com_conce_amplio'] : null;
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