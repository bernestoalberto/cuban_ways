<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:34 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla housing_type.
 *
 * Los siguientes son los campos de la tabla 'housing_type':

 * @property integer $id_housing_type
 * @property string $name_housing_type

 * Los siguientes son las relaciones de este modelo :

 * @property Housing[] $arrayhousing
 */

class Housing_type extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'housing_type';
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
			[['name_housing_type'],'required'],
			[['id_housing_type'],'integer'],
			[['name_housing_type'], 'string', 'max'=>100],
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
	     'id_housing_type'=>'Id Housing Type',
	     'name_housing_type'=>'Name Housing Type',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing()
		{
			return $this->hasMany(Housing::className(), ['id_housing_type' => 'id_housing_type']);
		}

 	 /**
     * @inheritdoc
     * @return Housing_typeQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Housing_typeQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Housing_type::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Housing_type::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
