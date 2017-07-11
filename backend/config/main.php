<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

//Definioción de la localización de lso módulos
$modules=require(__DIR__ . '/modules.php');
return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'components' => [
        'user' => [
            'identityClass' => 'backend\modules\security\models\Usuario',
            'enableAutoLogin' => true,
            'loginUrl' => ['site/login'],
            'identityCookie' => [
                'name' => '_backendUserCubanWays', // unique for backend
                'path'=>'/backend/web'  // correct path for the backend app.
            ]
        ],
//        Definición de session
       'session' => [
            'name' => '_backendSessionId', // unique for backend
            'savePath' => __DIR__ . '/../runtime', // a temporary folder on backend
        ],
        //   Definición del token
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'cuban_ways_backend',
            'csrfParam' => '_backendCSRF',
        ],
        'view' => [
            'theme' => [
                'basePath' => '@backend/themes/make',
                'baseUrl' => '../themes/make',
                'pathMap' => [
                    '@backend/views' => '@backend/themes/make/views',
                ],
            ],
        ],
//URL limpias
        'urlManager'=>[
            'showScriptName'=>false,
            'enablePrettyUrl'=>true
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
    //Definición de la variable modules para que se reconozca la separación x módulos.
    'modules' => $modules
];
