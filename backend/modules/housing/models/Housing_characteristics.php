<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:34 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla housing_characteristics.
 *
 * Los siguientes son los campos de la tabla 'housing_characteristics':

 * @property integer $id_housing_characteristics
 * @property string $name_housing_characteristics

 * Los siguientes son las relaciones de este modelo :

 * @property Housing_characteristics_housing[] $arrayhousing_characteristics_housing
 * @property Housing[] $arrayhousing
 */

class Housing_characteristics extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'housing_characteristics';
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
			[['name_housing_characteristics'],'required'],
			[['id_housing_characteristics'],'integer'],
			[['name_housing_characteristics'], 'string', 'max'=>100],
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
	     'name_housing_characteristics'=>'Name Housing Characteristics',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing_characteristics_housing()
		{
			return $this->hasMany(Housing_characteristics_housing::className(), ['id_housing_characteristics' => 'id_housing_characteristics']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing()
		{
			return $this->hasMany(Housing::className(), ['id_housing' => 'id_housing'])->viaTable(Housing_characteristics_housing::className(), ['id_housing_characteristics' => 'id_housing_characteristics']);
		}

 	 /**
     * @inheritdoc
     * @return Housing_characteristicsQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Housing_characteristicsQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Housing_characteristics::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Housing_characteristics::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
