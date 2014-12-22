<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Auditorias\Controller\Index' => 'Auditorias\Controller\IndexController',
            'Auditorias\Controller\ListaVerificacion' => 'Auditorias\Controller\ListaVerificacionController',
            'Auditorias\Controller\TipoPregunta' => 'Auditorias\Controller\TipoPreguntaController',
            'Auditorias\Controller\Programa' => 'Auditorias\Controller\ProgramaController',
            'Auditorias\Controller\EstadoPrograma' => 'Auditorias\Controller\EstadoProgramaController',
            'Auditorias\Controller\EstadoPlan' => 'Auditorias\Controller\EstadoPlanController',
            'Auditorias\Controller\Plan' => 'Auditorias\Controller\PlanController',
            'Auditorias\Controller\EstadoActividad' => 'Auditorias\Controller\EstadoActividadController',
            'Auditorias\Controller\Informes' => 'Auditorias\Controller\InformesController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'auditorias' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route' => '/auditorias[/:controller][/:action]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Auditorias\Controller',
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
            'Auditorias' => __DIR__ . '/../view',
        ),
    ),
);
