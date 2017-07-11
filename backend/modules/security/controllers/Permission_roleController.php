<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:27 GMT-05:00 2016*/

namespace backend\modules\security\controllers;

use Yii;
use backend\themes\make\AppAssetMake;
use backend\themes\make\assets\php\AppAssetPlugins;
use yii\filters\AccessControl;
use yii\web\View;
use backend\modules\security\models\Permission_role;
use backend\modules\security\models\Permission_roleSearch;
use yii\web\Controller;
use yii\db\Query;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/** 
 * permission_roleimplenta las acciones del modelo permission_role .
 *
 */
class Permission_roleController extends Controller
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
     * Lists all Permission_role models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Permission_roleSearch();
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

		 //Datos de la Tabla Permission_role
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission_role/kendo_permission_role.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission/kendo_permission.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission/kendo_permission_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/role/kendo_role.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/role/kendo_role_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
				'index'=>true
        ]);
    }


 /**
     * Lists all Permission_role models.
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


		 //Datos de la Tabla Permission_role
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/permission_role/kendo_permission_role.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/permission/kendo_permission.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/permission/kendo_permission_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/role/kendo_role.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/role/kendo_role_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_components.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_actions_ajax.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_init.js');
        return $this->getView()->render('@backend/modules/security/views/permission_role/index',array('index'=>false));
    }
/**
     * Displays a single Permission_role model.
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
     * Creates a new Permission_role model.
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
            $model = new Permission_role();
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
            $model = new Permission_role();
			 $action='create';
            if ($model->load(Yii::$app->request->post())) {
                try {

                    	$result=$model->save();
                    if($result){
                       return $this->redirect(Yii::$app->homeUrl.'security/permission_role', [
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
							'id_permission_role'=>'',
            		 ]);
					}
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la insercion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_permission_role'=>'',
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

		 //Datos de la Tabla Permission_role
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission_role/kendo_permission_role.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission/kendo_permission.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission/kendo_permission_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/role/kendo_role.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/role/kendo_role_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_permission_role'=>'',
            		 ]);
                }	}
/**
     * Update a Permission_role model.
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

			$permission_role= (object)Yii::$app->request->post('Permission_role');
            $model =  $this->findModel($permission_role->id_permission_role);
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
			if(isset($_GET['id_permission_role'])){
					$condition =array(
						'id_permission_role'=>$_GET['id_permission_role']
						);
            $model = Permission_role::findOne($condition);

		 AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
		 AppAssetPlugins::setPlugins_NotificationsW8($this->view);
		 AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
		 AppAssetPlugins::setPlugins_Icheck($this->view);;
		 AppAssetPlugins::setPlugins_ComponentsCss($this->view);
		 AppAssetPlugins::setPlugins_Select2($this->view);
        $this->view->registerJsFile('@web/js/validation/validation.js',
		 ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		 //Datos de la Tabla Permission_role
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission_role/kendo_permission_role.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission/kendo_permission.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission/kendo_permission_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/role/kendo_role.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/role/kendo_role_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/security/permission_role/kendo_permission_role_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_permission_role'=>'Permission_role[id_permission_role]',
            		 ]);
	}
			$id_permission_role=Yii::$app->request->post('Permission_role')['id_permission_role'];
					$condition =array(
						'id_permission_role'=>$id_permission_role
						);
			$model=Permission_role::findOne($condition);
            if ($model->load(Yii::$app->request->post())) {
                try {

                    	$model->update();
                       return $this->redirect(Yii::$app->homeUrl.'security/permission_role', [
            				'message' =>'Elemento insertado correctamente'
        					]);
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la actualizacion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_permission_role'=>'Permission_role[id_permission_role]',
            		 ]);
                }
            }
	 	}
		//Si no hay datos redirecciona al index
		return $this->redirect(Yii::$app->homeUrl.'security/permission_role', [
				'message' =>'Elemento insertado correctamente'
		]);
	}
/**
     * Deletes an existing Permission_role model.
     * If deletion is successful, return a message in json format with ok response.
     * @return josn format message
     */
    public function actionDelete()
    {
        if($_POST['array']){
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $array= json_decode($_POST['array']);
                try {
            foreach ($array as $permission_role) {
                    $id=array(
                        'id_permission_role'=>$permission_role->id_permission_role
                    );
                    $this->findModel($id)->delete();
                    $jsonResult = array('success' => true, 'message' => 'El permission_role  fue eliminado con exito');
                }            }
			catch (Exception $e) {
                    $jsonResult = array('success' => false, 'message' => 'Algunos elementos no se eliminarion,existen elementos asociados, no es posible su eliminacion');
                }
            return $jsonResult;
        }
    }
/**
     * Finds the Permission_role model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Permission_role the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Permission_role::findOne($id)) !== null) {
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
		 				->from('permission_role')
		 				->orderBy(array('permission_role.id_permission_role'=>SORT_ASC))
			 	->join('inner join','permission','permission_role.id_permission=permission.id_permission')
			 	->join('inner join','role','permission_role.id_role=role.id_role')
			 	->select('permission_role.*,permission.name_permission ,role.name_role ,permission_role.id_role as text ,permission_role.id_permission_role as id ')
			 	->where('permission_role.id_role LIKE '."'%".$like."%'")
			 	->all();
				$result['data']=$rows;
				$rows=$result;
			}
			else
		 	$rows = $query
		 		->from('permission_role')
		 		->orderBy(array('permission_role.id_permission_role'=>SORT_ASC))
			 	->join('inner join','permission','permission_role.id_permission=permission.id_permission')
			 	->join('inner join','role','permission_role.id_role=role.id_role')
			 	->select('permission_role.*,permission.name_permission ,role.name_role ')
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
     * Load  from Excel a list of the Permission_role table based on its primary key value.
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
					$id_permission_role = $worksheet->getCell('A' . $row)->getFormattedValue();
					if (!empty($id_permission_role)) {
						$id_permission_role = $worksheet->getCell('A' . $row)->getValue();
						$id_role = $worksheet->getCell('B' . $row)->getValue();
						$id_permission = $worksheet->getCell('C' . $row)->getValue();
						$permission_role = new Permission_role();
						$permission_role->id_permission_role  =  $id_permission_role;
						$permission_role->id_role  =  $id_role;
						$permission_role->id_permission  =  $id_permission;
						$permission_role->save();
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
     * Create a Excel file  from a list of the Permission_role 
     * @return boolean the list is created
     */
    public  function actionExcel()
    {
			include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel_IOFactory.php');
        	include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel.php');

			$permission_rolelist=json_decode($_POST['permission_role_export']);
			$objPHPExcel = new \PHPExcel();
        	$name_user=Yii::$app->getUser()->identity->oldAttributes['username'];
			        $objPHPExcel->getProperties()->setCreator(Yii::$app->id)
				->setLastModifiedBy($name_user)
				->setTitle('Listado de Permission_role')
				->setSubject('Listado de Permission_role')
				->setDescription('Documento con el listado de Permission_roles segun '.Yii::$app->id);
        		$objPHPExcel->setActiveSheetIndex(0);
				$objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_permission_role');
				$objPHPExcel->getActiveSheet()->setCellValue('B1', 'id_role');
				$objPHPExcel->getActiveSheet()->setCellValue('C1', 'id_permission');
				$i=2;
				foreach($permission_rolelist as  $permission_role) 
					{	
						$permission_role=(object)$permission_role;
						$objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $permission_role->id_permission_role);
						$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $permission_role->id_role);
						$objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $permission_role->id_permission);
						$i++;
					}

	 			$exceklib= new \PHPExcel_IOFactory();
        		$objWriter = $exceklib->createWriter($objPHPExcel, 'Excel2007');
				header("Content-Disposition: attachment; filename=\"Listado_permission_role.xls\"");
		        header("Content-Type: application/vnd.ms-excel");
				$objWriter->save('php://output');
				exit;
	 }

/**
	 * Find a single Permission_role model.
	 * @return mixed
	 */
public function actionFindbyukjson()
	{
		if (Yii::$app->request->getIsAjax() && isset( $_GET['Permission_role'])) {
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$condition=$_GET['Permission_role'];
			$permission_role=Permission_role::findByUK($condition);
			$jsonResult = array('valid' => true);
			if($permission_role!=null &&  $_GET['id_permission_role']!=$permission_role['id_permission_role'])
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
            $rows = Permission_role::find()->all();
            return $rows;
        }
    }
}
 ?>
