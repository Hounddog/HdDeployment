<?php

return array(
	'router' => array(
        'routes' => array(
            'deployment-trigger' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/deployment-trigger',
                    'defaults' => array(
                        'controller' => 'HD\Deployment\Controller\Index',
                    ),
                ),
            ),
        ),
    ),

    'controllers' => array(
        'factories' => array(
            'HD\Deployment\Controller\Index' => 'HD\Deployment\Controller\IndexController',
        ),
    ),
);