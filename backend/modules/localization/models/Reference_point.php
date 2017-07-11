<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 12:22:46 GMT-05:00 2016*/

namespace backend\modules\localization\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla reference_point.
 *
 * Los siguientes son los campos de la tabla 'reference_point':

 * @property integer $id_reference_point
 * @property string $name_reference_point
 * @property float $latitude
 * @property float $length
 * @property string $image

 * Los siguientes son las relaciones de este modelo :

 */

class Reference_point extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'reference_point';
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
			[['name_reference_point','latitude','length'],'required'],
			[['id_reference_point'],'integer'],
			[['name_reference_point'], 'string', 'max'=>100],
			[['image'], 'string', 'max'=>1],
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
	     'id_reference_point'=>'Id Reference Point',
	     'name_reference_point'=>'Name Reference Point',
	     'latitude'=>'Latitude',
	     'length'=>'Length',
	     'image'=>'Image',
		];
	}

 	 /**
     * @inheritdoc
     * @return Reference_pointQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Reference_pointQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Reference_point::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Reference_point::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
