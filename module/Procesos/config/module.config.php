<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Procesos\Controller\Index' => 'Procesos\Controller\IndexController',
            'Procesos\Controller\Definiciones' => 'Procesos\Controller\DefinicionesController',
            'Procesos\Controller\Documentos' => 'Procesos\Controller\DocumentosController',
            'Procesos\Controller\Variables' => 'Procesos\Controller\VariablesController',
            'Procesos\Controller\ValorVariables' => 'Procesos\Controller\ValorVariablesController',
            'Procesos\Controller\Procesos' => 'Procesos\Controller\ProcesosController',
            'Procesos\Controller\Periodicidad' => 'Procesos\Controller\PeriodicidadController',
            'Procesos\Controller\Empresa' => 'Procesos\Controller\EmpresaController',
            'Procesos\Controller\Indicadores' => 'Procesos\Controller\IndicadoresController',
            'Procesos\Controller\CalculoIndicador' => 'Procesos\Controller\CalculoIndicadorController',
            'Procesos\Controller\Normas' => 'Procesos\Controller\NormasController',
            'Procesos\Controller\Planes' => 'Procesos\Controller\PlanesController',
            'Procesos\Controller\TipoPlanes' => 'Procesos\Controller\TipoPlanesController',
            'Procesos\Controller\Recursos' => 'Procesos\Controller\RecursosController',
            'Procesos\Controller\Registros' => 'Procesos\Controller\RegistrosController',
            'Procesos\Controller\Politicas' => 'Procesos\Controller\PoliticasController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'procesos' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route' => '/procesos[/:controller][/:action]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Procesos\Controller',
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
            'Procesos' => __DIR__ . '/../view',
        ),
    ),
);
