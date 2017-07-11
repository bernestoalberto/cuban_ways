<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/

namespace backend\modules\housing\controllers;

use Yii;
use backend\themes\make\AppAssetMake;
use backend\themes\make\assets\php\AppAssetPlugins;
use yii\filters\AccessControl;
use yii\web\View;
use backend\modules\housing\models\Service_housing;
use backend\modules\housing\models\Service_housingSearch;
use yii\web\Controller;
use yii\db\Query;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/** 
 * service_housingimplenta las acciones del modelo service_housing .
 *
 */
class Service_housingController extends Controller
{

    public function behaviors()
    {
        return [
			 'access' => [
						'class' => AccessControl::className(),
						'rules' => [
								[
										'actions' => ['list_json','list','update','index','view','create','delete','load_excel','excel','findbyukjson','load'],
										'allow' => true,
										'roles' => ['@'],
								]
						],
				],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }


 /**
     * Lists all Service_housing models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Service_housingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
				$this->view->registerJs('var module=true;',View::POS_HEAD);

		 AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
		 AppAssetPlugins::setPlugins_NotificationsW8($this->view);
		 AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
		 AppAssetPlugins::setPlugins_Icheck($this->view);;
		 AppAssetPlugins::setPlugins_ComponentsCss($this->view);
		 AppAssetPlugins::setPlugins_Select2($this->view);
        $this->view->registerJsFile('@web/js/validation/validation.js',
		 ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		 //Datos de la Tabla Service_housing
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_service/kendo_housing_service.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_service/kendo_housing_service_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
				'index'=>true
        ]);
    }


 /**
     * Lists all Service_housing models.
     * @return mixed
     */
    public function actionLoad()
    {

		 $this->view->js=[];
		 $this->view->css=[];
		 AppAssetPlugins::getPlugins_bootstrap_Modal($this->view);
		 AppAssetPlugins::getPlugins_NotificationsW8($this->view);
		 AppAssetPlugins::getPlugins_bootstrap_Validation($this->view);
		 AppAssetPlugins::getPlugins_Icheck($this->view);;
		 AppAssetPlugins::getPlugins_ComponentsCss($this->view);

        		AppAssetPlugins::getPlugins_Select2($this->view);
        array_push($this->view->js,Yii::$app->homeUrl.'/js/validation/validation.js');


		 //Datos de la Tabla Service_housing
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing/kendo_housing.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_service/kendo_housing_service.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_service/kendo_housing_service_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_components.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_actions_ajax.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_init.js');
        return $this->getView()->render('@backend/modules/housing/views/service_housing/index',array('index'=>false));
    }
/**
     * Displays a single Service_housing model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

/**
     * Creates a new Service_housing model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
		 $post=count(Yii::$app->request->post())>0;
        if (Yii::$app->request->getIsAjax()) {
			if( count(Yii::$app->request->post())>0)
				{
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $model = new Service_housing();
            if ($model->load(Yii::$app->request->post())) {
                try {
                    	$result=$model->save();
                    if($result)
                        $jsonResult = array('success' => true, 'message' => '');
                    else
                        $jsonResult = array('success' => false, 'message' => 'Ocurrio un error en la insercion verifique bien los datos');
                } catch (Exception $e) {
                    $jsonResult = array('success' => false, 'message' => '');
                }
            	return $jsonResult;
            }
           }
        }
	 else
	 	{
            $model = new Service_housing();
			 $action='create';
            if ($model->load(Yii::$app->request->post())) {
                try {

                    	$result=$model->save();
                    if($result){
                       return $this->redirect(Yii::$app->homeUrl.'housing/service_housing', [
            				'message' =>'Elemento insertado correctamente'
        					]);
						}
                    else
						{
							return $this->render('form', [
							'message'=>'Ocurrio un error en la insercion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_service_housing'=>'',
            		 ]);
					}
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la insercion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_service_housing'=>'',
            		 ]);
                }
            }
	 	}
		if(!$post){

		 AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
		 AppAssetPlugins::setPlugins_NotificationsW8($this->view);
		 AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
		 AppAssetPlugins::setPlugins_Icheck($this->view);;
		 AppAssetPlugins::setPlugins_ComponentsCss($this->view);
		 AppAssetPlugins::setPlugins_Select2($this->view);
        $this->view->registerJsFile('@web/js/validation/validation.js',
		 ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		 //Datos de la Tabla Service_housing
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_service/kendo_housing_service.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_service/kendo_housing_service_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_service_housing'=>'',
            		 ]);
                }	}
/**
     * Update a Service_housing model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionUpdate()
    {
		 $post=count(Yii::$app->request->post())>0;
        if (Yii::$app->request->getIsAjax() ) {
			if( count(Yii::$app->request->post())>0)
				{
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

			$service_housing= (object)Yii::$app->request->post('Service_housing');
            $model =  $this->findModel($service_housing->id_service_housing);
            if ($model->load(Yii::$app->request->post())) {
                try {
                    	$result=$model->update();
                        $jsonResult = array('success' => true, 'message' => '');
                } catch (Exception $e) {
                    $jsonResult = array('success' => false, 'message' => '');
                }
            	return $jsonResult;
            }
        	}
        }
	 else
	 	{
			 $action='update';
			if(isset($_GET['id_service_housing'])){
					$condition =array(
						'id_service_housing'=>$_GET['id_service_housing']
						);
            $model = Service_housing::findOne($condition);

		 AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
		 AppAssetPlugins::setPlugins_NotificationsW8($this->view);
		 AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
		 AppAssetPlugins::setPlugins_Icheck($this->view);;
		 AppAssetPlugins::setPlugins_ComponentsCss($this->view);
		 AppAssetPlugins::setPlugins_Select2($this->view);
        $this->view->registerJsFile('@web/js/validation/validation.js',
		 ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		 //Datos de la Tabla Service_housing
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_service/kendo_housing_service.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_service/kendo_housing_service_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_service_housing'=>'Service_housing[id_service_housing]',
            		 ]);
	}
			$id_service_housing=Yii::$app->request->post('Service_housing')['id_service_housing'];
					$condition =array(
						'id_service_housing'=>$id_service_housing
						);
			$model=Service_housing::findOne($condition);
            if ($model->load(Yii::$app->request->post())) {
                try {

                    	$model->update();
                       return $this->redirect(Yii::$app->homeUrl.'housing/service_housing', [
            				'message' =>'Elemento insertado correctamente'
        					]);
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la actualizacion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_service_housing'=>'Service_housing[id_service_housing]',
            		 ]);
                }
            }
	 	}
		//Si no hay datos redirecciona al index
		return $this->redirect(Yii::$app->homeUrl.'housing/service_housing', [
				'message' =>'Elemento insertado correctamente'
		]);
	}
/**
     * Deletes an existing Service_housing model.
     * If deletion is successful, return a message in json format with ok response.
     * @return josn format message
     */
    public function actionDelete()
    {
        if($_POST['array']){
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $array= json_decode($_POST['array']);
                try {
            foreach ($array as $service_housing) {
                    $id=array(
                        'id_service_housing'=>$service_housing->id_service_housing
                    );
                    $this->findModel($id)->delete();
                    $jsonResult = array('success' => true, 'message' => 'El service_housing  fue eliminado con exito');
                }            }
			catch (Exception $e) {
                    $jsonResult = array('success' => false, 'message' => 'Algunos elementos no se eliminarion,existen elementos asociados, no es posible su eliminacion');
                }
            return $jsonResult;
        }
    }
/**
     * Finds the Service_housing model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Service_housing the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Service_housing::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('LA pagina solicitada no existe');
        }
    }


/**
	 * Returns a list of models in JSON format.
	 * This method is used by the js in the view.
	 * @return a list of models in json format
	 */
    public function actionList_json()
    {

		if (Yii::$app->request->getIsAjax())
        {
			$query= new Query();
			$rows='';
			if(isset($_GET['combo']))
			{
				$like='';
				if(isset($_GET['q']))
					$like=$_GET['q'];
		 			$rows = $query
		 				->from('service_housing')
		 				->orderBy(array('service_housing.id_service_housing'=>SORT_ASC))
			 	->join('inner join','housing','service_housing.id_housing=housing.id_housing')
			 	->join('inner join','housing_service','service_housing.id_service=housing_service.id_service')
			 	->select('service_housing.*,housing.name_housing ,housing_service.name_service ,service_housing.price as text ,service_housing.id_service_housing as id ')
			 	->where('service_housing.price LIKE '."'%".$like."%'")
			 	->all();
				$result['data']=$rows;
				$rows=$result;
			}
			else
		 	$rows = $query
		 		->from('service_housing')
		 		->orderBy(array('service_housing.id_service_housing'=>SORT_ASC))
			 	->join('inner join','housing','service_housing.id_housing=housing.id_housing')
			 	->join('inner join','housing_service','service_housing.id_service=housing_service.id_service')
			 	->select('service_housing.*,housing.name_housing ,housing_service.name_service ')
			 	->all();
			if (isset($_GET['callback'])) {
                \Yii::$app->response->format = \yii\web\Response::FORMAT_JSONP;
                $callback = $_GET['callback'];
                return ['callback' => $callback, 'data' => $rows];
            } else {
                \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return $rows;
            }
		}

    }
/**
     * Load  from Excel a list of the Service_housing table based on its primary key value.
     * @return boolean the list is loaded
     */
    public  function actionLoad_excel()
    {
		if (Yii::$app->request->getIsAjax()) {
			$fileadreess = $_FILES['excel']['tmp_name'];
			include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel_IOFactory.php');
			$exceklib= new \PHPExcel_IOFactory();
			$message='';
			$objPHPExcel = $exceklib->load($fileadreess);
			foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) 
			{
				$lastRow = $worksheet->getHighestRow();
					for ($row = 2; $row <= $lastRow; $row++) 
					{
					$id_service_housing = $worksheet->getCell('A' . $row)->getFormattedValue();
					if (!empty($id_service_housing)) {
						$id_service_housing = $worksheet->getCell('A' . $row)->getValue();
						$price = $worksheet->getCell('B' . $row)->getValue();
						$canceled = $worksheet->getCell('C' . $row)->getValue();
						$id_service = $worksheet->getCell('D' . $row)->getValue();
						$id_housing = $worksheet->getCell('E' . $row)->getValue();
						$service_housing = new Service_housing();
						$service_housing->id_service_housing  =  $id_service_housing;
						$service_housing->price  =  $price;
						$service_housing->canceled  =  $canceled;
						$service_housing->id_service  =  $id_service;
						$service_housing->id_housing  =  $id_housing;
						$service_housing->save();
					}
					}
				}
            if($message=='')
			{
				$message = 'Los elementos fueron importados con exito';

			}
			$jsonResult = array('success' => true, 'message' => $message);
			echo json_encode($jsonResult);
		}	 }

/**
     * Create a Excel file  from a list of the Service_housing 
     * @return boolean the list is created
     */
    public  function actionExcel()
    {
			include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel_IOFactory.php');
        	include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel.php');

			$service_housinglist=json_decode($_POST['service_housing_export']);
			$objPHPExcel = new \PHPExcel();
        	$name_user=Yii::$app->getUser()->identity->oldAttributes['username'];
			        $objPHPExcel->getProperties()->setCreator(Yii::$app->id)
				->setLastModifiedBy($name_user)
				->setTitle('Listado de Service_housing')
				->setSubject('Listado de Service_housing')
				->setDescription('Documento con el listado de Service_housings segun '.Yii::$app->id);
        		$objPHPExcel->setActiveSheetIndex(0);
				$objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_service_housing');
				$objPHPExcel->getActiveSheet()->setCellValue('B1', 'price');
				$objPHPExcel->getActiveSheet()->setCellValue('C1', 'canceled');
				$objPHPExcel->getActiveSheet()->setCellValue('D1', 'id_service');
				$objPHPExcel->getActiveSheet()->setCellValue('E1', 'id_housing');
				$i=2;
				foreach($service_housinglist as  $service_housing) 
					{	
						$service_housing=(object)$service_housing;
						$objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $service_housing->id_service_housing);
						$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $service_housing->price);
						$objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $service_housing->canceled);
						$objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $service_housing->id_service);
						$objPHPExcel->getActiveSheet()->setCellValue('E'.$i, $service_housing->id_housing);
						$i++;
					}

	 			$exceklib= new \PHPExcel_IOFactory();
        		$objWriter = $exceklib->createWriter($objPHPExcel, 'Excel2007');
				header("Content-Disposition: attachment; filename=\"Listado_service_housing.xls\"");
		        header("Content-Type: application/vnd.ms-excel");
				$objWriter->save('php://output');
				exit;
	 }

/**
	 * Find a single Service_housing model.
	 * @return mixed
	 */
public function actionFindbyukjson()
	{
		if (Yii::$app->request->getIsAjax() && isset( $_GET['Service_housing'])) {
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$condition=$_GET['Service_housing'];
			$service_housing=Service_housing::findByUK($condition);
			$jsonResult = array('valid' => true);
			if($service_housing!=null &&  $_GET['id_service_housing']!=$service_housing['id_service_housing'])
				$jsonResult = array('valid' => false);
			return $jsonResult;
		}
	}
/**
     * Returns a list of models .
     * @return a list of models
     */
    public function actionList()
    {
        if(count($_POST)>0) {
            $rows = Service_housing::find()->all();
            return $rows;
        }
    }
}
 ?>
