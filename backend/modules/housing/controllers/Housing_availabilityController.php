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
use backend\modules\housing\models\Housing_availability;
use backend\modules\housing\models\Housing_availabilitySearch;
use yii\web\Controller;
use yii\db\Query;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/** 
 * housing_availabilityimplenta las acciones del modelo housing_availability .
 *
 */
class Housing_availabilityController extends Controller
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
     * Lists all Housing_availability models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Housing_availabilitySearch();
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

		 //Datos de la Tabla Housing_availability
		 AppAssetPlugins::setPlugins_DateRange($this->view);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/availability_state/kendo_availability_state.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/availability_state/kendo_availability_state_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
				'index'=>true
        ]);
    }


 /**
     * Lists all Housing_availability models.
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


		 //Datos de la Tabla Housing_availability
		 AppAssetPlugins::getPlugins_DateRange($this->view);
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/nomenclature/availability_state/kendo_availability_state.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/nomenclature/availability_state/kendo_availability_state_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing/kendo_housing.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/usuario/kendo_usuario.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/usuario/kendo_usuario_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_components.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_actions_ajax.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_init.js');
        return $this->getView()->render('@backend/modules/housing/views/housing_availability/index',array('index'=>false));
    }
/**
     * Displays a single Housing_availability model.
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
     * Creates a new Housing_availability model.
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
            $model = new Housing_availability();
            if ($model->load(Yii::$app->request->post())) {
                try {
                    $model->date_start= date('Y-m-d',strtotime($model->date_start));
                    $model->date_end= date('Y-m-d',strtotime($model->date_end));
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
            $model = new Housing_availability();
			 $action='create';
            if ($model->load(Yii::$app->request->post())) {
                try {

                    $model->date_start= date('Y-m-d',strtotime($model->date_start));
                    $model->date_end= date('Y-m-d',strtotime($model->date_end));
                    	$result=$model->save();
                    if($result){
                       return $this->redirect(Yii::$app->homeUrl.'housing/housing_availability', [
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
							'id_housing_availability'=>'',
            		 ]);
					}
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la insercion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_housing_availability'=>'',
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

		 //Datos de la Tabla Housing_availability
		 AppAssetPlugins::setPlugins_DateRange($this->view);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/availability_state/kendo_availability_state.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/availability_state/kendo_availability_state_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_housing_availability'=>'',
            		 ]);
                }	}
/**
     * Update a Housing_availability model.
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

			$housing_availability= (object)Yii::$app->request->post('Housing_availability');
            $model =  $this->findModel($housing_availability->id_housing_availability);
            if ($model->load(Yii::$app->request->post())) {
                try {
                    $model->date_start= date('Y-m-d',strtotime($model->date_start));
                    $model->date_end= date('Y-m-d',strtotime($model->date_end));
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
			if(isset($_GET['id_housing_availability'])){
					$condition =array(
						'id_housing_availability'=>$_GET['id_housing_availability']
						);
            $model = Housing_availability::findOne($condition);

		 AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
		 AppAssetPlugins::setPlugins_NotificationsW8($this->view);
		 AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
		 AppAssetPlugins::setPlugins_Icheck($this->view);;
		 AppAssetPlugins::setPlugins_ComponentsCss($this->view);
		 AppAssetPlugins::setPlugins_Select2($this->view);
        $this->view->registerJsFile('@web/js/validation/validation.js',
		 ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		 //Datos de la Tabla Housing_availability
		 AppAssetPlugins::setPlugins_DateRange($this->view);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/availability_state/kendo_availability_state.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/availability_state/kendo_availability_state_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_availability/kendo_housing_availability_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_housing_availability'=>'Housing_availability[id_housing_availability]',
            		 ]);
	}
			$id_housing_availability=Yii::$app->request->post('Housing_availability')['id_housing_availability'];
					$condition =array(
						'id_housing_availability'=>$id_housing_availability
						);
			$model=Housing_availability::findOne($condition);
            if ($model->load(Yii::$app->request->post())) {
                try {

                    $model->date_start= date('Y-m-d',strtotime($model->date_start));
                    $model->date_end= date('Y-m-d',strtotime($model->date_end));
                    	$model->update();
                       return $this->redirect(Yii::$app->homeUrl.'housing/housing_availability', [
            				'message' =>'Elemento insertado correctamente'
        					]);
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la actualizacion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_housing_availability'=>'Housing_availability[id_housing_availability]',
            		 ]);
                }
            }
	 	}
		//Si no hay datos redirecciona al index
		return $this->redirect(Yii::$app->homeUrl.'housing/housing_availability', [
				'message' =>'Elemento insertado correctamente'
		]);
	}
/**
     * Deletes an existing Housing_availability model.
     * If deletion is successful, return a message in json format with ok response.
     * @return josn format message
     */
    public function actionDelete()
    {
        if($_POST['array']){
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $array= json_decode($_POST['array']);
                try {
            foreach ($array as $housing_availability) {
                    $id=array(
                        'id_housing_availability'=>$housing_availability->id_housing_availability
                    );
                    $this->findModel($id)->delete();
                    $jsonResult = array('success' => true, 'message' => 'El housing_availability  fue eliminado con exito');
                }            }
			catch (Exception $e) {
                    $jsonResult = array('success' => false, 'message' => 'Algunos elementos no se eliminarion,existen elementos asociados, no es posible su eliminacion');
                }
            return $jsonResult;
        }
    }
/**
     * Finds the Housing_availability model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Housing_availability the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Housing_availability::findOne($id)) !== null) {
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
		 				->from('housing_availability')
		 				->orderBy(array('housing_availability.id_housing_availability'=>SORT_ASC))
			 	->join('inner join','availability_state','housing_availability.id_availability_state=availability_state.id_availability_state')
			 	->join('inner join','housing','housing_availability.id_housing=housing.id_housing')
			 	->join('inner join','usuario','housing_availability.id_usuario=usuario.id_usuario')
			 	->select('housing_availability.*,availability_state.availability_state ,housing.name_housing ,usuario.username ,housing_availability.description_housing_availability as text ,housing_availability.id_housing_availability as id ')
			 	->where('housing_availability.description_housing_availability LIKE '."'%".$like."%'")
			 	->all();
				$result['data']=$rows;
				$rows=$result;
			}
			else
		 	$rows = $query
		 		->from('housing_availability')
		 		->orderBy(array('housing_availability.id_housing_availability'=>SORT_ASC))
			 	->join('inner join','availability_state','housing_availability.id_availability_state=availability_state.id_availability_state')
			 	->join('inner join','housing','housing_availability.id_housing=housing.id_housing')
			 	->join('inner join','usuario','housing_availability.id_usuario=usuario.id_usuario')
			 	->select('housing_availability.*,availability_state.availability_state ,housing.name_housing ,usuario.username ')
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
     * Load  from Excel a list of the Housing_availability table based on its primary key value.
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
					$id_housing_availability = $worksheet->getCell('A' . $row)->getFormattedValue();
					if (!empty($id_housing_availability)) {
						$id_housing_availability = $worksheet->getCell('A' . $row)->getValue();
						$description_housing_availability = $worksheet->getCell('B' . $row)->getValue();
						$date_start = $worksheet->getCell('C' . $row)->getValue();
						$date_end = $worksheet->getCell('D' . $row)->getValue();
						$id_availability_state = $worksheet->getCell('E' . $row)->getValue();
						$id_housing = $worksheet->getCell('F' . $row)->getValue();
						$id_usuario = $worksheet->getCell('G' . $row)->getValue();
						$housing_availability = new Housing_availability();
						$housing_availability->id_housing_availability  =  $id_housing_availability;
						$housing_availability->description_housing_availability  =  $description_housing_availability;
						$housing_availability->date_start  =  $date_start;
						$housing_availability->date_end  =  $date_end;
						$housing_availability->id_availability_state  =  $id_availability_state;
						$housing_availability->id_housing  =  $id_housing;
						$housing_availability->id_usuario  =  $id_usuario;
						$housing_availability->save();
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
     * Create a Excel file  from a list of the Housing_availability 
     * @return boolean the list is created
     */
    public  function actionExcel()
    {
			include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel_IOFactory.php');
        	include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel.php');

			$housing_availabilitylist=json_decode($_POST['housing_availability_export']);
			$objPHPExcel = new \PHPExcel();
        	$name_user=Yii::$app->getUser()->identity->oldAttributes['username'];
			        $objPHPExcel->getProperties()->setCreator(Yii::$app->id)
				->setLastModifiedBy($name_user)
				->setTitle('Listado de Housing_availability')
				->setSubject('Listado de Housing_availability')
				->setDescription('Documento con el listado de Housing_availabilitys segun '.Yii::$app->id);
        		$objPHPExcel->setActiveSheetIndex(0);
				$objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_housing_availability');
				$objPHPExcel->getActiveSheet()->setCellValue('B1', 'description_housing_availability');
				$objPHPExcel->getActiveSheet()->setCellValue('C1', 'date_start');
				$objPHPExcel->getActiveSheet()->setCellValue('D1', 'date_end');
				$objPHPExcel->getActiveSheet()->setCellValue('E1', 'id_availability_state');
				$objPHPExcel->getActiveSheet()->setCellValue('F1', 'id_housing');
				$objPHPExcel->getActiveSheet()->setCellValue('G1', 'id_usuario');
				$i=2;
				foreach($housing_availabilitylist as  $housing_availability) 
					{	
						$housing_availability=(object)$housing_availability;
						$objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $housing_availability->id_housing_availability);
						$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $housing_availability->description_housing_availability);
						$objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $housing_availability->date_start);
						$objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $housing_availability->date_end);
						$objPHPExcel->getActiveSheet()->setCellValue('E'.$i, $housing_availability->id_availability_state);
						$objPHPExcel->getActiveSheet()->setCellValue('F'.$i, $housing_availability->id_housing);
						$objPHPExcel->getActiveSheet()->setCellValue('G'.$i, $housing_availability->id_usuario);
						$i++;
					}

	 			$exceklib= new \PHPExcel_IOFactory();
        		$objWriter = $exceklib->createWriter($objPHPExcel, 'Excel2007');
				header("Content-Disposition: attachment; filename=\"Listado_housing_availability.xls\"");
		        header("Content-Type: application/vnd.ms-excel");
				$objWriter->save('php://output');
				exit;
	 }

/**
	 * Find a single Housing_availability model.
	 * @return mixed
	 */
public function actionFindbyukjson()
	{
		if (Yii::$app->request->getIsAjax() && isset( $_GET['Housing_availability'])) {
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$condition=$_GET['Housing_availability'];
			$housing_availability=Housing_availability::findByUK($condition);
			$jsonResult = array('valid' => true);
			if($housing_availability!=null &&  $_GET['id_housing_availability']!=$housing_availability['id_housing_availability'])
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
            $rows = Housing_availability::find()->all();
            return $rows;
        }
    }
}
 ?>
