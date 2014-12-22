<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
return array(
    'db' => array(
        'driver' => 'Pdo',
        'dsn' => 'mysql:dbname=gestion_proceso;host=127.0.0.1',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        )
        // 'buffer_results' => true
        
    ),
    
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory'
        )
    ),
    
    'module_layouts' => array(
        'Application' => 'layout/layout.phtml',
        'Auditorias' => 'layout/layoutAuditoria.phtml',
        'Mejoras' => 'layout/layoutMejoras.phtml',
        'Procesos' => 'layout/layoutProcesos.phtml',
        'Recursos' => 'layout/layoutRecursos.phtml',
        'Usuarios' => 'layout/layoutUsuarios.phtml'
    )
    ,
    
    'translator' => array(
        'locale' => 'es_ES'
    )
);