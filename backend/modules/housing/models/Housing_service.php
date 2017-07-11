<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:35 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla housing_service.
 *
 * Los siguientes son los campos de la tabla 'housing_service':

 * @property integer $id_service
 * @property string $name_service
 * @property string $description_service

 * Los siguientes son las relaciones de este modelo :

 * @property Service_housing[] $arrayservice_housing
 */

class Housing_service extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'housing_service';
	}


		/**
	 	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.

		return [
			[['name_service'],'required'],
			[['id_service'],'integer'],
			[['name_service'], 'string', 'max'=>100],
			[['description_service'], 'string', 'max'=>2147483647],
 		];
 	}

 /**
     * @inheritdoc
     */
/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return [
	     'id_service'=>'Id Service',
	     'name_service'=>'Name Service',
	     'description_service'=>'Description Service',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayservice_housing()
		{
			return $this->hasMany(Service_housing::className(), ['id_service' => 'id_service']);
		}

 	 /**
     * @inheritdoc
     * @return Housing_serviceQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Housing_serviceQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Housing_service::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Housing_service::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
