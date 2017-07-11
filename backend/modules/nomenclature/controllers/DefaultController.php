<?php
/*Clase del Controladora del Modulo nomenclature*/
/*Generado by Pro Generator */
/*@author Charlietyn  */

namespace backend\modules\nomenclature\controllers;
use yii\web\Controller;
use yii\web\View;
class DefaultController extends Controller 
{
    public function actionIndex()
    {
 		  $this->view->registerJs('var module=true',View::POS_HEAD);
        return $this->render('index');
    }
	 public function actionLoad()
    {
        return $this->getView()->render('@app/modules/nomenclature/views/default/load');
    }
}
