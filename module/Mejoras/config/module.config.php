<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Mejoras\Controller\Index' => 'Mejoras\Controller\IndexController',
            'Mejoras\Controller\Acciones' => 'Mejoras\Controller\AccionesController',
            'Mejoras\Controller\TipoAccion' => 'Mejoras\Controller\TipoAccionController',
            'Mejoras\Controller\TipoHallazgo' => 'Mejoras\Controller\TipoHallazgoController',
            'Mejoras\Controller\EstadoAccion' => 'Mejoras\Controller\EstadoAccionController',
            'Mejoras\Controller\AccionEvaluacion' => 'Mejoras\Controller\AccionEvaluacionController',
            'Mejoras\Controller\Motivos' => 'Mejoras\Controller\MotivosController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'mejoras' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route' => '/mejoras[/:controller][/:action]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Mejoras\Controller',
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
            'Mejoras' => __DIR__ . '/../view',
        ),
    ),
);
