<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon Jun 06 13:39:34 GMT-05:00 2016*/

namespace backend\modules\housing\controllers;

use Yii;
use backend\themes\make\AppAssetMake;
use backend\themes\make\assets\php\AppAssetPlugins;
use yii\filters\AccessControl;
use yii\web\View;
use backend\modules\housing\models\Housing_season_price;
use backend\modules\housing\models\Housing_season_priceSearch;
use yii\web\Controller;
use yii\db\Query;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/** 
 * housing_season_priceimplenta las acciones del modelo housing_season_price .
 *
 */
class Housing_season_priceController extends Controller
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
     * Lists all Housing_season_price models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Housing_season_priceSearch();
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

		 //Datos de la Tabla Housing_season_price
		 AppAssetPlugins::setPlugins_DateRange($this->view);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/coin_type/kendo_coin_type.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/coin_type/kendo_coin_type_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
				'index'=>true
        ]);
    }


 /**
     * Lists all Housing_season_price models.
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


		 //Datos de la Tabla Housing_season_price
		 AppAssetPlugins::getPlugins_DateRange($this->view);
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/nomenclature/coin_type/kendo_coin_type.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/nomenclature/coin_type/kendo_coin_type_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing/kendo_housing.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/nomenclature/season/kendo_season.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/nomenclature/season/kendo_season_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_datasource.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_components.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_actions_ajax.js');
		array_push($this->view->js,Yii::$app->homeUrl.'/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_init.js');
        return $this->getView()->render('@backend/modules/housing/views/housing_season_price/index',array('index'=>false));
    }
/**
     * Displays a single Housing_season_price model.
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
     * Creates a new Housing_season_price model.
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
            $model = new Housing_season_price();
            if ($model->load(Yii::$app->request->post())) {
                try {
                    $model->cretedat= date('Y-m-d',strtotime($model->cretedat));
                    $model->date_start_publicity= date('Y-m-d',strtotime($model->date_start_publicity));
                    $model->date_end_publicity= date('Y-m-d',strtotime($model->date_end_publicity));
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
            $model = new Housing_season_price();
			 $action='create';
            if ($model->load(Yii::$app->request->post())) {
                try {

                    $model->cretedat= date('Y-m-d',strtotime($model->cretedat));
                    $model->date_start_publicity= date('Y-m-d',strtotime($model->date_start_publicity));
                    $model->date_end_publicity= date('Y-m-d',strtotime($model->date_end_publicity));
                    $model->date_start= date('Y-m-d',strtotime($model->date_start));
                    $model->date_end= date('Y-m-d',strtotime($model->date_end));
                    	$result=$model->save();
                    if($result){
                       return $this->redirect(Yii::$app->homeUrl.'housing/housing_season_price', [
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
							'id_housing_season_price'=>'',
            		 ]);
					}
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la insercion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_housing_season_price'=>'',
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

		 //Datos de la Tabla Housing_season_price
		 AppAssetPlugins::setPlugins_DateRange($this->view);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/coin_type/kendo_coin_type.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/coin_type/kendo_coin_type_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Insertar',
							'id_housing_season_price'=>'',
            		 ]);
                }	}
/**
     * Update a Housing_season_price model.
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

			$housing_season_price= (object)Yii::$app->request->post('Housing_season_price');
            $model =  $this->findModel($housing_season_price->id_housing_season_price);
            if ($model->load(Yii::$app->request->post())) {
                try {
                    $model->cretedat= date('Y-m-d',strtotime($model->cretedat));
                    $model->date_start_publicity= date('Y-m-d',strtotime($model->date_start_publicity));
                    $model->date_end_publicity= date('Y-m-d',strtotime($model->date_end_publicity));
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
			if(isset($_GET['id_housing_season_price'])){
					$condition =array(
						'id_housing_season_price'=>$_GET['id_housing_season_price']
						);
            $model = Housing_season_price::findOne($condition);

		 AppAssetPlugins::setPlugins_bootstrap_Modal($this->view);
		 AppAssetPlugins::setPlugins_NotificationsW8($this->view);
		 AppAssetPlugins::setPlugins_bootstrap_Validation($this->view);
		 AppAssetPlugins::setPlugins_Icheck($this->view);;
		 AppAssetPlugins::setPlugins_ComponentsCss($this->view);
		 AppAssetPlugins::setPlugins_Select2($this->view);
        $this->view->registerJsFile('@web/js/validation/validation.js',
		 ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		 //Datos de la Tabla Housing_season_price
		 AppAssetPlugins::setPlugins_DateRange($this->view);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/coin_type/kendo_coin_type.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/coin_type/kendo_coin_type_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing/kendo_housing_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/nomenclature/season/kendo_season_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_datasource.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_components.js',
            ['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
		$this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_actions_ajax.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);
        $this->view->registerJsFile('@web/js/cuban_ways_db_js/housing/housing_season_price/kendo_housing_season_price_init.js',
				['depends' => [AppAssetMake::className()],'position'=>View::POS_END]);

		return $this->render('form', [
							'message'=>'',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_housing_season_price'=>'Housing_season_price[id_housing_season_price]',
            		 ]);
	}
			$id_housing_season_price=Yii::$app->request->post('Housing_season_price')['id_housing_season_price'];
					$condition =array(
						'id_housing_season_price'=>$id_housing_season_price
						);
			$model=Housing_season_price::findOne($condition);
            if ($model->load(Yii::$app->request->post())) {
                try {

                    $model->cretedat= date('Y-m-d',strtotime($model->cretedat));
                    $model->date_start_publicity= date('Y-m-d',strtotime($model->date_start_publicity));
                    $model->date_end_publicity= date('Y-m-d',strtotime($model->date_end_publicity));
                    $model->date_start= date('Y-m-d',strtotime($model->date_start));
                    $model->date_end= date('Y-m-d',strtotime($model->date_end));
                    	$model->update();
                       return $this->redirect(Yii::$app->homeUrl.'housing/housing_season_price', [
            				'message' =>'Elemento insertado correctamente'
        					]);
                } catch (Exception $e) {
							return $this->render('form', [
							'message'=>'Ocurrio un error en la actualizacion del elemento',
                			'model' => $model,
							'action' => $action,
							'textaction'=>'Actualizar',
							'id_housing_season_price'=>'Housing_season_price[id_housing_season_price]',
            		 ]);
                }
            }
	 	}
		//Si no hay datos redirecciona al index
		return $this->redirect(Yii::$app->homeUrl.'housing/housing_season_price', [
				'message' =>'Elemento insertado correctamente'
		]);
	}
/**
     * Deletes an existing Housing_season_price model.
     * If deletion is successful, return a message in json format with ok response.
     * @return josn format message
     */
    public function actionDelete()
    {
        if($_POST['array']){
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $array= json_decode($_POST['array']);
                try {
            foreach ($array as $housing_season_price) {
                    $id=array(
                        'id_housing_season_price'=>$housing_season_price->id_housing_season_price
                    );
                    $this->findModel($id)->delete();
                    $jsonResult = array('success' => true, 'message' => 'El housing_season_price  fue eliminado con exito');
                }            }
			catch (Exception $e) {
                    $jsonResult = array('success' => false, 'message' => 'Algunos elementos no se eliminarion,existen elementos asociados, no es posible su eliminacion');
                }
            return $jsonResult;
        }
    }
/**
     * Finds the Housing_season_price model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Housing_season_price the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Housing_season_price::findOne($id)) !== null) {
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
		 				->from('housing_season_price')
		 				->orderBy(array('housing_season_price.id_housing_season_price'=>SORT_ASC))
			 	->join('inner join','coin_type','housing_season_price.id_coin_type=coin_type.id_coin_type')
			 	->join('inner join','housing','housing_season_price.id_housing=housing.id_housing')
			 	->join('inner join','season','housing_season_price.id_season=season.id_season')
			 	->select('housing_season_price.*,coin_type.name_coin ,housing.name_housing ,season.name_season ,housing_season_price.price_housing_season as text ,housing_season_price.id_housing_season_price as id ')
			 	->where('housing_season_price.price_housing_season LIKE '."'%".$like."%'")
			 	->all();
				$result['data']=$rows;
				$rows=$result;
			}
			else
		 	$rows = $query
		 		->from('housing_season_price')
		 		->orderBy(array('housing_season_price.id_housing_season_price'=>SORT_ASC))
			 	->join('inner join','coin_type','housing_season_price.id_coin_type=coin_type.id_coin_type')
			 	->join('inner join','housing','housing_season_price.id_housing=housing.id_housing')
			 	->join('inner join','season','housing_season_price.id_season=season.id_season')
			 	->select('housing_season_price.*,coin_type.name_coin ,housing.name_housing ,season.name_season ')
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
     * Load  from Excel a list of the Housing_season_price table based on its primary key value.
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
					$id_housing_season_price = $worksheet->getCell('A' . $row)->getFormattedValue();
					if (!empty($id_housing_season_price)) {
						$id_housing_season_price = $worksheet->getCell('A' . $row)->getValue();
						$price_housing_season = $worksheet->getCell('B' . $row)->getValue();
						$comition = $worksheet->getCell('C' . $row)->getValue();
						$cretedat = $worksheet->getCell('D' . $row)->getValue();
						$id_housing = $worksheet->getCell('E' . $row)->getValue();
						$id_season = $worksheet->getCell('F' . $row)->getValue();
						$id_coin_type = $worksheet->getCell('G' . $row)->getValue();
						$comition_for_publicitiy = $worksheet->getCell('H' . $row)->getValue();
						$date_start_publicity = $worksheet->getCell('I' . $row)->getValue();
						$date_end_publicity = $worksheet->getCell('J' . $row)->getValue();
						$booking_deposit = $worksheet->getCell('K' . $row)->getValue();
						$date_start = $worksheet->getCell('L' . $row)->getValue();
						$date_end = $worksheet->getCell('M' . $row)->getValue();
						$housing_season_price = new Housing_season_price();
						$housing_season_price->id_housing_season_price  =  $id_housing_season_price;
						$housing_season_price->price_housing_season  =  $price_housing_season;
						$housing_season_price->comition  =  $comition;
						$housing_season_price->cretedat  =  $cretedat;
						$housing_season_price->id_housing  =  $id_housing;
						$housing_season_price->id_season  =  $id_season;
						$housing_season_price->id_coin_type  =  $id_coin_type;
						$housing_season_price->comition_for_publicitiy  =  $comition_for_publicitiy;
						$housing_season_price->date_start_publicity  =  $date_start_publicity;
						$housing_season_price->date_end_publicity  =  $date_end_publicity;
						$housing_season_price->booking_deposit  =  $booking_deposit;
						$housing_season_price->date_start  =  $date_start;
						$housing_season_price->date_end  =  $date_end;
						$housing_season_price->save();
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
     * Create a Excel file  from a list of the Housing_season_price 
     * @return boolean the list is created
     */
    public  function actionExcel()
    {
			include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel_IOFactory.php');
        	include(Yii::$app->basePath.'/vendor/php_excel/PHPExcel.php');

			$housing_season_pricelist=json_decode($_POST['housing_season_price_export']);
			$objPHPExcel = new \PHPExcel();
        	$name_user=Yii::$app->getUser()->identity->oldAttributes['username'];
			        $objPHPExcel->getProperties()->setCreator(Yii::$app->id)
				->setLastModifiedBy($name_user)
				->setTitle('Listado de Housing_season_price')
				->setSubject('Listado de Housing_season_price')
				->setDescription('Documento con el listado de Housing_season_prices segun '.Yii::$app->id);
        		$objPHPExcel->setActiveSheetIndex(0);
				$objPHPExcel->getActiveSheet()->setCellValue('A1', 'id_housing_season_price');
				$objPHPExcel->getActiveSheet()->setCellValue('B1', 'price_housing_season');
				$objPHPExcel->getActiveSheet()->setCellValue('C1', 'comition');
				$objPHPExcel->getActiveSheet()->setCellValue('D1', 'cretedat');
				$objPHPExcel->getActiveSheet()->setCellValue('E1', 'id_housing');
				$objPHPExcel->getActiveSheet()->setCellValue('F1', 'id_season');
				$objPHPExcel->getActiveSheet()->setCellValue('G1', 'id_coin_type');
				$objPHPExcel->getActiveSheet()->setCellValue('H1', 'comition_for_publicitiy');
				$objPHPExcel->getActiveSheet()->setCellValue('I1', 'date_start_publicity');
				$objPHPExcel->getActiveSheet()->setCellValue('J1', 'date_end_publicity');
				$objPHPExcel->getActiveSheet()->setCellValue('K1', 'booking_deposit');
				$objPHPExcel->getActiveSheet()->setCellValue('L1', 'date_start');
				$objPHPExcel->getActiveSheet()->setCellValue('M1', 'date_end');
				$i=2;
				foreach($housing_season_pricelist as  $housing_season_price) 
					{	
						$housing_season_price=(object)$housing_season_price;
						$objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $housing_season_price->id_housing_season_price);
						$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $housing_season_price->price_housing_season);
						$objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $housing_season_price->comition);
						$objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $housing_season_price->cretedat);
						$objPHPExcel->getActiveSheet()->setCellValue('E'.$i, $housing_season_price->id_housing);
						$objPHPExcel->getActiveSheet()->setCellValue('F'.$i, $housing_season_price->id_season);
						$objPHPExcel->getActiveSheet()->setCellValue('G'.$i, $housing_season_price->id_coin_type);
						$objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $housing_season_price->comition_for_publicitiy);
						$objPHPExcel->getActiveSheet()->setCellValue('I'.$i, $housing_season_price->date_start_publicity);
						$objPHPExcel->getActiveSheet()->setCellValue('J'.$i, $housing_season_price->date_end_publicity);
						$objPHPExcel->getActiveSheet()->setCellValue('K'.$i, $housing_season_price->booking_deposit);
						$objPHPExcel->getActiveSheet()->setCellValue('L'.$i, $housing_season_price->date_start);
						$objPHPExcel->getActiveSheet()->setCellValue('M'.$i, $housing_season_price->date_end);
						$i++;
					}

	 			$exceklib= new \PHPExcel_IOFactory();
        		$objWriter = $exceklib->createWriter($objPHPExcel, 'Excel2007');
				header("Content-Disposition: attachment; filename=\"Listado_housing_season_price.xls\"");
		        header("Content-Type: application/vnd.ms-excel");
				$objWriter->save('php://output');
				exit;
	 }

/**
	 * Find a single Housing_season_price model.
	 * @return mixed
	 */
public function actionFindbyukjson()
	{
		if (Yii::$app->request->getIsAjax() && isset( $_GET['Housing_season_price'])) {
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$condition=$_GET['Housing_season_price'];
			$housing_season_price=Housing_season_price::findByUK($condition);
			$jsonResult = array('valid' => true);
			if($housing_season_price!=null &&  $_GET['id_housing_season_price']!=$housing_season_price['id_housing_season_price'])
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
            $rows = Housing_season_price::find()->all();
            return $rows;
        }
    }
}
 ?>
