<?php
/*Clase del Controladora del Modulo security*/
/*Generado by Pro Generator */
/*@author Charlietyn  */

namespace backend\modules\security\controllers;
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
        return $this->getView()->render('@app/modules/security/views/default/load');
    }
}
