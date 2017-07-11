<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Wed May 25 11:59:12 EDT 2016*/

namespace backend\modules\nomenclature\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla availability_state.
 *
 * Los siguientes son los campos de la tabla 'availability_state':

 * @property integer $id_availability_state
 * @property string $availability_state

 * Los siguientes son las relaciones de este modelo :

 * @property Housing_availability[] $arrayhousing_availability
 */

class Availability_state extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'availability_state';
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
			[['availability_state'],'required'],
			[['id_availability_state'],'integer'],
			[['availability_state'], 'string', 'max'=>100],
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
	     'id_availability_state'=>'Id Availability State',
	     'availability_state'=>'Availability State',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing_availability()
		{
			return $this->hasMany(Housing_availability::className(), ['id_availability_state' => 'id_availability_state']);
		}

 	 /**
     * @inheritdoc
     * @return Availability_stateQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Availability_stateQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Availability_state::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Availability_state::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
