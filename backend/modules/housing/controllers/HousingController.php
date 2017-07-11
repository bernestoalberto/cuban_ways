<?php
/*Generado by Pro Generator */
/*@author Charlietyn  */
/*@Date: Sun May 29 12:09:33 GMT-05:00 2016*/

namespace backend\modules\housing\controllers;

use Yii;
use backend\themes\make\AppAssetMake;
use backend\themes\make\assets\php\AppAssetPlugins;
use yii\filters\AccessControl;
use yii\web\View;
use backend\modules\housing\models\Housing;
use backend\modules\housing\models\HousingSearch;
use yii\web\Controller;
use yii\db\Query;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * housingimplenta las acciones del modelo housing .
 *
 */
class HousingController extends Controller
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
	 * Lists all Housing models.
	 * @return mixed
	 */
	public function actionIndex()
	{
		$searchModel = new HousingSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		$this->view->registerJs('var module=true;',View::POS_HEAD);

		AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
		AppAssetPlugins::setPlugins_NotificationsW8($this->view);
		AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
		AppAssetPlugins::setPlugins_ComponentsCss($this->view);
		AppAssetPlugins::setPlugins_Select2($this->view);
		AppAssetPlugins::setPlugins_Icheck($this->view);
		$this->view->registerJsFile('@web/js/validation/validation.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		//Datos de la Tabla Housing
		AppAssetPlugins::setPlugins_DateRange($this->view);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_type/kendo_housing_type.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_type/kendo_housing_type_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		//new
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_characteristics_housing/kendo_housing_characteristics_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_characteristics_housing/kendo_housing_characteristics_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);



		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_components.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_actions.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);


		return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
				'index'=>true
		]);
	}


	/**
	 * Lists all Housing models.
	 * @return mixed
	 */
	public function actionLoad()
	{

		$this->view->js=[];
		$this->view->css=[];
		AppAssetPlugins::getPlugins_bootstrap_Modal($this->view);
		AppAssetPlugins::getPlugins_NotificationsW8($this->view);
		AppAssetPlugins::getPlugins_bootstrap_Validation($this->view);
		AppAssetPlugins::getPlugins_ComponentsCss($this->view);
		AppAssetPlugins::getPlugins_Icheck($this->view);

		AppAssetPlugins::getPlugins_Select2($this->view);
		array_push($this->view->js,Yii::$app->homeUrl.'/js/validation/validation.js');


		//Datos de la Tabla Housing
		AppAssetPlugins::getPlugins_DateRange($this->view);
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing/kendo_housing.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_type/kendo_housing_type.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_type/kendo_housing_type_datasource.js');


		//new
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_characteristics_housing/kendo_housing_characteristics_housing.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_characteristics_housing/kendo_housing_characteristics_housing_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_datasource.js');


		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/owner/kendo_owner.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/owner/kendo_owner_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing/kendo_housing_components.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing/kendo_housing_actions_ajax.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing/kendo_housing_init.js');


		return $this->getView()->render('@backend/modules/housing/views/housing/index',array('index'=>false));
	}
	/**
	 * Displays a single Housing model.
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
	 * Creates a new Housing model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate()
	{
		$post=false;
		if (Yii::$app->request->getIsAjax()) {
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$model = new Housing();
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
		else
		{
			$model = new Housing();
			$action='create';
			if ($model->load(Yii::$app->request->post())) {
				try {

					$model->createdat= date('Y-m-d',strtotime($model->createdat));
					$result=$model->save();
					if($result){
						return $this->redirect(Yii::$app->homeUrl.'housing/housing', [
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
								'id_housing'=>'',
						]);
					}
				} catch (Exception $e) {
					return $this->render('form', [
							'message'=>'Ocurrio un error en la insercion del elemento',
							'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_housing'=>'',
					]);
				}
			}
		}
		if(!$post){

			AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
			AppAssetPlugins::setPlugins_NotificationsW8($this->view);
			AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
			AppAssetPlugins::setPlugins_ComponentsCss($this->view);
			AppAssetPlugins::setPlugins_Select2($this->view);
			AppAssetPlugins::setPlugins_DropZone($this->view);
			AppAssetPlugins::setPlugins_Icheck($this->view);

			$this->view->registerJsFile('@web/js/validation/validation.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

			//Datos de la Tabla Housing
			AppAssetPlugins::setPlugins_DateRange($this->view);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_datasource.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_service/kendo_housing_service.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_service/kendo_housing_service_datasource.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_characteristics/kendo_housing_characteristics.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_characteristics/kendo_housing_characteristics_datasource.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

			//new
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_characteristics_housing/kendo_housing_characteristics_housing.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_characteristics_housing/kendo_housing_characteristics_housing_datasource.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_characteristics_housing/kendo_housing_characteristics_housing_actions.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_datasource.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_components.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_datasource.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_init.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);



			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_datasource.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_type/kendo_housing_type.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_type/kendo_housing_type_datasource.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_datasource.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_components.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_init.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_components.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_actions.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
			$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_init.js',
					['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);



			return $this->render('form', [
					'message'=>'',
					'model' => $model,
					'action' => 'create',
					'textaction'=>'Insertar',
					'id_housing'=>'',
			]);
		}	}
	/**
	 * Update a Housing model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionUpdate()
	{
		$post=false;
		if (Yii::$app->request->getIsAjax()) {
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

			$housing= (object)Yii::$app->request->post('Housing');
			$model =  $this->findModel($housing->id_housing);
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
		else
		{
			$action='update';
			if(isset($_GET['id_housing'])){
				$condition =array(
						'id_housing'=>$_GET['id_housing']
				);
				$model = Housing::findOne($condition);

				AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
				AppAssetPlugins::setPlugins_NotificationsW8($this->view);
				AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
				AppAssetPlugins::setPlugins_ComponentsCss($this->view);
				AppAssetPlugins::setPlugins_Select2($this->view);
				$this->view->registerJsFile('@web/js/validation/validation.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

				//Datos de la Tabla Housing
				AppAssetPlugins::setPlugins_DateRange($this->view);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_address/kendo_housing_address_datasource.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_state_rent/kendo_housing_state_rent_datasource.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_type/kendo_housing_type.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_type/kendo_housing_type_datasource.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);


				//new
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_characteristics_housing/kendo_housing_characteristics_housing.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_characteristics_housing/kendo_housing_characteristics_housing_datasource.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/service_housing/kendo_service_housing_datasource.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_datasource.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);



				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/owner/kendo_owner_datasource.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_components.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_actions_ajax.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
				$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_init.js',
						['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);


				return $this->render('form', [
						'message'=>'',
						'model' => $model,
						'action' => $action,
						'textaction'=>'Actualizar',
						'id_housing'=>'Housing[id_housing]',
				]);
			}
			$id_housing=Yii::$app->request->post('Housing')['id_housing'];
			$condition =array(
					'id_housing'=>$id_housing
			);
			$model=Housing::findOne($condition);
			if ($model->load(Yii::$app->request->post())) {
				try {

					$model->createdat= date('Y-m-d',strtotime($model->createdat));
					$model->update();
					return $this->redirect(Yii::$app->homeUrl.'housing/housing', [
							'message' =>'Elemento insertado correctamente'
					]);
				} catch (Exception $e) {
					return $this->render('form', [
							'message'=>'Ocurrio un error en la actualizacion del elemento',
							'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_housing'=>'Housing[id_housing]',
					]);
				}
			}
		}
		//Si no hay datos redirecciona al index
		return $this->redirect(Yii::$app->homeUrl.'housing/housing', [
				'message' =>'Elemento insertado correctamente'
		]);
	}
	/**
	 * Deletes an existing Housing model.
	 * If deletion is successful, return a message in json format with ok response.
	 * @return josn format message
	 */
	public function actionDelete()
	{
		if($_POST['array']){
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$array= json_decode($_POST['array']);
			try {
				foreach ($array as $housing) {
					$id=array(
							'id_housing'=>$housing->id_housing
					);
					$this->findModel($id)->delete();
					$jsonResult = array('success' => true, 'message' => 'El housing  fue eliminado con exito');
				}            }
			catch (Exception $e) {
				$jsonResult = array('success' => false, 'message' => 'Algunos elementos no se eliminarion,existen elementos asociados, no es posible su eliminacion');
			}
			return $jsonResult;
		}
	}
	/**
	 * Finds the Housing model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Housing the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = Housing::findOne($id)) !== null) {
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
						->from('housing')
						->orderBy(array('housing.id_housing'=>SORT_ASC))
						->join('inner join','housing_address','housing.id_housing_address=housing_address.id_housing_address')
						->join('inner join','housing_state_rent','housing.id_housing_state_rent=housing_state_rent.id_housing_state_rent')
						->join('inner join','housing_type','housing.id_housing_type=housing_type.id_housing_type')
						->join('inner join','owner','housing.id_owner=owner.id_owner')
						->select('housing.*,housing_address.id_town ,housing_state_rent.name_housing_state_rent ,housing_type.name_housing_type ,owner.name_owner ,housing.name_housing as text ')
						->where('housing.name_housing LIKE "%'.$like.'%"')
						->all();
				$result['data']=$rows;
				$rows=$result;
			}
			else
				$rows = $query
						->from('housing')
						->orderBy(array('housing.id_housing'=>SORT_ASC))
						->join('inner join','housing_address','housing.id_housing_address=housing_address.id_housing_address')
						->join('inner join','housing_state_rent','housing.id_housing_state_rent=housing_state_rent.id_housing_state_rent')
						->join('inner join','housing_type','housing.id_housing_type=housing_type.id_housing_type')
						->join('inner join','owner','housing.id_owner=owner.id_owner')
						->select('housing.*,housing_address.id_town ,housing_state_rent.name_housing_state_rent ,housing_type.name_housing_type ,owner.name_owner ')
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
	 * Load  from Excel a list of the Housing table based on its primary key value.
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
					$id_housing = $worksheet->getCell('A' . $row)->getFormattedValue();
					if (!empty($id_housing)) {
						$id_housing = $worksheet->getCell('A' . $row)->getValue();
						$name_housing = $worksheet->getCell('B' . $row)->getValue();
						$keywords_housing = $worksheet->getCell('C' . $row)->getValue();
						$announce = $worksheet->getCell('D' . $row)->getValue();
						$description = $worksheet->getCell('E' . $row)->getValue();
						$id_housing_type = $worksheet->getCell('F' . $row)->getValue();
						$id_housing_state_rent = $worksheet->getCell('G' . $row)->getValue();
						$createdat = $worksheet->getCell('H' . $row)->getValue();
						$id_housing_address = $worksheet->getCell('I' . $row)->getValue();
						$id_owner = $worksheet->getCell('J' . $row)->getValue();
						$housing = new Housing();
						$housing->id_housing  =  $id_housing;
						$housing->name_housing  =  $name_housing;
						$housing->keywords_housing  =  $keywords_housing;
						$housing->announce  =  $announce;
						$housing->description  =  $description;
						$housing->id_housing_type  =  $id_housing_type;
						$housing->id_housing_state_rent  =  $id_housing_state_rent;
						$housing->createdat  =  $createdat;
						$housing->id_housing_address  =  $id_housing_address;
						$housing->id_owner  =  $id_owner;
						$housing->save();
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
	 * Create a Excel file  from a list of the Housing
	 * @return boolean the list is created
	 */
	public  function actionExcel()
	{
		include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel_IOFactory.php');
		include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel.php');

		$housinglist=json_decode($_POST['housing_export']);
		$objPHPExcel = new \PHPExcel();
		$name_user=Yii::$app->getUser()->identity->oldAttributes['username'];
		$objPHPExcel->getProperties()->setCreator(Yii::$app->id)
				->setLastModifiedBy($name_user)
				->setTitle('Listado de Housing')
				->setSubject('Listado de Housing')
				->setDescription('Documento con el listado de Housings segun '.Yii::$app->id);
		$objPHPExcel->setActiveSheetIndex(0);
		$objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_housing');
		$objPHPExcel->getActiveSheet()->setCellValue('B1', 'name_housing');
		$objPHPExcel->getActiveSheet()->setCellValue('C1', 'keywords_housing');
		$objPHPExcel->getActiveSheet()->setCellValue('D1', 'announce');
		$objPHPExcel->getActiveSheet()->setCellValue('E1', 'description');
		$objPHPExcel->getActiveSheet()->setCellValue('F1', 'id_housing_type');
		$objPHPExcel->getActiveSheet()->setCellValue('G1', 'id_housing_state_rent');
		$objPHPExcel->getActiveSheet()->setCellValue('H1', 'createdat');
		$objPHPExcel->getActiveSheet()->setCellValue('I1', 'id_housing_address');
		$objPHPExcel->getActiveSheet()->setCellValue('J1', 'id_owner');
		$i=2;
		foreach($housinglist as  $housing)
		{
			$housing=(object)$housing;
			$objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $housing->id_housing);
			$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $housing->name_housing);
			$objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $housing->keywords_housing);
			$objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $housing->announce);
			$objPHPExcel->getActiveSheet()->setCellValue('E'.$i, $housing->description);
			$objPHPExcel->getActiveSheet()->setCellValue('F'.$i, $housing->id_housing_type);
			$objPHPExcel->getActiveSheet()->setCellValue('G'.$i, $housing->id_housing_state_rent);
			$objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $housing->createdat);
			$objPHPExcel->getActiveSheet()->setCellValue('I'.$i, $housing->id_housing_address);
			$objPHPExcel->getActiveSheet()->setCellValue('J'.$i, $housing->id_owner);
			$i++;
		}

		$exceklib= new \PHPExcel_IOFactory();
		$objWriter = $exceklib->createWriter($objPHPExcel, 'Excel2007');
		header("Content-Disposition: attachment; filename=\"Listado_housing.xls\"");
		header("Content-Type: application/vnd.ms-excel");
		$objWriter->save('php://output');
		exit;
	}

	/**
	 * Find a single Housing model.
	 * @return mixed
	 */
	public function actionFindbyukjson()
	{
		if (Yii::$app->request->getIsAjax() && isset( $_GET['Housing'])) {
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$condition=$_GET['Housing'];
			$housing=Housing::findByUK($condition);
			$jsonResult = array('valid' => true);
			if($housing!=null &&  $_GET['id_housing']!=$housing['id_housing'])
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
			$rows = Housing::find()->all();
			return $rows;
		}
	}
}
?>
