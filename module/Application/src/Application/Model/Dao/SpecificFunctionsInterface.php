<?php
/**
 * Especificación de funciones repetitivas en archivos DAO.
 * 
 * Se puede usar este archivo para no olvidar la implementación de algunas funciones 
 * específicas en los archivos de llamadas a base de datos. Estas funciones permitirán 
 * obtener o quitar informarmación en base a las acciones del usuario final.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Dao;

interface SpecificFunctionsInterface
{

    /**
     * Traer todos los elementos de una tabla en particular.
     */
    public function traerTodos();
    
    /**
     * Obtener un elemento en particular de una tabla específica.
     * Se identifica por la clave primaria.
     *
     * @param string|int $id
     */
    public function traer($id);

    /**
     * Eliminar un registro en particular.
     * Se identifica por la clave primaria.
     *
     * @param string|int $id
     */
    public function eliminar($id);
}