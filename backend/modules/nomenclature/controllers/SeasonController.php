<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/

namespace backend\modules\nomenclature\controllers;

use Yii;
use backend\themes\make\AppAssetMake;
use backend\themes\make\assets\php\AppAssetPlugins;
use yii\filters\AccessControl;
use yii\web\View;
use backend\modules\nomenclature\models\Season;
use backend\modules\nomenclature\models\SeasonSearch;
use yii\web\Controller;
use yii\db\Query;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/** 
 * seasonimplenta las acciones del modelo season .
 *
 */
class SeasonController extends Controller
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
     * Lists all Season models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SeasonSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
				$this->view->registerJs('var module=true;',View::POS_HEAD);

		 AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
		 AppAssetPlugins::setPlugins_NotificationsW8($this->view);
		 AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
		 AppAssetPlugins::setPlugins_Icheck($this->view);;
		 AppAssetPlugins::setPlugins_ComponentsCss($this->view);
        $this->view->registerJsFile('@web/js/validation/validation.js',
		 ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		 //Datos de la Tabla Season
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
				'index'=>true
        ]);
    }


 /**
     * Lists all Season models.
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


		 //Datos de la Tabla Season
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/nomenclature/season/kendo_season.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/nomenclature/season/kendo_season_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/nomenclature/season/kendo_season_components.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/nomenclature/season/kendo_season_actions_ajax.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/nomenclature/season/kendo_season_init.js');
        return $this->getView()->render('@backend/modules/nomenclature/views/season/index',array('index'=>false));
    }
/**
     * Displays a single Season model.
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
     * Creates a new Season model.
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
            $model = new Season();
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
            $model = new Season();
			 $action='create';
            if ($model->load(Yii::$app->request->post())) {
                try {

                    	$result=$model->save();
                    if($result){
                       return $this->redirect(Yii::$app->homeUrl.'nomenclature/season', [
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
							'id_season'=>'',
            		 ]);
					}
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la insercion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_season'=>'',
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

		 //Datos de la Tabla Season
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_season'=>'',
            		 ]);
                }	}
/**
     * Update a Season model.
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

			$season= (object)Yii::$app->request->post('Season');
            $model =  $this->findModel($season->id_season);
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
			if(isset($_GET['id_season'])){
					$condition =array(
						'id_season'=>$_GET['id_season']
						);
            $model = Season::findOne($condition);

		 AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
		 AppAssetPlugins::setPlugins_NotificationsW8($this->view);
		 AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
		 AppAssetPlugins::setPlugins_Icheck($this->view);;
		 AppAssetPlugins::setPlugins_ComponentsCss($this->view);
        $this->view->registerJsFile('@web/js/validation/validation.js',
		 ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		 //Datos de la Tabla Season
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_season'=>'Season[id_season]',
            		 ]);
	}
			$id_season=Yii::$app->request->post('Season')['id_season'];
					$condition =array(
						'id_season'=>$id_season
						);
			$model=Season::findOne($condition);
            if ($model->load(Yii::$app->request->post())) {
                try {

                    	$model->update();
                       return $this->redirect(Yii::$app->homeUrl.'nomenclature/season', [
            				'message' =>'Elemento insertado correctamente'
        					]);
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la actualizacion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_season'=>'Season[id_season]',
            		 ]);
                }
            }
	 	}
		//Si no hay datos redirecciona al index
		return $this->redirect(Yii::$app->homeUrl.'nomenclature/season', [
				'message' =>'Elemento insertado correctamente'
		]);
	}
/**
     * Deletes an existing Season model.
     * If deletion is successful, return a message in json format with ok response.
     * @return josn format message
     */
    public function actionDelete()
    {
        if($_POST['array']){
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $array= json_decode($_POST['array']);
                try {
            foreach ($array as $season) {
                    $id=array(
                        'id_season'=>$season->id_season
                    );
                    $this->findModel($id)->delete();
                    $jsonResult = array('success' => true, 'message' => 'El season  fue eliminado con exito');
                }            }
			catch (Exception $e) {
                    $jsonResult = array('success' => false, 'message' => 'Algunos elementos no se eliminarion,existen elementos asociados, no es posible su eliminacion');
                }
            return $jsonResult;
        }
    }
/**
     * Finds the Season model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Season the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Season::findOne($id)) !== null) {
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
		 				->from('season')
		 				->orderBy(array('season.id_season'=>SORT_ASC))
			 	->select('season.*,season.name_season as text ,season.id_season as id ')
			 	->where('season.name_season LIKE '."'%".$like."%'")
			 	->all();
				$result['data']=$rows;
				$rows=$result;
			}
			else
		 	$rows = $query
		 		->from('season')
		 		->orderBy(array('season.id_season'=>SORT_ASC))
			 	->select('season.*')
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
     * Load  from Excel a list of the Season table based on its primary key value.
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
					$id_season = $worksheet->getCell('A' . $row)->getFormattedValue();
					if (!empty($id_season)) {
						$id_season = $worksheet->getCell('A' . $row)->getValue();
						$name_season = $worksheet->getCell('B' . $row)->getValue();
						$season = new Season();
						$season->id_season  =  $id_season;
						$season->name_season  =  $name_season;
						$season->save();
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
     * Create a Excel file  from a list of the Season 
     * @return boolean the list is created
     */
    public  function actionExcel()
    {
			include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel_IOFactory.php');
        	include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel.php');

			$seasonlist=json_decode($_POST['season_export']);
			$objPHPExcel = new \PHPExcel();
        	$name_user=Yii::$app->getUser()->identity->oldAttributes['username'];
			        $objPHPExcel->getProperties()->setCreator(Yii::$app->id)
				->setLastModifiedBy($name_user)
				->setTitle('Listado de Season')
				->setSubject('Listado de Season')
				->setDescription('Documento con el listado de Seasons segun '.Yii::$app->id);
        		$objPHPExcel->setActiveSheetIndex(0);
				$objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_season');
				$objPHPExcel->getActiveSheet()->setCellValue('B1', 'name_season');
				$i=2;
				foreach($seasonlist as  $season) 
					{	
						$season=(object)$season;
						$objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $season->id_season);
						$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $season->name_season);
						$i++;
					}

	 			$exceklib= new \PHPExcel_IOFactory();
        		$objWriter = $exceklib->createWriter($objPHPExcel, 'Excel2007');
				header("Content-Disposition: attachment; filename=\"Listado_season.xls\"");
		        header("Content-Type: application/vnd.ms-excel");
				$objWriter->save('php://output');
				exit;
	 }

/**
	 * Find a single Season model.
	 * @return mixed
	 */
public function actionFindbyukjson()
	{
		if (Yii::$app->request->getIsAjax() && isset( $_GET['Season'])) {
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$condition=$_GET['Season'];
			$season=Season::findByUK($condition);
			$jsonResult = array('valid' => true);
			if($season!=null &&  $_GET['id_season']!=$season['id_season'])
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
            $rows = Season::find()->all();
            return $rows;
        }
    }
}
 ?>
