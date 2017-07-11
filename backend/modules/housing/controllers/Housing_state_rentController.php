<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/

namespace backend\modules\housing\controllers;

use Yii;
use backend\themes\make\AppAssetMake;
use backend\themes\make\assets\php\AppAssetPlugins;
use yii\filters\AccessControl;
use yii\web\View;
use backend\modules\housing\models\Housing_state_rent;
use backend\modules\housing\models\Housing_state_rentSearch;
use yii\web\Controller;
use yii\db\Query;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/** 
 * housing_state_rentimplenta las acciones del modelo housing_state_rent .
 *
 */
class Housing_state_rentController extends Controller
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
     * Lists all Housing_state_rent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Housing_state_rentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
				$this->view->registerJs('var module=true;',View::POS_HEAD);

		 AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
		 AppAssetPlugins::setPlugins_NotificationsW8($this->view);
		 AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
		 AppAssetPlugins::setPlugins_Icheck($this->view);;
		 AppAssetPlugins::setPlugins_ComponentsCss($this->view);
        $this->view->registerJsFile('@web/js/validation/validation.js',
		 ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		 //Datos de la Tabla Housing_state_rent
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
				'index'=>true
        ]);
    }


 /**
     * Lists all Housing_state_rent models.
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

        array_push($this->view->js,Yii::$app->homeUrl.'/js/validation/validation.js');


		 //Datos de la Tabla Housing_state_rent
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_components.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_actions_ajax.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_init.js');
        return $this->getView()->render('@backend/modules/housing/views/housing_state_rent/index',array('index'=>false));
    }
/**
     * Displays a single Housing_state_rent model.
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
     * Creates a new Housing_state_rent model.
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
            $model = new Housing_state_rent();
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
            $model = new Housing_state_rent();
			 $action='create';
            if ($model->load(Yii::$app->request->post())) {
                try {

                    	$result=$model->save();
                    if($result){
                       return $this->redirect(Yii::$app->homeUrl.'housing/housing_state_rent', [
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
							'id_housing_state_rent'=>'',
            		 ]);
					}
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la insercion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_housing_state_rent'=>'',
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
        $this->view->registerJsFile('@web/js/validation/validation.js',
		 ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		 //Datos de la Tabla Housing_state_rent
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_housing_state_rent'=>'',
            		 ]);
                }	}
/**
     * Update a Housing_state_rent model.
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

			$housing_state_rent= (object)Yii::$app->request->post('Housing_state_rent');
            $model =  $this->findModel($housing_state_rent->id_housing_state_rent);
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
			if(isset($_GET['id_housing_state_rent'])){
					$condition =array(
						'id_housing_state_rent'=>$_GET['id_housing_state_rent']
						);
            $model = Housing_state_rent::findOne($condition);

		 AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
		 AppAssetPlugins::setPlugins_NotificationsW8($this->view);
		 AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
		 AppAssetPlugins::setPlugins_Icheck($this->view);;
		 AppAssetPlugins::setPlugins_ComponentsCss($this->view);
        $this->view->registerJsFile('@web/js/validation/validation.js',
		 ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		 //Datos de la Tabla Housing_state_rent
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_housing_state_rent'=>'Housing_state_rent[id_housing_state_rent]',
            		 ]);
	}
			$id_housing_state_rent=Yii::$app->request->post('Housing_state_rent')['id_housing_state_rent'];
					$condition =array(
						'id_housing_state_rent'=>$id_housing_state_rent
						);
			$model=Housing_state_rent::findOne($condition);
            if ($model->load(Yii::$app->request->post())) {
                try {

                    	$model->update();
                       return $this->redirect(Yii::$app->homeUrl.'housing/housing_state_rent', [
            				'message' =>'Elemento insertado correctamente'
        					]);
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la actualizacion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_housing_state_rent'=>'Housing_state_rent[id_housing_state_rent]',
            		 ]);
                }
            }
	 	}
		//Si no hay datos redirecciona al index
		return $this->redirect(Yii::$app->homeUrl.'housing/housing_state_rent', [
				'message' =>'Elemento insertado correctamente'
		]);
	}
/**
     * Deletes an existing Housing_state_rent model.
     * If deletion is successful, return a message in json format with ok response.
     * @return josn format message
     */
    public function actionDelete()
    {
        if($_POST['array']){
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $array= json_decode($_POST['array']);
                try {
            foreach ($array as $housing_state_rent) {
                    $id=array(
                        'id_housing_state_rent'=>$housing_state_rent->id_housing_state_rent
                    );
                    $this->findModel($id)->delete();
                    $jsonResult = array('success' => true, 'message' => 'El housing_state_rent  fue eliminado con exito');
                }            }
			catch (Exception $e) {
                    $jsonResult = array('success' => false, 'message' => 'Algunos elementos no se eliminarion,existen elementos asociados, no es posible su eliminacion');
                }
            return $jsonResult;
        }
    }
/**
     * Finds the Housing_state_rent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Housing_state_rent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Housing_state_rent::findOne($id)) !== null) {
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
		 				->from('housing_state_rent')
		 				->orderBy(array('housing_state_rent.id_housing_state_rent'=>SORT_ASC))
			 	->select('housing_state_rent.*,housing_state_rent.name_housing_state_rent as text ,housing_state_rent.id_housing_state_rent as id ')
			 	->where('housing_state_rent.name_housing_state_rent LIKE '."'%".$like."%'")
			 	->all();
				$result['data']=$rows;
				$rows=$result;
			}
			else
		 	$rows = $query
		 		->from('housing_state_rent')
		 		->orderBy(array('housing_state_rent.id_housing_state_rent'=>SORT_ASC))
			 	->select('housing_state_rent.*')
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
     * Load  from Excel a list of the Housing_state_rent table based on its primary key value.
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
					$id_housing_state_rent = $worksheet->getCell('A' . $row)->getFormattedValue();
					if (!empty($id_housing_state_rent)) {
						$id_housing_state_rent = $worksheet->getCell('A' . $row)->getValue();
						$name_housing_state_rent = $worksheet->getCell('B' . $row)->getValue();
						$housing_state_rent = new Housing_state_rent();
						$housing_state_rent->id_housing_state_rent  =  $id_housing_state_rent;
						$housing_state_rent->name_housing_state_rent  =  $name_housing_state_rent;
						$housing_state_rent->save();
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
     * Create a Excel file  from a list of the Housing_state_rent 
     * @return boolean the list is created
     */
    public  function actionExcel()
    {
			include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel_IOFactory.php');
        	include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel.php');

			$housing_state_rentlist=json_decode($_POST['housing_state_rent_export']);
			$objPHPExcel = new \PHPExcel();
        	$name_user=Yii::$app->getUser()->identity->oldAttributes['username'];
			        $objPHPExcel->getProperties()->setCreator(Yii::$app->id)
				->setLastModifiedBy($name_user)
				->setTitle('Listado de Housing_state_rent')
				->setSubject('Listado de Housing_state_rent')
				->setDescription('Documento con el listado de Housing_state_rents segun '.Yii::$app->id);
        		$objPHPExcel->setActiveSheetIndex(0);
				$objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_housing_state_rent');
				$objPHPExcel->getActiveSheet()->setCellValue('B1', 'name_housing_state_rent');
				$i=2;
				foreach($housing_state_rentlist as  $housing_state_rent) 
					{	
						$housing_state_rent=(object)$housing_state_rent;
						$objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $housing_state_rent->id_housing_state_rent);
						$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $housing_state_rent->name_housing_state_rent);
						$i++;
					}

	 			$exceklib= new \PHPExcel_IOFactory();
        		$objWriter = $exceklib->createWriter($objPHPExcel, 'Excel2007');
				header("Content-Disposition: attachment; filename=\"Listado_housing_state_rent.xls\"");
		        header("Content-Type: application/vnd.ms-excel");
				$objWriter->save('php://output');
				exit;
	 }

/**
	 * Find a single Housing_state_rent model.
	 * @return mixed
	 */
public function actionFindbyukjson()
	{
		if (Yii::$app->request->getIsAjax() && isset( $_GET['Housing_state_rent'])) {
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$condition=$_GET['Housing_state_rent'];
			$housing_state_rent=Housing_state_rent::findByUK($condition);
			$jsonResult = array('valid' => true);
			if($housing_state_rent!=null &&  $_GET['id_housing_state_rent']!=$housing_state_rent['id_housing_state_rent'])
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
            $rows = Housing_state_rent::find()->all();
            return $rows;
        }
    }
}
 ?>
