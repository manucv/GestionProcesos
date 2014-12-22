<?php
namespace Application\Model\Dao;

use Zend\Db\TableGateway\TableGateway;
use Application\Model\Entity\RolUsuario;
use Zend\Db\Sql\Sql;

class RolUsuarioDao
{

    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function traerTodos()
    {
        return $this->tableGateway->getSql()->select();
    }

    public function traer($usu_usuario, $rol_id)
    {
        $rol_id = (int) $rol_id;
        
        $resultSet = $this->tableGateway->select(array(
            '$usu_usuario' => $usu_usuario,
            'rol_id' => $rol_id
        ))->current();
        
        if (! $resultSet) {
            throw new \Exception('No se encontro el ID del rol por usuario');
        }
        
        return $resultSet;
    }

    public function rolPorCodigo($usu_usuario)
    {
        $rol_id = (int) $rol_id;
        
        $resultSet = $this->tableGateway->select(array(
            'usu_usuario' => $usu_usuario
        ))->current();
        
        if (! $resultSet) {
            throw new \Exception('No se encontro el ID del rol por usuario');
        }
        
        return $resultSet;
    }

    public function guardar(RolUsuario $rolUsuario)
    {}

    public function eliminar($id)
    {}
}