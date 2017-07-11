<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:49 GMT-05:00 2016*/

namespace backend\modules\housing\controllers;

use Yii;
use backend\themes\make\AppAssetMake;
use backend\themes\make\assets\php\AppAssetPlugins;
use yii\filters\AccessControl;
use yii\web\View;
use backend\modules\housing\models\Housing_address;
use backend\modules\housing\models\Housing_addressSearch;
use yii\web\Controller;
use yii\db\Query;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/** 
 * housing_addressimplenta las acciones del modelo housing_address .
 *
 */
class Housing_addressController extends Controller
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
     * Lists all Housing_address models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Housing_addressSearch();
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

		 //Datos de la Tabla Housing_address
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/localization/town/kendo_town.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/localization/town/kendo_town_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
				'index'=>true
        ]);
    }


 /**
     * Lists all Housing_address models.
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


		 //Datos de la Tabla Housing_address
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/localization/town/kendo_town.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/localization/town/kendo_town_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_components.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_actions_ajax.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_init.js');
        return $this->getView()->render('@backend/modules/housing/views/housing_address/index',array('index'=>false));
    }
/**
     * Displays a single Housing_address model.
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
     * Creates a new Housing_address model.
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
            $model = new Housing_address();
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
            $model = new Housing_address();
			 $action='create';
            if ($model->load(Yii::$app->request->post())) {
                try {

                    	$result=$model->save();
                    if($result){
                       return $this->redirect(Yii::$app->homeUrl.'housing/housing_address', [
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
							'id_housing_address'=>'',
            		 ]);
					}
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la insercion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_housing_address'=>'',
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

		 //Datos de la Tabla Housing_address
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/localization/town/kendo_town.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/localization/town/kendo_town_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_housing_address'=>'',
            		 ]);
                }	}
/**
     * Update a Housing_address model.
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

			$housing_address= (object)Yii::$app->request->post('Housing_address');
            $model =  $this->findModel($housing_address->id_housing_address);
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
			if(isset($_GET['id_housing_address'])){
					$condition =array(
						'id_housing_address'=>$_GET['id_housing_address']
						);
            $model = Housing_address::findOne($condition);

		 AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
		 AppAssetPlugins::setPlugins_NotificationsW8($this->view);
		 AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
		 AppAssetPlugins::setPlugins_Icheck($this->view);;
		 AppAssetPlugins::setPlugins_ComponentsCss($this->view);
		 AppAssetPlugins::setPlugins_Select2($this->view);
        $this->view->registerJsFile('@web/js/validation/validation.js',
		 ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		 //Datos de la Tabla Housing_address
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/localization/town/kendo_town.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/localization/town/kendo_town_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_housing_address'=>'Housing_address[id_housing_address]',
            		 ]);
	}
			$id_housing_address=Yii::$app->request->post('Housing_address')['id_housing_address'];
					$condition =array(
						'id_housing_address'=>$id_housing_address
						);
			$model=Housing_address::findOne($condition);
            if ($model->load(Yii::$app->request->post())) {
                try {

                    	$model->update();
                       return $this->redirect(Yii::$app->homeUrl.'housing/housing_address', [
            				'message' =>'Elemento insertado correctamente'
        					]);
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la actualizacion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_housing_address'=>'Housing_address[id_housing_address]',
            		 ]);
                }
            }
	 	}
		//Si no hay datos redirecciona al index
		return $this->redirect(Yii::$app->homeUrl.'housing/housing_address', [
				'message' =>'Elemento insertado correctamente'
		]);
	}
/**
     * Deletes an existing Housing_address model.
     * If deletion is successful, return a message in json format with ok response.
     * @return josn format message
     */
    public function actionDelete()
    {
        if($_POST['array']){
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $array= json_decode($_POST['array']);
                try {
            foreach ($array as $housing_address) {
                    $id=array(
                        'id_housing_address'=>$housing_address->id_housing_address
                    );
                    $this->findModel($id)->delete();
                    $jsonResult = array('success' => true, 'message' => 'El housing_address  fue eliminado con exito');
                }            }
			catch (Exception $e) {
                    $jsonResult = array('success' => false, 'message' => 'Algunos elementos no se eliminarion,existen elementos asociados, no es posible su eliminacion');
                }
            return $jsonResult;
        }
    }
/**
     * Finds the Housing_address model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Housing_address the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Housing_address::findOne($id)) !== null) {
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
		 				->from('housing_address')
		 				->orderBy(array('housing_address.id_housing_address'=>SORT_ASC))
			 	->join('inner join','town','housing_address.id_town=town.id_town')
			 	->select('housing_address.*,town.name_town ,housing_address.id_town as text ,housing_address.id_housing_address as id ')
			 	->where('housing_address.id_town LIKE '."'%".$like."%'")
			 	->all();
				$result['data']=$rows;
				$rows=$result;
			}
			else
		 	$rows = $query
		 		->from('housing_address')
		 		->orderBy(array('housing_address.id_housing_address'=>SORT_ASC))
			 	->join('inner join','town','housing_address.id_town=town.id_town')
			 	->select('housing_address.*,town.name_town ')
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
     * Load  from Excel a list of the Housing_address table based on its primary key value.
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
					$id_housing_address = $worksheet->getCell('A' . $row)->getFormattedValue();
					if (!empty($id_housing_address)) {
						$id_housing_address = $worksheet->getCell('A' . $row)->getValue();
						$id_town = $worksheet->getCell('B' . $row)->getValue();
						$length = $worksheet->getCell('C' . $row)->getValue();
						$latitude = $worksheet->getCell('D' . $row)->getValue();
						$number_housing = $worksheet->getCell('E' . $row)->getValue();
						$main_street = $worksheet->getCell('F' . $row)->getValue();
						$between_first = $worksheet->getCell('G' . $row)->getValue();
						$between_second = $worksheet->getCell('H' . $row)->getValue();
						$housing_address = new Housing_address();
						$housing_address->id_housing_address  =  $id_housing_address;
						$housing_address->id_town  =  $id_town;
						$housing_address->length  =  $length;
						$housing_address->latitude  =  $latitude;
						$housing_address->number_housing  =  $number_housing;
						$housing_address->main_street  =  $main_street;
						$housing_address->between_first  =  $between_first;
						$housing_address->between_second  =  $between_second;
						$housing_address->save();
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
     * Create a Excel file  from a list of the Housing_address 
     * @return boolean the list is created
     */
    public  function actionExcel()
    {
			include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel_IOFactory.php');
        	include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel.php');

			$housing_addresslist=json_decode($_POST['housing_address_export']);
			$objPHPExcel = new \PHPExcel();
        	$name_user=Yii::$app->getUser()->identity->oldAttributes['username'];
			        $objPHPExcel->getProperties()->setCreator(Yii::$app->id)
				->setLastModifiedBy($name_user)
				->setTitle('Listado de Housing_address')
				->setSubject('Listado de Housing_address')
				->setDescription('Documento con el listado de Housing_addresss segun '.Yii::$app->id);
        		$objPHPExcel->setActiveSheetIndex(0);
				$objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_housing_address');
				$objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_town');
				$objPHPExcel->getActiveSheet()->setCellValue('C1', 'length');
				$objPHPExcel->getActiveSheet()->setCellValue('D1', 'latitude');
				$objPHPExcel->getActiveSheet()->setCellValue('E1', 'number_housing');
				$objPHPExcel->getActiveSheet()->setCellValue('F1', 'main_street');
				$objPHPExcel->getActiveSheet()->setCellValue('G1', 'between_first');
				$objPHPExcel->getActiveSheet()->setCellValue('H1', 'between_second');
				$i=2;
				foreach($housing_addresslist as  $housing_address) 
					{	
						$housing_address=(object)$housing_address;
						$objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $housing_address->id_housing_address);
						$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $housing_address->id_town);
						$objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $housing_address->length);
						$objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $housing_address->latitude);
						$objPHPExcel->getActiveSheet()->setCellValue('E'.$i, $housing_address->number_housing);
						$objPHPExcel->getActiveSheet()->setCellValue('F'.$i, $housing_address->main_street);
						$objPHPExcel->getActiveSheet()->setCellValue('G'.$i, $housing_address->between_first);
						$objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $housing_address->between_second);
						$i++;
					}

	 			$exceklib= new \PHPExcel_IOFactory();
        		$objWriter = $exceklib->createWriter($objPHPExcel, 'Excel2007');
				header("Content-Disposition: attachment; filename=\"Listado_housing_address.xls\"");
		        header("Content-Type: application/vnd.ms-excel");
				$objWriter->save('php://output');
				exit;
	 }

/**
	 * Find a single Housing_address model.
	 * @return mixed
	 */
public function actionFindbyukjson()
	{
		if (Yii::$app->request->getIsAjax() && isset( $_GET['Housing_address'])) {
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$condition=$_GET['Housing_address'];
			$housing_address=Housing_address::findByUK($condition);
			$jsonResult = array('valid' => true);
			if($housing_address!=null &&  $_GET['id_housing_address']!=$housing_address['id_housing_address'])
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
            $rows = Housing_address::find()->all();
            return $rows;
        }
    }
}
 ?>
