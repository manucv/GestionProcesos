<?php
/**
 * Objeto referente a la tabla de base de datos 'detalle_programa_recurso'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto DetalleProgramaRecurso y el intercambio de información con el hydrator.
 */
class DetalleProgramaRecurso
{

    private $det_pro_rec_id;

    private $det_pro_id;

    private $det_pro_rec_descripcion;

    function __construct()
    {}

    /**
     *
     * @return the $det_pro_rec_id
     */
    public function getDet_pro_rec_id()
    {
        return $this->det_pro_rec_id;
    }

    /**
     *
     * @return the $det_pro_id
     */
    public function getDet_pro_id()
    {
        return $this->det_pro_id;
    }

    /**
     *
     * @return the $det_pro_rec_descripcion
     */
    public function getDet_pro_rec_descripcion()
    {
        return $this->det_pro_rec_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pro_rec_id
     */
    public function setDet_pro_rec_id($det_pro_rec_id)
    {
        $this->det_pro_rec_id = $det_pro_rec_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pro_id
     */
    public function setDet_pro_id($det_pro_id)
    {
        $this->det_pro_id = $det_pro_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $det_pro_rec_descripcion
     */
    public function setDet_pro_rec_descripcion($det_pro_rec_descripcion)
    {
        $this->det_pro_rec_descripcion = $det_pro_rec_descripcion;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->det_pro_rec_id = (isset($data['det_pro_rec_id'])) ? $data['det_pro_rec_id'] : null;
        $this->det_pro_id = (isset($data['det_pro_id'])) ? $data['det_pro_id'] : null;
        $this->det_pro_rec_descripcion = (isset($data['det_pro_rec_descripcion'])) ? $data['det_pro_rec_descripcion'] : null;
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