<?php
/**
 * Objeto referente a la tabla de base de datos 'recurso_tarea'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto RecursoTarea y el intercambio de información con el hydrator.
 */
class RecursoTarea
{

    private $tar_id;

    private $rec_id;

    private $rec_tar_cantidad;

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
     * @return the $rec_id
     */
    public function getRec_id()
    {
        return $this->rec_id;
    }

    /**
     *
     * @return the $rec_tar_cantidad
     */
    public function getRec_tar_cantidad()
    {
        return $this->rec_tar_cantidad;
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
     *            Ambigous <NULL, array> $rec_id
     */
    public function setRec_id($rec_id)
    {
        $this->rec_id = $rec_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $rec_tar_cantidad
     */
    public function setRec_tar_cantidad($rec_tar_cantidad)
    {
        $this->rec_tar_cantidad = $rec_tar_cantidad;
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
        $this->rec_id = (isset($data['rec_id'])) ? $data['rec_id'] : null;
        $this->rec_tar_cantidad = (isset($data['rec_tar_cantidad'])) ? $data['rec_tar_cantidad'] : null;
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