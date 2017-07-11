<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:34 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla housing_state_rent.
 *
 * Los siguientes son los campos de la tabla 'housing_state_rent':

 * @property integer $id_housing_state_rent
 * @property string $name_housing_state_rent

 * Los siguientes son las relaciones de este modelo :

 * @property Housing[] $arrayhousing
 */

class Housing_state_rent extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'housing_state_rent';
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
			[['name_housing_state_rent'],'required'],
			[['id_housing_state_rent'],'integer'],
			[['name_housing_state_rent'], 'string', 'max'=>100],
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
	     'id_housing_state_rent'=>'Id Housing State Rent',
	     'name_housing_state_rent'=>'Name Housing State Rent',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing()
		{
			return $this->hasMany(Housing::className(), ['id_housing_state_rent' => 'id_housing_state_rent']);
		}

 	 /**
     * @inheritdoc
     * @return Housing_state_rentQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Housing_state_rentQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Housing_state_rent::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Housing_state_rent::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
