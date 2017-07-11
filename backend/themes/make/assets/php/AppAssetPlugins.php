<?php
/**
 * Created by PhpStorm.
 * User: charlietyn
 * Date: 25/12/2015
 * Time: 11:54
 */

namespace backend\themes\make\assets\php;
use backend\themes\make\AppAssetMake;
use yii\web\View;


class AppAssetPlugins
{

    static function setPlugins_ComponentsCss($view)
    {
        $view->registerCssFile('@web/'.$view->theme->baseUrl.'/assets/global/css/components.css',
            ['depends' => [AppAssetMake::className()]]);
        $view->registerCssFile('@web/'.$view->theme->baseUrl.'/assets/global/css/plugins.css',
            ['depends' => [AppAssetMake::className()]]);
    }

    static function getPlugins_ComponentsCss($view)
    {
        array_push($view->css,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/css/components.css');
        array_push($view->css,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/css/plugins.css');
    }

    static function setPlugins_Select2($view)
    {
        $view->registerJsFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/select2/js/select2.min.js',
            ['depends' => [AppAssetMake::className()]]);
        $view->registerCssFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/select2/css/select2.css',
            ['depends' => [AppAssetMake::className()]]);
    }
    static function getPlugins_Select2($view)
    {
        array_push($view->css,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/select2/css/select2.css');
        array_push($view->js,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/select2/js/select2.min.js');
    }

    static function setPlugins_Icheck($view)
    {
        $view->registerJsFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/icheck/icheck.js',
            ['depends' => [AppAssetMake::className()]]);
        $view->registerCssFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/icheck/skins/all.css',
            ['depends' => [AppAssetMake::className()]]);
    }
    static function getPlugins_Icheck($view)
    {
        array_push($view->css,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/icheck/skins/all.css');
        array_push($view->js,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/icheck/icheck.js');
    }


    static function setPlugins_DropZone($view)
    {
        $view->registerJsFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/dropzone/dropzone.js',
            ['depends' => [AppAssetMake::className()]]);
//        $view->registerJsFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/dropzone/dropzone.min.js',
//            ['depends' => [AppAssetMake::className()]]);
        $view->registerJsFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/dropzone/form-dropzone.js',
            ['depends' => [AppAssetMake::className()]]);
//        $view->registerCssFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/dropzone/css/dropzone.css',
//         ['depends' => [AppAssetMake::className()]]);
        $view->registerCssFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/dropzone/css/dropzone.min.css',
            ['depends' => [AppAssetMake::className()]]);
    }
    static function getPlugins_DropZone($view)
    {
        array_push($view->js,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/dropzone/dropzone.js');
        //array_push($view->js,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/dropzone/dropzone.min.js');
        array_push($view->js,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/dropzone/form-dropzone.js');
        array_push($view->css,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/dropzone/css/dropzone.css');
        // array_push($view->css,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/dropzone/css/dropzone.min.css');
    }
    static function setPlugins_Notifications($view)
    {
        $view->registerCssFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/jquery-notific8/jquery.notific8.min.css',
            ['depends' => [AppAssetMake::className()]]);
        $view->registerJsFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/jquery-notific8/jquery.notific8.min.js',
            ['depends' => [AppAssetMake::className()]]);
    }

    static function getPlugins_Notifications($view)
    {
        array_push($view->css,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/jquery-notific8/jquery.notific8.min.css');
        array_push($view->js,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/jquery-notific8/jquery.notific8.min.js');
    }


    static function setPlugins_NotificationsW8($view)
    {
        $view->registerCssFile('@web/'.$view->theme->baseUrl.'/assets/notifications/css/MetroNotificationStyle.css',
            ['depends' => [AppAssetMake::className()]]);
        $view->registerJsFile('@web/js/notifications/notifications.js',
            ['depends' => [AppAssetMake::className()]]);
    }

    static function getPlugins_NotificationsW8($view)
    {
        array_push($view->css,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/notifications/css/MetroNotificationStyle.css');
        array_push($view->js, \Yii::$app->homeUrl.'js/notifications/notifications.js');

    }

    static function setPlugins_bootstrap_Validation($view)
    {

        $view->registerJsFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/bootstrap_validation/dist/js/bootstrapValidator.js',
            ['depends' => [AppAssetMake::className()]]);
        $view->registerCssFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/bootstrap_validation/dist/css/bootstrapValidator.css',
            ['depends' => [AppAssetMake::className()]]);
    }

    static function getPlugins_bootstrap_Validation($view)
    {
        array_push($view->css,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/bootstrap_validation/dist/css/bootstrapValidator.css');
        array_push($view->js,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/bootstrap_validation/dist/js/bootstrapValidator.js');
    }


    static function setPlugins_bootstrap_Modal($view)
    {

        $view->registerJsFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js',
            ['depends' => [AppAssetMake::className()]]);
        $view->registerJsFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js',
            ['depends' => [AppAssetMake::className()]]);
        $view->registerCssFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css',
            ['depends' => [AppAssetMake::className()]]);
        $view->registerCssFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css',
            ['depends' => [AppAssetMake::className()]]);
    }


    static function getPlugins_bootstrap_Modal($view)
    {
        array_push($view->css, \Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css');
        array_push($view->css,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css');
        array_push($view->js,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js');
        array_push($view->js,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js');
    }

    static function setPlugins_DateRange($view)
    {
        $view->registerCssFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/daterangepicker/daterangepicker-bs3.css',
            ['depends' => [AppAssetMake::className()]]);
        $view->registerJsFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/daterangepicker/moment.min.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $view->registerJsFile('@web/'.$view->theme->baseUrl.'/assets/global/plugins/daterangepicker/daterangepicker.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
    }

    static function getPlugins_DateRange($view)
    {
        array_push($view->css,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/daterangepicker/daterangepicker-bs3.css');
        array_push($view->js,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/daterangepicker/moment.min.js');
        array_push($view->js,\Yii::$app->homeUrl.$view->theme->baseUrl.'/assets/global/plugins/daterangepicker/daterangepicker.js');
    }

}