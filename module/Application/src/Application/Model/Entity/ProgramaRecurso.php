<?php
/**
 * Objeto referente a la tabla de base de datos 'programa_recurso'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto ProgramaRecurso y el intercambio de información con el hydrator.
 */
class ProgramaRecurso
{

    private $prg_rec_id;

    private $pro_rec_descripcion;

    private $prg_id;

    function __construct()
    {}

    /**
     *
     * @return the $prg_rec_id
     */
    public function getPrg_rec_id()
    {
        return $this->prg_rec_id;
    }

    /**
     *
     * @return the $pro_rec_descripcion
     */
    public function getPro_rec_descripcion()
    {
        return $this->pro_rec_descripcion;
    }

    /**
     *
     * @return the $prg_id
     */
    public function getPrg_id()
    {
        return $this->prg_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prg_rec_id
     */
    public function setPrg_rec_id($prg_rec_id)
    {
        $this->prg_rec_id = $prg_rec_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pro_rec_descripcion
     */
    public function setPro_rec_descripcion($pro_rec_descripcion)
    {
        $this->pro_rec_descripcion = $pro_rec_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $prg_id
     */
    public function setPrg_id($prg_id)
    {
        $this->prg_id = $prg_id;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->prg_rec_id = (isset($data['prg_rec_id'])) ? $data['prg_rec_id'] : null;
        $this->pro_rec_descripcion = (isset($data['pro_rec_descripcion'])) ? $data['pro_rec_descripcion'] : null;
        $this->prg_id = (isset($data['prg_id'])) ? $data['prg_id'] : null;
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