<?php

return array(
    'router' => array(
        'routes' => array(
            'pizza' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/pizza',
                    'defaults' => array(
                        'controller' => 'pizza',
                        'action'     => 'index',
                    ),
                ),
            ),
            'pizza-name' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'       => '/pizza/:name',
                    'constraints' => array(
                        'name' => '[a-zA-Z][a-zA-Z-]*',
                    ),
                    'defaults'    => array(
                        'controller' => 'pizza',
                        'action'     => 'name',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'pizza' => 'Pizza\Controller\IndexController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
