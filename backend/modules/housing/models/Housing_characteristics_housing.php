<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:28 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla housing_characteristics_housing.
 *
 * Los siguientes son los campos de la tabla 'housing_characteristics_housing':

 * @property integer $id_housing_characteristics
 * @property integer $id_housing
 * @property integer $count_housing_characteristics
 * @property boolean $cancelled
 * @property integer $id_housing_characteristics_housing

 * Los siguientes son las relaciones de este modelo :

 * @property Housing $housing
 * @property Housing_characteristics $housing_characteristics
 */

class Housing_characteristics_housing extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'housing_characteristics_housing';
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
			[['id_housing_characteristics','id_housing','count_housing_characteristics','cancelled'],'required'],
			[['id_housing_characteristics','id_housing','count_housing_characteristics','id_housing_characteristics_housing'],'integer'],
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
	     'id_housing_characteristics'=>'Id Housing Characteristics',
	     'id_housing'=>'Id Housing',
	     'count_housing_characteristics'=>'Count Housing Characteristics',
	     'cancelled'=>'Cancelled',
	     'id_housing_characteristics_housing'=>'Id Housing Characteristics Housing',
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
	  public function getHousing_characteristics()
		{
			return $this->hasOne(Housing_characteristics::className(), ['id_housing_characteristics' => 'id_housing_characteristics']);
		}

 	 /**
     * @inheritdoc
     * @return Housing_characteristics_housingQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Housing_characteristics_housingQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Housing_characteristics_housing::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Housing_characteristics_housing::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
