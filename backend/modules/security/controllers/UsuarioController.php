<?php
/*Generado by Pro Generator */
/*@author Charlietyn  */
/*@Date: Wed Jun 01 22:39:38 CDT 2016*/

namespace backend\modules\security\controllers;

use Yii;
use backend\themes\make\AppAssetMake;
use backend\themes\make\assets\php\AppAssetPlugins;
use yii\filters\AccessControl;
use yii\web\View;
use backend\modules\security\models\Usuario;
use backend\modules\security\models\UsuarioSearch;
use yii\web\Controller;
use yii\db\Query;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * usuarioimplenta las acciones del modelo usuario .
 *
 */
class UsuarioController extends Controller
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
	 * Lists all Usuario models.
	 * @return mixed
	 */
	public function actionIndex()
	{
		$searchModel = new UsuarioSearch();
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

		//Datos de la Tabla Usuario
		AppAssetPlugins::setPlugins_DateRange($this->view);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/role/kendo_role.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/role/kendo_role_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_components.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_tooltip.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_init.js',
			['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('index', [
				'message'=>'',
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
				'index'=>true
		]);
	}


	/**
	 * Lists all Usuario models.
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


		//Datos de la Tabla Usuario
		AppAssetPlugins::getPlugins_DateRange($this->view);
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/usuario/kendo_usuario.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/role/kendo_role.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/role/kendo_role_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/usuario/kendo_usuario_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/usuario/kendo_usuario_components.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/usuario/kendo_usuario_actions_ajax.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/security/usuario/kendo_usuario_init.js');
		return $this->getView()->render('@backend/modules/security/views/usuario/index',array('index'=>false));
	}
	/**
	 * Displays a single Usuario model.
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
	 * Creates a new Usuario model.
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
				$model = new Usuario();
				if ($model->load(Yii::$app->request->post())) {
					try {
						$model->created_at= date('Y-m-d',strtotime($model->created_at));
						$model->updated_at= date('Y-m-d',strtotime($model->updated_at));
						$model->type_user='Trabajador';
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
			$model = new Usuario();
			$action='create';
			if ($model->load(Yii::$app->request->post())) {
				try {
					$model->created_at= date('d-m-Y');
					$model->updated_at= date('d-m-Y');
					$model->id_owner=NULL;
					$model->foto='user.jpg';
					$model->type_user='Trabajador';
					$isfiles = count($_FILES) > 0;
					if ($isfiles && $_FILES['Usuario']['name']['foto']!='') {
						$usuario = (object)$_FILES['Usuario'];
						$rutaimages = Yii::$app->basePath . '\\web\\image\\users\\';
						$pos = strpos($usuario->name['foto'], '.');
						$ext = str_split($usuario->name['foto'], $pos + 1)[1];
						$name_foto = strtolower(str_replace(" ", '', $model->username));
						$imageoriginal = $rutaimages . $name_foto . '.' . $ext;
						if ($isfiles) {
							$temporal = $usuario->tmp_name['foto']; //Obtenemos el nombre del archivo temporal
							move_uploaded_file($temporal, $imageoriginal); //Movemos el archivo temporal a la ruta especificada
						}
						$model->foto=$name_foto . '.' . $ext;
					}
					$result=$model->save();
					if($result){
						return $this->redirect(Yii::$app->homeUrl.'security/usuario');
					}
					else
					{
						return $this->render('form', [
								'message'=>'Ocurrio un error en la insercion del elemento',
								'model' => $model,
								'action' => $action,
								'image_user' => 'image_user',
								'textaction'=>'Insertar',
								'id_usuario'=>'',
						]);
					}
				} catch (Exception $e) {
					return $this->render('form', [
							'message'=>'Ocurrio un error en la insercion del elemento',
							'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_usuario'=>'',
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

			//Datos de la Tabla Usuario
			AppAssetPlugins::setPlugins_DateRange($this->view);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		    $this->view->registerJsFile('@web/js/cuban_ways_db_js/security/role/kendo_role.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/role/kendo_role_datasource.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_datasource.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_components.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_actions.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_init.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

			return $this->render('form', [
					'message'=>'',
					'model' => $model,
					'action' => $action,
					'textaction'=>'Insertar',
					'id_usuario'=>'',
			]);
		}	}
	/**
	 * Update a Usuario model.
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

				$usuario= (object)Yii::$app->request->post('Usuario');
				$model =  $this->findModel($usuario->id_usuario);
				if ($model->load(Yii::$app->request->post())) {
					try {
						$model->created_at= date('Y-m-d',strtotime($model->created_at));
						$model->updated_at= date('Y-m-d',strtotime($model->updated_at));
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
			if(isset($_GET['id_usuario'])){
				$condition =array(
						'id_usuario'=>$_GET['id_usuario']
				);
				$model = Usuario::findOne($condition);
				AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
				AppAssetPlugins::setPlugins_NotificationsW8($this->view);
				AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
				AppAssetPlugins::setPlugins_Icheck($this->view);;
				AppAssetPlugins::setPlugins_ComponentsCss($this->view);
				AppAssetPlugins::setPlugins_Select2($this->view);
				$this->view->registerJsFile('@web/js/validation/validation.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

				//Datos de la Tabla Usuario
				AppAssetPlugins::setPlugins_DateRange($this->view);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/role/kendo_role.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/role/kendo_role_datasource.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_datasource.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_components_update.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_actions.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/security/usuario/kendo_usuario_init.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$model->pass='';
				return $this->render('form', [
						'message'=>'',
						'model' => $model,
						'action' => $action,
						'textaction'=>'Actualizar',
						'id_usuario'=>'Usuario[id_usuario]',
				]);
			}
			$id_usuario=Yii::$app->request->post('Usuario')['id_usuario'];
			$condition =array(
					'id_usuario'=>$id_usuario
			);
			$model=Usuario::findOne($condition);
			$pass=$model->pass;
			if ($model->load(Yii::$app->request->post())) {
				try {

					$model->updated_at= date('d-m-Y');
					if($_POST['Usuario']['pass']=='')
					{
						$model->pass=$pass;
					}
					$isfiles = count($_FILES) > 0;
					if ($isfiles && $_FILES['Usuario']['name']['foto']!='') {
						$usuario = (object)$_FILES['Usuario'];
						$rutaimages = Yii::$app->basePath . '\\web\\image\\users\\';
						$pos = strpos($usuario->name['foto'], '.');
						$ext = str_split($usuario->name['foto'], $pos + 1)[1];
						$name_foto = strtolower(str_replace(" ", '', $model->username));
						$imageoriginal = $rutaimages . $name_foto . '.' . $ext;
						if ($isfiles) {
							$temporal = $usuario->tmp_name['foto']; //Obtenemos el nombre del archivo temporal
							move_uploaded_file($temporal, $imageoriginal); //Movemos el archivo temporal a la ruta especificada
						}
						$model->foto=$name_foto . '.' . $ext;
					}
					$model->update();
					return $this->redirect(Yii::$app->homeUrl.'security/usuario');
				} catch (Exception $e) {
					return $this->render('form', [
							'message'=>'Ocurrio un error en la actualizacion del elemento',
							'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_usuario'=>'Usuario[id_usuario]',
					]);
				}
			}
		}
		//Si no hay datos redirecciona al index
		return $this->redirect(Yii::$app->homeUrl.'security/usuario', [
				'message' =>'Elemento insertado correctamente'
		]);
	}
	/**
	 * Deletes an existing Usuario model.
	 * If deletion is successful, return a message in json format with ok response.
	 * @return josn format message
	 */
	public function actionDelete()
	{
		if($_POST['array']){
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$array= json_decode($_POST['array']);
			try {
				foreach ($array as $usuario) {
					$id=array(
							'id_usuario'=>$usuario->id_usuario
					);
					$this->findModel($id)->delete();
					$jsonResult = array('success' => true, 'message' => 'El usuario  fue eliminado con exito');
				}            }
			catch (Exception $e) {
				$jsonResult = array('success' => false, 'message' => 'Algunos elementos no se eliminarion,existen elementos asociados, no es posible su eliminacion');
			}
			return $jsonResult;
		}
	}
	/**
	 * Finds the Usuario model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Usuario the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = Usuario::findOne($id)) !== null) {
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
						->from('usuario')
						->orderBy(array('usuario.id_usuario'=>SORT_ASC))
						->join('inner join','role','usuario.id_role=role.id_role')
						->select('usuario.*,role.name_role ,usuario.username as text ,usuario.id_usuario as id ')
						->where('usuario.username LIKE '."'%".$like."%'")
						->all();
				$result['data']=$rows;
				$rows=$result;
			}
			else
				$rows = $query
						->from('usuario')
						->orderBy(array('usuario.id_usuario'=>SORT_ASC))
						->join('inner join','role','usuario.id_role=role.id_role')
						->select('usuario.*,role.name_role ')
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
	 * Load  from Excel a list of the Usuario table based on its primary key value.
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
					$id_usuario = $worksheet->getCell('A' . $row)->getFormattedValue();
					if (!empty($id_usuario)) {
						$id_usuario = $worksheet->getCell('A' . $row)->getValue();
						$username = $worksheet->getCell('B' . $row)->getValue();
						$pass = $worksheet->getCell('C' . $row)->getValue();
						$word_pass = $worksheet->getCell('D' . $row)->getValue();
						$email = $worksheet->getCell('E' . $row)->getValue();
						$foto = $worksheet->getCell('F' . $row)->getValue();
						$auth_key = $worksheet->getCell('G' . $row)->getValue();
						$active = $worksheet->getCell('H' . $row)->getValue();
						$created_at = $worksheet->getCell('I' . $row)->getValue();
						$updated_at = $worksheet->getCell('J' . $row)->getValue();
						$type_user = $worksheet->getCell('K' . $row)->getValue();
						$state = $worksheet->getCell('L' . $row)->getValue();
						$id_role = $worksheet->getCell('M' . $row)->getValue();
						$usuario = new Usuario();
						$usuario->id_usuario  =  $id_usuario;
						$usuario->username  =  $username;
						$usuario->pass  =  $pass;
						$usuario->word_pass  =  $word_pass;
						$usuario->email  =  $email;
						$usuario->foto  =  $foto;
						$usuario->auth_key  =  $auth_key;
						$usuario->active  =  $active;
						$usuario->created_at  =  $created_at;
						$usuario->updated_at  =  $updated_at;
						$usuario->type_user  =  $type_user;
						$usuario->state  =  $state;
						$usuario->id_role  =  $id_role;
						$usuario->save();
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
	 * Create a Excel file  from a list of the Usuario
	 * @return boolean the list is created
	 */
	public  function actionExcel()
	{
		include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel_IOFactory.php');
		include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel.php');

		$usuariolist=json_decode($_POST['usuario_export']);
		$objPHPExcel = new \PHPExcel();
		$name_user=Yii::$app->getUser()->identity->oldAttributes['username'];
		$objPHPExcel->getProperties()->setCreator(Yii::$app->id)
				->setLastModifiedBy($name_user)
				->setTitle('Listado de Usuario')
				->setSubject('Listado de Usuario')
				->setDescription('Documento con el listado de Usuarios segun '.Yii::$app->id);
		$objPHPExcel->setActiveSheetIndex(0);
		$objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_usuario');
		$objPHPExcel->getActiveSheet()->setCellValue('B1', 'username');
		$objPHPExcel->getActiveSheet()->setCellValue('C1', 'pass');
		$objPHPExcel->getActiveSheet()->setCellValue('D1', 'word_pass');
		$objPHPExcel->getActiveSheet()->setCellValue('E1', 'email');
		$objPHPExcel->getActiveSheet()->setCellValue('F1', 'foto');
		$objPHPExcel->getActiveSheet()->setCellValue('G1', 'auth_key');
		$objPHPExcel->getActiveSheet()->setCellValue('H1', 'active');
		$objPHPExcel->getActiveSheet()->setCellValue('I1', 'created_at');
		$objPHPExcel->getActiveSheet()->setCellValue('J1', 'updated_at');
		$objPHPExcel->getActiveSheet()->setCellValue('K1', 'type_user');
		$objPHPExcel->getActiveSheet()->setCellValue('L1', 'state');
		$objPHPExcel->getActiveSheet()->setCellValue('M1', 'id_role');
		$i=2;
		foreach($usuariolist as  $usuario)
		{
			$usuario=(object)$usuario;
			$objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $usuario->id_usuario);
			$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $usuario->username);
			$objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $usuario->pass);
			$objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $usuario->word_pass);
			$objPHPExcel->getActiveSheet()->setCellValue('E'.$i, $usuario->email);
			$objPHPExcel->getActiveSheet()->setCellValue('F'.$i, $usuario->foto);
			$objPHPExcel->getActiveSheet()->setCellValue('G'.$i, $usuario->auth_key);
			$objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $usuario->active);
			$objPHPExcel->getActiveSheet()->setCellValue('I'.$i, $usuario->created_at);
			$objPHPExcel->getActiveSheet()->setCellValue('J'.$i, $usuario->updated_at);
			$objPHPExcel->getActiveSheet()->setCellValue('K'.$i, $usuario->type_user);
			$objPHPExcel->getActiveSheet()->setCellValue('L'.$i, $usuario->state);
			$objPHPExcel->getActiveSheet()->setCellValue('M'.$i, $usuario->id_role);
			$i++;
		}

		$exceklib= new \PHPExcel_IOFactory();
		$objWriter = $exceklib->createWriter($objPHPExcel, 'Excel2007');
		header("Content-Disposition: attachment; filename=\"Listado_usuario.xls\"");
		header("Content-Type: application/vnd.ms-excel");
		$objWriter->save('php://output');
		exit;
	}

	/**
	 * Find a single Usuario model.
	 * @return mixed
	 */
	public function actionFindbyukjson()
	{
		if (Yii::$app->request->getIsAjax() && isset( $_GET['Usuario'])) {
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$condition=$_GET['Usuario'];
			$usuario=Usuario::findByUK($condition);
			$id='';
			if(isset($_GET['id_usuario']))
			{
				$id=$_GET['id_usuario'];
			}
			$jsonResult = array('valid' => true);
			if($usuario!=null &&  $id!=$usuario['id_usuario'])
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
			$rows = Usuario::find()->all();
			return $rows;
		}
	}
}
?>
