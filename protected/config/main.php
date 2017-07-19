<?php

return array(
	'name'=>'My Testing Field',
	'defaultController'=>'form',
	'theme' => 'bootstrap',
	'modules'=>array(
        // uncomment the following to enable the Gii tool
        'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'utv',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
        ),
    ),
	'preload' => array('log'),
	'components'=>array(
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName' => false,
			'urlSuffix' => '.html',
			'rules'=>require(dirname(__FILE__).'/routes.php'),
		),
	),
	'params'=>require(dirname(__FILE__).'/params.php'),
);