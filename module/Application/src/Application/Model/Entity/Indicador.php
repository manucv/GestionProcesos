<?php
/**
 * Objeto referente a la tabla de base de datos 'indicador'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Entity;

/**
 * Define el objeto Indicador y el intercambio de información con el hydrator.
 */
class Indicador
{

    private $ind_id;

    private $pri_id;

    private $fre_id;

    private $ind_codigo;

    private $ind_descripcion;

    private $ind_formula;

    private $ind_fecha_inicio;

    private $ind_limite_minimo;

    private $ind_limite_inferior;

    private $ind_limite_superior;

    private $ind_limite_maximo;

    private $ind_sentido_pn;

    private $ind_calculo_valor;

    private $ind_es_variable;

    function __construct()
    {}

    /**
     *
     * @return the $ind_id
     */
    public function getInd_id()
    {
        return $this->ind_id;
    }

    /**
     *
     * @return the $pri_id
     */
    public function getPri_id()
    {
        return $this->pri_id;
    }

    /**
     *
     * @return the $fre_id
     */
    public function getFre_id()
    {
        return $this->fre_id;
    }

    /**
     *
     * @return the $ind_codigo
     */
    public function getInd_codigo()
    {
        return $this->ind_codigo;
    }

    /**
     *
     * @return the $ind_descripcion
     */
    public function getInd_descripcion()
    {
        return $this->ind_descripcion;
    }

    /**
     *
     * @return the $ind_formula
     */
    public function getInd_formula()
    {
        return $this->ind_formula;
    }

    /**
     *
     * @return the $ind_fecha_inicio
     */
    public function getInd_fecha_inicio()
    {
        return $this->ind_fecha_inicio;
    }

    /**
     *
     * @return the $ind_limite_minimo
     */
    public function getInd_limite_minimo()
    {
        return $this->ind_limite_minimo;
    }

    /**
     *
     * @return the $ind_limite_inferior
     */
    public function getInd_limite_inferior()
    {
        return $this->ind_limite_inferior;
    }

    /**
     *
     * @return the $ind_limite_superior
     */
    public function getInd_limite_superior()
    {
        return $this->ind_limite_superior;
    }

    /**
     *
     * @return the $ind_limite_maximo
     */
    public function getInd_limite_maximo()
    {
        return $this->ind_limite_maximo;
    }

    /**
     *
     * @return the $ind_sentido_pn
     */
    public function getInd_sentido_pn()
    {
        return $this->ind_sentido_pn;
    }

    /**
     *
     * @return the $ind_calculo_valor
     */
    public function getInd_calculo_valor()
    {
        return $this->ind_calculo_valor;
    }

    /**
     *
     * @return the $ind_es_variable
     */
    public function getInd_es_variable()
    {
        return $this->ind_es_variable;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $ind_id
     */
    public function setInd_id($ind_id)
    {
        $this->ind_id = $ind_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $pri_id
     */
    public function setPri_id($pri_id)
    {
        $this->pri_id = $pri_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $fre_id
     */
    public function setFre_id($fre_id)
    {
        $this->fre_id = $fre_id;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $ind_codigo
     */
    public function setInd_codigo($ind_codigo)
    {
        $this->ind_codigo = $ind_codigo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $ind_descripcion
     */
    public function setInd_descripcion($ind_descripcion)
    {
        $this->ind_descripcion = $ind_descripcion;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $ind_formula
     */
    public function setInd_formula($ind_formula)
    {
        $this->ind_formula = $ind_formula;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $ind_fecha_inicio
     */
    public function setInd_fecha_inicio($ind_fecha_inicio)
    {
        $this->ind_fecha_inicio = $ind_fecha_inicio;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $ind_limite_minimo
     */
    public function setInd_limite_minimo($ind_limite_minimo)
    {
        $this->ind_limite_minimo = $ind_limite_minimo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $ind_limite_inferior
     */
    public function setInd_limite_inferior($ind_limite_inferior)
    {
        $this->ind_limite_inferior = $ind_limite_inferior;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $ind_limite_superior
     */
    public function setInd_limite_superior($ind_limite_superior)
    {
        $this->ind_limite_superior = $ind_limite_superior;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $ind_limite_maximo
     */
    public function setInd_limite_maximo($ind_limite_maximo)
    {
        $this->ind_limite_maximo = $ind_limite_maximo;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $ind_sentido_pn
     */
    public function setInd_sentido_pn($ind_sentido_pn)
    {
        $this->ind_sentido_pn = $ind_sentido_pn;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $ind_calculo_valor
     */
    public function setInd_calculo_valor($ind_calculo_valor)
    {
        $this->ind_calculo_valor = $ind_calculo_valor;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, array> $ind_es_variable
     */
    public function setInd_es_variable($ind_es_variable)
    {
        $this->ind_es_variable = $ind_es_variable;
    }

    /**
     * Registra los atributos de clase mediante post o base de datos.
     *
     * @param array $data            
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->ind_id = (isset($data['ind_id'])) ? $data['ind_id'] : null;
        $this->pri_id = (isset($data['pri_id'])) ? $data['pri_id'] : null;
        $this->fre_id = (isset($data['fre_id'])) ? $data['fre_id'] : null;
        $this->ind_codigo = (isset($data['ind_codigo'])) ? $data['ind_codigo'] : null;
        $this->ind_descripcion = (isset($data['ind_descripcion'])) ? $data['ind_descripcion'] : null;
        $this->ind_formula = (isset($data['ind_formula'])) ? $data['ind_formula'] : null;
        $this->ind_fecha_inicio = (isset($data['ind_fecha_inicio'])) ? $data['ind_fecha_inicio'] : null;
        $this->ind_limite_minimo = (isset($data['ind_limite_minimo'])) ? $data['ind_limite_minimo'] : null;
        $this->ind_limite_inferior = (isset($data['ind_limite_inferior'])) ? $data['ind_limite_inferior'] : null;
        $this->ind_limite_superior = (isset($data['ind_limite_superior'])) ? $data['ind_limite_superior'] : null;
        $this->ind_limite_maximo = (isset($data['ind_limite_maximo'])) ? $data['ind_limite_maximo'] : null;
        $this->ind_sentido_pn = (isset($data['ind_sentido_pn'])) ? $data['ind_sentido_pn'] : null;
        $this->ind_calculo_valor = (isset($data['ind_calculo_valor'])) ? $data['ind_calculo_valor'] : null;
        $this->ind_es_variable = (isset($data['ind_es_variable'])) ? $data['ind_es_variable'] : null;
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