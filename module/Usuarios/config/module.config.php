<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Usuarios\Controller\Index' => 'Usuarios\Controller\IndexController',
            'Usuarios\Controller\Aplicaciones' => 'Usuarios\Controller\AplicacionesController',
            'Usuarios\Controller\Modulos' => 'Usuarios\Controller\ModulosController',
            'Usuarios\Controller\Roles' => 'Usuarios\Controller\RolesController',
            'Usuarios\Controller\Usuarios' => 'Usuarios\Controller\UsuariosController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'usuarios' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route' => '/usuarios[/:controller][/:action]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Usuarios\Controller',
                        'controller' => 'Index',
                        'action' => 'index'
                    )
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'Usuarios' => __DIR__ . '/../view',
        ),
    ),
);
