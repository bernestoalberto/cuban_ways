<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:50 GMT-05:00 2016*/

namespace backend\modules\housing\controllers;

use Yii;
use backend\themes\make\AppAssetMake;
use backend\themes\make\assets\php\AppAssetPlugins;
use yii\filters\AccessControl;
use yii\web\View;
use backend\modules\housing\models\Owner;
use backend\modules\housing\models\OwnerSearch;
use yii\web\Controller;
use yii\db\Query;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/** 
 * ownerimplenta las acciones del modelo owner .
 *
 */
class OwnerController extends Controller
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
     * Lists all Owner models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OwnerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
				$this->view->registerJs('var module=true;',View::POS_HEAD);

		 AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
		 AppAssetPlugins::setPlugins_NotificationsW8($this->view);
		 AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
		 AppAssetPlugins::setPlugins_Icheck($this->view);;
		 AppAssetPlugins::setPlugins_ComponentsCss($this->view);
        $this->view->registerJsFile('@web/js/validation/validation.js',
		 ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		 //Datos de la Tabla Owner
		 AppAssetPlugins::setPlugins_DateRange($this->view);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
				'index'=>true
        ]);
    }


 /**
     * Lists all Owner models.
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


		 //Datos de la Tabla Owner
		 AppAssetPlugins::getPlugins_DateRange($this->view);
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/owner/kendo_owner.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/owner/kendo_owner_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/owner/kendo_owner_components.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/owner/kendo_owner_actions_ajax.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/owner/kendo_owner_init.js');
        return $this->getView()->render('@backend/modules/housing/views/owner/index',array('index'=>false));
    }
/**
     * Displays a single Owner model.
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
     * Creates a new Owner model.
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
            $model = new Owner();
            if ($model->load(Yii::$app->request->post())) {
                try {
                    $model->datebirth= date('Y-m-d',strtotime($model->datebirth));
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
            $model = new Owner();
			 $action='create';
            if ($model->load(Yii::$app->request->post())) {
                try {

                    $model->datebirth= date('Y-m-d',strtotime($model->datebirth));
                    $model->createdat= date('Y-m-d',strtotime($model->createdat));
                    	$result=$model->save();
                    if($result){
                       return $this->redirect(Yii::$app->homeUrl.'housing/owner', [
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
							'id_owner'=>'',
            		 ]);
					}
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la insercion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_owner'=>'',
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

		 //Datos de la Tabla Owner
		 AppAssetPlugins::setPlugins_DateRange($this->view);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_owner'=>'',
            		 ]);
                }	}
/**
     * Update a Owner model.
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

			$owner= (object)Yii::$app->request->post('Owner');
            $model =  $this->findModel($owner->id_owner);
            if ($model->load(Yii::$app->request->post())) {
                try {
                    $model->datebirth= date('Y-m-d',strtotime($model->datebirth));
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
			if(isset($_GET['id_owner'])){
					$condition =array(
						'id_owner'=>$_GET['id_owner']
						);
            $model = Owner::findOne($condition);

		 AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
		 AppAssetPlugins::setPlugins_NotificationsW8($this->view);
		 AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
		 AppAssetPlugins::setPlugins_Icheck($this->view);;
		 AppAssetPlugins::setPlugins_ComponentsCss($this->view);
        $this->view->registerJsFile('@web/js/validation/validation.js',
		 ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		 //Datos de la Tabla Owner
		 AppAssetPlugins::setPlugins_DateRange($this->view);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_owner'=>'Owner[id_owner]',
            		 ]);
	}
			$id_owner=Yii::$app->request->post('Owner')['id_owner'];
					$condition =array(
						'id_owner'=>$id_owner
						);
			$model=Owner::findOne($condition);
            if ($model->load(Yii::$app->request->post())) {
                try {

                    $model->datebirth= date('Y-m-d',strtotime($model->datebirth));
                    $model->createdat= date('Y-m-d',strtotime($model->createdat));
                    	$model->update();
                       return $this->redirect(Yii::$app->homeUrl.'housing/owner', [
            				'message' =>'Elemento insertado correctamente'
        					]);
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la actualizacion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_owner'=>'Owner[id_owner]',
            		 ]);
                }
            }
	 	}
		//Si no hay datos redirecciona al index
		return $this->redirect(Yii::$app->homeUrl.'housing/owner', [
				'message' =>'Elemento insertado correctamente'
		]);
	}
/**
     * Deletes an existing Owner model.
     * If deletion is successful, return a message in json format with ok response.
     * @return josn format message
     */
    public function actionDelete()
    {
        if($_POST['array']){
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $array= json_decode($_POST['array']);
                try {
            foreach ($array as $owner) {
                    $id=array(
                        'id_owner'=>$owner->id_owner
                    );
                    $this->findModel($id)->delete();
                    $jsonResult = array('success' => true, 'message' => 'El owner  fue eliminado con exito');
                }            }
			catch (Exception $e) {
                    $jsonResult = array('success' => false, 'message' => 'Algunos elementos no se eliminarion,existen elementos asociados, no es posible su eliminacion');
                }
            return $jsonResult;
        }
    }
/**
     * Finds the Owner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Owner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Owner::findOne($id)) !== null) {
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
		 				->from('owner')
		 				->orderBy(array('owner.id_owner'=>SORT_ASC))
			 	->select('owner.*,owner.name_owner as text ,owner.id_owner as id ')
			 	->where('owner.name_owner LIKE '."'%".$like."%'")
			 	->all();
				$result['data']=$rows;
				$rows=$result;
			}
			else
		 	$rows = $query
		 		->from('owner')
		 		->orderBy(array('owner.id_owner'=>SORT_ASC))
			 	->select('owner.*')
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
     * Load  from Excel a list of the Owner table based on its primary key value.
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
					$id_owner = $worksheet->getCell('A' . $row)->getFormattedValue();
					if (!empty($id_owner)) {
						$id_owner = $worksheet->getCell('A' . $row)->getValue();
						$name_owner = $worksheet->getCell('B' . $row)->getValue();
						$lastname_owner = $worksheet->getCell('C' . $row)->getValue();
						$datebirth = $worksheet->getCell('D' . $row)->getValue();
						$email = $worksheet->getCell('E' . $row)->getValue();
						$phone = $worksheet->getCell('F' . $row)->getValue();
						$createdat = $worksheet->getCell('G' . $row)->getValue();
						$identification = $worksheet->getCell('H' . $row)->getValue();
						$name_owner_incharge = $worksheet->getCell('I' . $row)->getValue();
						$lastname_owner_incharge = $worksheet->getCell('J' . $row)->getValue();
						$bank_account = $worksheet->getCell('K' . $row)->getValue();
						$photo = $worksheet->getCell('L' . $row)->getValue();
						$owner = new Owner();
						$owner->id_owner  =  $id_owner;
						$owner->name_owner  =  $name_owner;
						$owner->lastname_owner  =  $lastname_owner;
						$owner->datebirth  =  $datebirth;
						$owner->email  =  $email;
						$owner->phone  =  $phone;
						$owner->createdat  =  $createdat;
						$owner->identification  =  $identification;
						$owner->name_owner_incharge  =  $name_owner_incharge;
						$owner->lastname_owner_incharge  =  $lastname_owner_incharge;
						$owner->bank_account  =  $bank_account;
						$owner->photo  =  $photo;
						$owner->save();
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
     * Create a Excel file  from a list of the Owner 
     * @return boolean the list is created
     */
    public  function actionExcel()
    {
			include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel_IOFactory.php');
        	include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel.php');

			$ownerlist=json_decode($_POST['owner_export']);
			$objPHPExcel = new \PHPExcel();
        	$name_user=Yii::$app->getUser()->identity->oldAttributes['username'];
			        $objPHPExcel->getProperties()->setCreator(Yii::$app->id)
				->setLastModifiedBy($name_user)
				->setTitle('Listado de Owner')
				->setSubject('Listado de Owner')
				->setDescription('Documento con el listado de Owners segun '.Yii::$app->id);
        		$objPHPExcel->setActiveSheetIndex(0);
				$objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_owner');
				$objPHPExcel->getActiveSheet()->setCellValue('B1', 'name_owner');
				$objPHPExcel->getActiveSheet()->setCellValue('C1', 'lastname_owner');
				$objPHPExcel->getActiveSheet()->setCellValue('D1', 'datebirth');
				$objPHPExcel->getActiveSheet()->setCellValue('E1', 'email');
				$objPHPExcel->getActiveSheet()->setCellValue('F1', 'phone');
				$objPHPExcel->getActiveSheet()->setCellValue('G1', 'createdat');
				$objPHPExcel->getActiveSheet()->setCellValue('H1', 'identification');
				$objPHPExcel->getActiveSheet()->setCellValue('I1', 'name_owner_incharge');
				$objPHPExcel->getActiveSheet()->setCellValue('J1', 'lastname_owner_incharge');
				$objPHPExcel->getActiveSheet()->setCellValue('K1', 'bank_account');
				$objPHPExcel->getActiveSheet()->setCellValue('L1', 'photo');
				$i=2;
				foreach($ownerlist as  $owner) 
					{	
						$owner=(object)$owner;
						$objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $owner->id_owner);
						$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $owner->name_owner);
						$objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $owner->lastname_owner);
						$objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $owner->datebirth);
						$objPHPExcel->getActiveSheet()->setCellValue('E'.$i, $owner->email);
						$objPHPExcel->getActiveSheet()->setCellValue('F'.$i, $owner->phone);
						$objPHPExcel->getActiveSheet()->setCellValue('G'.$i, $owner->createdat);
						$objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $owner->identification);
						$objPHPExcel->getActiveSheet()->setCellValue('I'.$i, $owner->name_owner_incharge);
						$objPHPExcel->getActiveSheet()->setCellValue('J'.$i, $owner->lastname_owner_incharge);
						$objPHPExcel->getActiveSheet()->setCellValue('K'.$i, $owner->bank_account);
						$objPHPExcel->getActiveSheet()->setCellValue('L'.$i, $owner->photo);
						$i++;
					}

	 			$exceklib= new \PHPExcel_IOFactory();
        		$objWriter = $exceklib->createWriter($objPHPExcel, 'Excel2007');
				header("Content-Disposition: attachment; filename=\"Listado_owner.xls\"");
		        header("Content-Type: application/vnd.ms-excel");
				$objWriter->save('php://output');
				exit;
	 }

/**
	 * Find a single Owner model.
	 * @return mixed
	 */
public function actionFindbyukjson()
	{
		if (Yii::$app->request->getIsAjax() && isset( $_GET['Owner'])) {
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$condition=$_GET['Owner'];
			$owner=Owner::findByUK($condition);
			$jsonResult = array('valid' => true);
			if($owner!=null &&  $_GET['id_owner']!=$owner['id_owner'])
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
            $rows = Owner::find()->all();
            return $rows;
        }
    }
}
 ?>
