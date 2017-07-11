<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:34 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla service_housing.
 *
 * Los siguientes son los campos de la tabla 'service_housing':

 * @property integer $id_service_housing
 * @property float $price
 * @property boolean $canceled
 * @property integer $id_service
 * @property integer $id_housing

 * Los siguientes son las relaciones de este modelo :

 * @property Housing $housing
 * @property Housing_service $housing_service
 */

class Service_housing extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'service_housing';
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
			[['price','canceled','id_service','id_housing'],'required'],
			[['id_service_housing','id_service','id_housing'],'integer'],
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
	     'id_service_housing'=>'Id Service Housing',
	     'price'=>'Price',
	     'canceled'=>'Canceled',
	     'id_service'=>'Id Service',
	     'id_housing'=>'Id Housing',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getHousing()
		{
			return $this->hasOne(Housing::className(), ['id_housing' => 'id_housing']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getHousing_service()
		{
			return $this->hasOne(Housing_service::className(), ['id_service' => 'id_service']);
		}

 	 /**
     * @inheritdoc
     * @return Service_housingQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Service_housingQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Service_housing::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Service_housing::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
