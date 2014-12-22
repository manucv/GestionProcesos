<?php
/**
 * Objeto referente a la tabla de base de datos 'evaluador_competencia'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto EvaluadorCompetencia y el intercambio de información con el hydrator.
 */
class EvaluadorCompetencia
{

    private $per_id;

    private $per_id_evaluador;

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
     * @return the $per_id_evaluador
     */
    public function getPer_id_evaluador()
    {
        return $this->per_id_evaluador;
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
     *            Ambigous <NULL, array> $per_id_evaluador
     */
    public function setPer_id_evaluador($per_id_evaluador)
    {
        $this->per_id_evaluador = $per_id_evaluador;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->per_id_evaluador = (isset($data['per_id_evaluador'])) ? $data['per_id_evaluador'] : null;
        $this->per_id = (isset($data['per_id'])) ? $data['per_id'] : null;
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