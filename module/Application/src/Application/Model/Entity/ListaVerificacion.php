<?php
/**
 * Objeto referente a la tabla de base de datos 'lista_verificacion'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto ListaVerificacion y el intercambio de información con el hydrator.
 */
class ListaVerificacion
{

    private $lis_ver_id;

    private $nor_id;

    private $pro_id;

    private $tip_pre_id;

    private $prg_id;

    private $lis_ver_pregunta;

    private $lis_ver_documento;

    private $lis_ver_hallazgo;

    private $lis_ver_cumplimiento;

    private $lis_ver_observacion;

    private $lis_ver_fecha;

    function __construct()
    {}

    /**
     *
     * @return the $lis_ver_id
     */
    public function getLis_ver_id()
    {
        return $this->lis_ver_id;
    }

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
     * @return the $pro_id
     */
    public function getPro_id()
    {
        return $this->pro_id;
    }

    /**
     *
     * @return the $tip_pre_id
     */
    public function getTip_pre_id()
    {
        return $this->tip_pre_id;
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
     * @return the $lis_ver_pregunta
     */
    public function getLis_ver_pregunta()
    {
        return $this->lis_ver_pregunta;
    }

    /**
     *
     * @return the $lis_ver_documento
     */
    public function getLis_ver_documento()
    {
        return $this->lis_ver_documento;
    }

    /**
     *
     * @return the $lis_ver_hallazgo
     */
    public function getLis_ver_hallazgo()
    {
        return $this->lis_ver_hallazgo;
    }

    /**
     *
     * @return the $lis_ver_cumplimiento
     */
    public function getLis_ver_cumplimiento()
    {
        return $this->lis_ver_cumplimiento;
    }

    /**
     *
     * @return the $lis_ver_observacion
     */
    public function getLis_ver_observacion()
    {
        return $this->lis_ver_observacion;
    }

    /**
     *
     * @return the $lis_ver_fecha
     */
    public function getLis_ver_fecha()
    {
        return $this->lis_ver_fecha;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $lis_ver_id
     */
    public function setLis_ver_id($lis_ver_id)
    {
        $this->lis_ver_id = $lis_ver_id;
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
     *            Ambigous <NULL, array> $pro_id
     */
    public function setPro_id($pro_id)
    {
        $this->pro_id = $pro_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $tip_pre_id
     */
    public function setTip_pre_id($tip_pre_id)
    {
        $this->tip_pre_id = $tip_pre_id;
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
     *
     * @param
     *            Ambigous <NULL, array> $lis_ver_pregunta
     */
    public function setLis_ver_pregunta($lis_ver_pregunta)
    {
        $this->lis_ver_pregunta = $lis_ver_pregunta;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $lis_ver_documento
     */
    public function setLis_ver_documento($lis_ver_documento)
    {
        $this->lis_ver_documento = $lis_ver_documento;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $lis_ver_hallazgo
     */
    public function setLis_ver_hallazgo($lis_ver_hallazgo)
    {
        $this->lis_ver_hallazgo = $lis_ver_hallazgo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $lis_ver_cumplimiento
     */
    public function setLis_ver_cumplimiento($lis_ver_cumplimiento)
    {
        $this->lis_ver_cumplimiento = $lis_ver_cumplimiento;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $lis_ver_observacion
     */
    public function setLis_ver_observacion($lis_ver_observacion)
    {
        $this->lis_ver_observacion = $lis_ver_observacion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $lis_ver_fecha
     */
    public function setLis_ver_fecha($lis_ver_fecha)
    {
        $this->lis_ver_fecha = $lis_ver_fecha;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->lis_ver_id = (isset($data['lis_ver_id'])) ? $data['lis_ver_id'] : null;
        $this->nor_id = (isset($data['nor_id'])) ? $data['nor_id'] : null;
        $this->pro_id = (isset($data['pro_id'])) ? $data['pro_id'] : null;
        $this->tip_pre_id = (isset($data['tip_pre_id'])) ? $data['tip_pre_id'] : null;
        $this->prg_id = (isset($data['prg_id'])) ? $data['prg_id'] : null;
        $this->lis_ver_pregunta = (isset($data['lis_ver_pregunta'])) ? $data['lis_ver_pregunta'] : null;
        $this->lis_ver_documento = (isset($data['lis_ver_documento'])) ? $data['lis_ver_documento'] : null;
        $this->lis_ver_hallazgo = (isset($data['lis_ver_hallazgo'])) ? $data['lis_ver_hallazgo'] : null;
        $this->lis_ver_cumplimiento = (isset($data['lis_ver_cumplimiento'])) ? $data['lis_ver_cumplimiento'] : null;
        $this->lis_ver_observacion = (isset($data['lis_ver_observacion'])) ? $data['lis_ver_observacion'] : null;
        $this->lis_ver_fecha = (isset($data['lis_ver_fecha'])) ? $data['lis_ver_fecha'] : null;
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