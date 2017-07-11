<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:35 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla housing_image.
 *
 * Los siguientes son los campos de la tabla 'housing_image':

 * @property integer $id_housing_image
 * @property string $image
 * @property integer $id_housing

 * Los siguientes son las relaciones de este modelo :

 * @property Housing $housing
 */

class Housing_image extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'housing_image';
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
			[['image','id_housing'],'required'],
			[['id_housing_image','id_housing'],'integer'],
			[['image'], 'string', 'max'=>100],
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
	     'id_housing_image'=>'Id Housing Image',
	     'image'=>'Image',
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
     * @inheritdoc
     * @return Housing_imageQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Housing_imageQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Housing_image::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Housing_image::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
