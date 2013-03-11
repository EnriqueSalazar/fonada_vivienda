<?php

// uncomment the following to define a path alias
//
//
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Reporte de Operadores - Vivienda',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.extensions.EGalleria.*',
    ),
    'modules' => array(
        // uncomment the following to enable the Gii tool
        'importcsv' => array(
            'path' => 'upload/importcsv/', // path to folder for saving csv file and file with import params
        ),
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => false,
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
    ),
    'language' => 'es',
    // application components
    'components' => array(
        'cache' => array(
            'class' => 'CApcCache',
        ),
        'session' => array(
            'class' => 'system.web.CDbHttpSession',
            'connectionID' => 'db',
        ),
        'phpThumb' => array(
            'class' => 'ext.EPhpThumb.EPhpThumb',
//    'options'=>array(optional phpThumb specific options are added here)
        ),
        'thumb' => array(
            'class' => 'ext.phpthumb.EasyPhpThumb',
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        // uncomment the following to enable URLs in path-format
        /*
          'urlManager'=>array(
          'urlFormat'=>'path',
          'rules'=>array(
          '<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
          ),
          ),
         */
        /* 'db'=>array(
          'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
          ), */
        // uncomment the following to use a MySQL database
        'db' => require(dirname(__FILE__) . '/db/db.php'),

        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),

        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning, info, trace',
                ),
                // uncomment the following to show log messages on web pages
                array(
                    'class' => 'ext.firephp.SFirePHPLogRoute',
                    'levels' => 'error, warning, info, trace',
                ),
                // profile log route
                array(
                    'class' => 'ext.firephp.SFirePHPProfileLogRoute',
                    'report' => 'summary' // or "callstack"
                ),
                array(
                    'class' => 'CWebLogRoute',
                    //
                    // I include *trace* for the 
                    // sake of the example, you can include
                    // more levels separated by commas
                    //'levels' => 'trace',
                    'levels' => 'error, warning, info, trace',
                    //
                    // I include *vardump* but you
                    // can include more separated by commas
                    'categories' => 'vardump',
                    //
                    // This is self-explanatory right?
                    'showInFireBug' => true,
                ),
            ),
        ),
        // conecta a tabla donde estan las relacione de las autorizaciones
        'authManager' => array(
            'class' => 'CDbAuthManager',
            'connectionID' => 'db',
            'itemTable' => 'authitem',
            'itemChildTable' => 'authitemchild',
            'assignmentTable' => 'authassignment',
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'enriquesalazar@fondoadaptacion.gov.co',
    ),
);