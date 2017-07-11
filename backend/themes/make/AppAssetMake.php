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
class AppAssetMake extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/../themes/make';




    public $css = [
        'assets/css/style.css',
        'assets/css/theme.css',
        'assets/css/ui.css',
//<!-- BEGIN PAGE STYLE -->
        'assets/plugins/metrojs/metrojs.min.css',
        'assets/plugins/maps-amcharts/ammap/ammap.min.css',
//<!-- END PAGE STYLE -->
        //        KENDO
        'assets/kendo/styles/kendo.common.min.css',
        'assets/kendo/styles/kendo.material.min.css ',
        'assets/kendo/styles/kendo.rtl.min.css ',
        'assets/kendo/styles/kendo.dataviz.min.css ',
        'assets/kendo/styles/kendo.dataviz.material.min.css ',
        /*Estilos Personalisados*/
        'assets/css/custom.css',


    ];

    public $js = [
        'assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js',
        'assets/plugins/jquery/jquery-1.11.1.min.js',
        'assets/plugins/jquery/jquery-migrate-1.2.1.min.js',
        'assets/plugins/jquery-ui/jquery-ui-1.11.2.min.js',
        'assets/plugins/gsap/main-gsap.min.js',
        'assets/plugins/bootstrap/js/bootstrap.min.js',
        'assets/plugins/jquery-cookies/jquery.cookies.min.js',
        'assets/plugins/jquery-block-ui/jquery.blockUI.min.js',
        'assets/plugins/translate/jqueryTranslator.min.js',
        'assets/plugins/bootbox/bootbox.min.js',
        'assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js',
        'assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js',
        'assets/plugins/charts-sparkline/sparkline.min.js',
        'assets/plugins/retina/retina.min.js',
        'assets/plugins/backstretch/backstretch.min.js',
        'assets/js/sidebar_hover.js',
        'assets/js/application.js',
        'assets/js/plugins.js',
        'assets/js/widgets/notes.js',
        'assets/js/quickview.js',
        'assets/js/pages/search.js',
//<!-- BEGIN PAGE SCRIPT -->
        
        'assets/plugins/noty/jquery.noty.packaged.min.js',
        'assets/js/pages/dashboard.js',
        //        KENDO
        'assets/kendo/js/kendo.all.min.js',
        'assets/kendo/js/underscore.js',
        'assets/kendo/content/shared/js/console.js',
        'assets/kendo/content/shared/js/orders.js',

       
        //Notifications
        'assets/notifications/js/scriptgates.js'

    ];
//    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
//    ];
}
