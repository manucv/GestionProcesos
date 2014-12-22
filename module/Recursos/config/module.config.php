<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Recursos\Controller\Index' => 'Recursos\Controller\IndexController',
            'Recursos\Controller\Departamentos' => 'Recursos\Controller\DepartamentosController',
            'Recursos\Controller\Cargos' => 'Recursos\Controller\CargosController',
            'Recursos\Controller\Competencias' => 'Recursos\Controller\CompetenciasController',
            'Recursos\Controller\TipoCompetencias' => 'Recursos\Controller\TipoCompetenciasController',
            'Recursos\Controller\Personal' => 'Recursos\Controller\PersonalController',
            'Recursos\Controller\Experiencia' => 'Recursos\Controller\ExperienciaController',
            'Recursos\Controller\Evaluaciones' => 'Recursos\Controller\EvaluacionesController',
            'Recursos\Controller\Desempeno' => 'Recursos\Controller\DesempenoController',
            'Recursos\Controller\Idiomas' => 'Recursos\Controller\IdiomasController',
            'Recursos\Controller\NivelIdiomas' => 'Recursos\Controller\NivelIdiomasController',
            'Recursos\Controller\Grados' => 'Recursos\Controller\GradosController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'recursos' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route' => '/recursos[/:controller][/:action]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Recursos\Controller',
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
            'Recursos' => __DIR__ . '/../view',
        ),
    ),
);
