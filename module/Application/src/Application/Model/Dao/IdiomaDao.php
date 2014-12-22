<?php
/**
 * Objeto de acceso a base de datos referente a la tabla 'idioma'.
 *
 * @author    Emanuel Carrasco
 * @copyright
 * @license
 */
namespace Application\Model\Dao;

/**
 * Importación de librerías
 */
use Zend\Db\TableGateway\TableGateway;
use Application\Model\Entity\Idioma;
use Zend\Db\Sql\Sql;

/**
 * Clase que define el objeto IdiomaDao y sus funciones asociadas.
 */
class IdiomaDao implements SpecificFunctionsInterface
{

    /**
     * Variable del tableGateway
     * Se carga desde el Service Manager de la clase Module (Application)
     */
    protected $tableGateway;

    /**
     * Constructor de la clase
     * Setea el tableGateway
     *
     * @param TableGateway $tableGateway            
     * @return void
     */
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    /**
     * Trae todos los registros de la base de datos,
     * referente a la tabla de la clase
     *
     * @return object array|bool
     */
    public function traerTodos()
    {
        $select = $this->tableGateway->getSql()->select();
        return $this->tableGateway->selectWith($select);
    }

    /**
     * Devuelve el objeto de base de datos
     * buscado por la clave primaria
     *
     * @param int $id            
     * @return object array|bool
     */
    public function traer($id)
    {
        $resultSet = $this->tableGateway->select(array(
            'idi_id' => $id
        ))->current();
        
        if (! $resultSet) {
            throw new \Exception('No se encontro el ID buscado');
        }
        
        return $resultSet;
    }

    /**
     * Graba información en la base de datos (insert)
     * Actualiza los registros en la base de datos (update)
     *
     * @param Departamento $departamento            
     * @return bool
     */
    public function guardar(Idioma $idioma)
    {
        /*
         * $id = ( int ) $usuario->getUsu_id ();
         *
         * $data = array (
         * 'ciu_id' => $usuario->getCiu_id (),
         * 'usu_usuario' => $usuario->getUsu_usuario (),
         * 'usu_email' => $usuario->getUsu_email (),
         * 'usu_nombre' => $usuario->getUsu_nombre (),
         * 'usu_apellido' => $usuario->getUsu_apellido (),
         * 'usu_clave' => $usuario->getUsu_clave (),
         * 'usu_estado' => $usuario->getUsu_estado (),
         * 'usu_fecha_registro' => date('Y-m-d H:i:s'),
         * 'usu_codigo_recuperacion' => $usuario->getUsu_codigo_recuperacion()
         * );
         *
         * $data ['usu_id'] = $id;
         *
         * if (!empty ( $id ) && !is_null ( $id )) {
         * if ($this->traer ( $id )) {
         *
         * $data = array (
         * 'ciu_id' => $usuario->getCiu_id (),
         * 'usu_usuario' => $usuario->getUsu_usuario (),
         * 'usu_email' => $usuario->getUsu_email (),
         * 'usu_nombre' => $usuario->getUsu_nombre (),
         * 'usu_apellido' => $usuario->getUsu_apellido (),
         * 'usu_estado' => $usuario->getUsu_estado (),
         * 'usu_codigo_recuperacion' => $usuario->getUsu_codigo_recuperacion (),
         * );
         *
         * $this->tableGateway->update ( $data, array ( 'usu_id' => $id ) );
         *
         * } else {
         * throw new \Exception ( 'No se encontro el id para actualizar' );
         * }
         * }else{
         * $this->tableGateway->insert ( $data );
         * $id = $this->tableGateway->lastInsertValue;
         * }
         * return $id;
         */
    }

    /**
     * Elimina información de la base de datos (delete)
     *
     * @param int $id            
     * @return bool
     */
    public function eliminar($id)
    {
        if ($this->traer($id)) {
            return $this->tableGateway->delete(array(
                'idi_id' => $id
            ));
        } else {
            throw new \Exception('No se encontro el id para eliminar');
        }
    }
}