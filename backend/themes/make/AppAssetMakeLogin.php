<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\themes\make;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAssetMakeLogin extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/../themes/make';




    public $css = [
        'assets/css/style.css',
        'assets/css/ui.css',
        'assets/plugins/bootstrap-loading/lada.min.css',
    ];


    public $js = [
        'assets/plugins/jquery/jquery-1.11.1.min.js',
        'assets/plugins/jquery/jquery-migrate-1.2.1.min.js',
        'assets/plugins/gsap/main-gsap.min.js',
        'assets/plugins/bootstrap/js/bootstrap.min.js',
        'assets/plugins/backstretch/backstretch.min.js',
        'assets/plugins/bootstrap-loading/lada.min.js',
        'assets/js/pages/login-v2.js',
    ];
//    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
//    ];
}
