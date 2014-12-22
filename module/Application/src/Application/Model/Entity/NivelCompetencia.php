<?php
/**
 * Objeto referente a la tabla de base de datos 'nivel_competencia'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto NivelCompetencia y el intercambio de información con el hydrator.
 */
class NivelCompetencia
{

    private $niv_com_id;

    private $com_id;

    private $niv_com_referencia;

    private $niv_com_valor;

    private $niv_com_comportamiento;

    function __construct()
    {}

    /**
     *
     * @return the $niv_com_id
     */
    public function getNiv_com_id()
    {
        return $this->niv_com_id;
    }

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
     * @return the $niv_com_referencia
     */
    public function getNiv_com_referencia()
    {
        return $this->niv_com_referencia;
    }

    /**
     *
     * @return the $niv_com_valor
     */
    public function getNiv_com_valor()
    {
        return $this->niv_com_valor;
    }

    /**
     *
     * @return the $niv_com_comportamiento
     */
    public function getNiv_com_comportamiento()
    {
        return $this->niv_com_comportamiento;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $niv_com_id
     */
    public function setNiv_com_id($niv_com_id)
    {
        $this->niv_com_id = $niv_com_id;
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
     *            Ambigous <NULL, array> $niv_com_referencia
     */
    public function setNiv_com_referencia($niv_com_referencia)
    {
        $this->niv_com_referencia = $niv_com_referencia;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $niv_com_valor
     */
    public function setNiv_com_valor($niv_com_valor)
    {
        $this->niv_com_valor = $niv_com_valor;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $niv_com_comportamiento
     */
    public function setNiv_com_comportamiento($niv_com_comportamiento)
    {
        $this->niv_com_comportamiento = $niv_com_comportamiento;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->niv_com_id = (isset($data['niv_com_id'])) ? $data['niv_com_id'] : null;
        $this->com_id = (isset($data['com_id'])) ? $data['com_id'] : null;
        $this->niv_com_referencia = (isset($data['niv_com_referencia'])) ? $data['niv_com_referencia'] : null;
        $this->niv_com_valor = (isset($data['niv_com_valor'])) ? $data['niv_com_valor'] : null;
        $this->niv_com_comportamiento = (isset($data['niv_com_comportamiento'])) ? $data['niv_com_comportamiento'] : null;
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