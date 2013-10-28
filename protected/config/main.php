<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');
return array(
    'theme' => 'bootstrap',
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My Web Application',
    // preloading 'log' component
    'preload' => array('log',),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.modules.user.models.*',
        'application.modules.user.components.*',
        'application.modules.auth.*',
        'application.modules.auth.components.*',
    ),
    'modules' => array(
        // uncomment the following to enable the Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'Hello@123',
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
        //Register Auth
        'auth' => array(
            'strictMode' => true, // when enabled authorization items cannot be assigned children of the same type.
            'userClass' => 'Users', // the name of the user model class.
            'userIdColumn' => 'userid', // the name of the user id column.
            'userNameColumn' => 'username', // the name of the user name column.
            'defaultLayout' => 'application.views.layouts.main', // the layout used by the module.
            'viewDir' => null, // the path to view files to use with this module.
        ),
    ),
    // application components
    'components' => array(
        'bootstrap' => array(
            'class' => 'bootstrap.components.Bootstrap',
        ),
        'authManager'=>array(
            'behaviors' => array(
                'auth' => array(
                    'class' => 'auth.components.AuthBehavior',
                ),
            ),
        ),
        'user' => array(
            // enable cookie-based authentication
            'class' => 'auth.components.AuthWebUser',
            'admins' => array('davidtim'),
        ),
        // uncomment the following to enable URLs in path-format
        
          'urlManager'=>array(
            'urlFormat'=>'path',
            'showScriptName'=>false,
            'rules'=>array(
                        '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                    ),
          ),
         
        /*'db' => array(
            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
        ),*/
        // uncomment the following to use a MySQL database
        
          'db'=>array(
          'connectionString' => 'mysql:host=localhost;dbname=kiteint',
          'emulatePrepare' => true,
          'username' => 'root',
          'password' => '123456',
          'charset' => 'utf8',
          ),
         
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
        'browser' => array(
            'class' => 'application.extensions.Browser.CBrowserComponent'
        ),
        'datetimepicker' => array(
            'class' => 'application.extensions.CJuiDateTimePicker.CJuiDateTimePicker'
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);