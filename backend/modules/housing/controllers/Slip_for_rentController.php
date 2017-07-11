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
use backend\modules\housing\models\Slip_for_rent;
use backend\modules\housing\models\Slip_for_rentSearch;
use yii\web\Controller;
use yii\db\Query;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/** 
 * slip_for_rentimplenta las acciones del modelo slip_for_rent .
 *
 */
class Slip_for_rentController extends Controller
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
     * Lists all Slip_for_rent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Slip_for_rentSearch();
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

		 //Datos de la Tabla Slip_for_rent
		 AppAssetPlugins::setPlugins_DateRange($this->view);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
				'index'=>true
        ]);
    }


 /**
     * Lists all Slip_for_rent models.
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


		 //Datos de la Tabla Slip_for_rent
		 AppAssetPlugins::getPlugins_DateRange($this->view);
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing/kendo_housing.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/usuario/kendo_usuario.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/usuario/kendo_usuario_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_components.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_actions_ajax.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_init.js');
        return $this->getView()->render('@backend/modules/housing/views/slip_for_rent/index',array('index'=>false));
    }
/**
     * Displays a single Slip_for_rent model.
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
     * Creates a new Slip_for_rent model.
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
            $model = new Slip_for_rent();
            if ($model->load(Yii::$app->request->post())) {
                try {
                    $model->createdat= date('Y-m-d',strtotime($model->createdat));
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
            $model = new Slip_for_rent();
			 $action='create';
            if ($model->load(Yii::$app->request->post())) {
                try {

                    $model->createdat= date('Y-m-d',strtotime($model->createdat));
                    	$result=$model->save();
                    if($result){
                       return $this->redirect(Yii::$app->homeUrl.'housing/slip_for_rent', [
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
							'id_slip_for_rent'=>'',
            		 ]);
					}
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la insercion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_slip_for_rent'=>'',
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

		 //Datos de la Tabla Slip_for_rent
		 AppAssetPlugins::setPlugins_DateRange($this->view);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_slip_for_rent'=>'',
            		 ]);
                }	}
/**
     * Update a Slip_for_rent model.
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

			$slip_for_rent= (object)Yii::$app->request->post('Slip_for_rent');
            $model =  $this->findModel($slip_for_rent->id_slip_for_rent);
            if ($model->load(Yii::$app->request->post())) {
                try {
                    $model->createdat= date('Y-m-d',strtotime($model->createdat));
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
			if(isset($_GET['id_slip_for_rent'])){
					$condition =array(
						'id_slip_for_rent'=>$_GET['id_slip_for_rent']
						);
            $model = Slip_for_rent::findOne($condition);

		 AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
		 AppAssetPlugins::setPlugins_NotificationsW8($this->view);
		 AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
		 AppAssetPlugins::setPlugins_Icheck($this->view);;
		 AppAssetPlugins::setPlugins_ComponentsCss($this->view);
		 AppAssetPlugins::setPlugins_Select2($this->view);
        $this->view->registerJsFile('@web/js/validation/validation.js',
		 ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		 //Datos de la Tabla Slip_for_rent
		 AppAssetPlugins::setPlugins_DateRange($this->view);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/slip_for_rent/kendo_slip_for_rent_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_slip_for_rent'=>'Slip_for_rent[id_slip_for_rent]',
            		 ]);
	}
			$id_slip_for_rent=Yii::$app->request->post('Slip_for_rent')['id_slip_for_rent'];
					$condition =array(
						'id_slip_for_rent'=>$id_slip_for_rent
						);
			$model=Slip_for_rent::findOne($condition);
            if ($model->load(Yii::$app->request->post())) {
                try {

                    $model->createdat= date('Y-m-d',strtotime($model->createdat));
                    	$model->update();
                       return $this->redirect(Yii::$app->homeUrl.'housing/slip_for_rent', [
            				'message' =>'Elemento insertado correctamente'
        					]);
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la actualizacion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_slip_for_rent'=>'Slip_for_rent[id_slip_for_rent]',
            		 ]);
                }
            }
	 	}
		//Si no hay datos redirecciona al index
		return $this->redirect(Yii::$app->homeUrl.'housing/slip_for_rent', [
				'message' =>'Elemento insertado correctamente'
		]);
	}
/**
     * Deletes an existing Slip_for_rent model.
     * If deletion is successful, return a message in json format with ok response.
     * @return josn format message
     */
    public function actionDelete()
    {
        if($_POST['array']){
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $array= json_decode($_POST['array']);
                try {
            foreach ($array as $slip_for_rent) {
                    $id=array(
                        'id_slip_for_rent'=>$slip_for_rent->id_slip_for_rent
                    );
                    $this->findModel($id)->delete();
                    $jsonResult = array('success' => true, 'message' => 'El slip_for_rent  fue eliminado con exito');
                }            }
			catch (Exception $e) {
                    $jsonResult = array('success' => false, 'message' => 'Algunos elementos no se eliminarion,existen elementos asociados, no es posible su eliminacion');
                }
            return $jsonResult;
        }
    }
/**
     * Finds the Slip_for_rent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Slip_for_rent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Slip_for_rent::findOne($id)) !== null) {
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
		 				->from('slip_for_rent')
		 				->orderBy(array('slip_for_rent.id_slip_for_rent'=>SORT_ASC))
			 	->join('inner join','housing','slip_for_rent.id_housing=housing.id_housing')
			 	->join('inner join','usuario','slip_for_rent.id_usuario=usuario.id_usuario')
			 	->select('slip_for_rent.*,housing.name_housing ,usuario.username ,slip_for_rent.code_slip_for_rent as text ,slip_for_rent.id_slip_for_rent as id ')
			 	->where('slip_for_rent.code_slip_for_rent LIKE '."'%".$like."%'")
			 	->all();
				$result['data']=$rows;
				$rows=$result;
			}
			else
		 	$rows = $query
		 		->from('slip_for_rent')
		 		->orderBy(array('slip_for_rent.id_slip_for_rent'=>SORT_ASC))
			 	->join('inner join','housing','slip_for_rent.id_housing=housing.id_housing')
			 	->join('inner join','usuario','slip_for_rent.id_usuario=usuario.id_usuario')
			 	->select('slip_for_rent.*,housing.name_housing ,usuario.username ')
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
     * Load  from Excel a list of the Slip_for_rent table based on its primary key value.
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
					$id_slip_for_rent = $worksheet->getCell('A' . $row)->getFormattedValue();
					if (!empty($id_slip_for_rent)) {
						$id_slip_for_rent = $worksheet->getCell('A' . $row)->getValue();
						$code_slip_for_rent = $worksheet->getCell('B' . $row)->getValue();
						$description_slip_for_rent = $worksheet->getCell('C' . $row)->getValue();
						$createdat = $worksheet->getCell('D' . $row)->getValue();
						$id_housing = $worksheet->getCell('E' . $row)->getValue();
						$id_usuario = $worksheet->getCell('F' . $row)->getValue();
						$slip_for_rent = new Slip_for_rent();
						$slip_for_rent->id_slip_for_rent  =  $id_slip_for_rent;
						$slip_for_rent->code_slip_for_rent  =  $code_slip_for_rent;
						$slip_for_rent->description_slip_for_rent  =  $description_slip_for_rent;
						$slip_for_rent->createdat  =  $createdat;
						$slip_for_rent->id_housing  =  $id_housing;
						$slip_for_rent->id_usuario  =  $id_usuario;
						$slip_for_rent->save();
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
     * Create a Excel file  from a list of the Slip_for_rent 
     * @return boolean the list is created
     */
    public  function actionExcel()
    {
			include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel_IOFactory.php');
        	include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel.php');

			$slip_for_rentlist=json_decode($_POST['slip_for_rent_export']);
			$objPHPExcel = new \PHPExcel();
        	$name_user=Yii::$app->getUser()->identity->oldAttributes['username'];
			        $objPHPExcel->getProperties()->setCreator(Yii::$app->id)
				->setLastModifiedBy($name_user)
				->setTitle('Listado de Slip_for_rent')
				->setSubject('Listado de Slip_for_rent')
				->setDescription('Documento con el listado de Slip_for_rents segun '.Yii::$app->id);
        		$objPHPExcel->setActiveSheetIndex(0);
				$objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_slip_for_rent');
				$objPHPExcel->getActiveSheet()->setCellValue('B1', 'code_slip_for_rent');
				$objPHPExcel->getActiveSheet()->setCellValue('C1', 'description_slip_for_rent');
				$objPHPExcel->getActiveSheet()->setCellValue('D1', 'createdat');
				$objPHPExcel->getActiveSheet()->setCellValue('E1', 'id_housing');
				$objPHPExcel->getActiveSheet()->setCellValue('F1', 'id_usuario');
				$i=2;
				foreach($slip_for_rentlist as  $slip_for_rent) 
					{	
						$slip_for_rent=(object)$slip_for_rent;
						$objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $slip_for_rent->id_slip_for_rent);
						$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $slip_for_rent->code_slip_for_rent);
						$objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $slip_for_rent->description_slip_for_rent);
						$objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $slip_for_rent->createdat);
						$objPHPExcel->getActiveSheet()->setCellValue('E'.$i, $slip_for_rent->id_housing);
						$objPHPExcel->getActiveSheet()->setCellValue('F'.$i, $slip_for_rent->id_usuario);
						$i++;
					}

	 			$exceklib= new \PHPExcel_IOFactory();
        		$objWriter = $exceklib->createWriter($objPHPExcel, 'Excel2007');
				header("Content-Disposition: attachment; filename=\"Listado_slip_for_rent.xls\"");
		        header("Content-Type: application/vnd.ms-excel");
				$objWriter->save('php://output');
				exit;
	 }

/**
	 * Find a single Slip_for_rent model.
	 * @return mixed
	 */
public function actionFindbyukjson()
	{
		if (Yii::$app->request->getIsAjax() && isset( $_GET['Slip_for_rent'])) {
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$condition=$_GET['Slip_for_rent'];
			$slip_for_rent=Slip_for_rent::findByUK($condition);
			$jsonResult = array('valid' => true);
			if($slip_for_rent!=null &&  $_GET['id_slip_for_rent']!=$slip_for_rent['id_slip_for_rent'])
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
            $rows = Slip_for_rent::find()->all();
            return $rows;
        }
    }
}
 ?>
