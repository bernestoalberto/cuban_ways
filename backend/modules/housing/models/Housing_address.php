<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:49 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla housing_address.
 *
 * Los siguientes son los campos de la tabla 'housing_address':

 * @property integer $id_housing_address
 * @property integer $id_town
 * @property float $length
 * @property float $latitude
 * @property string $number_housing
 * @property string $main_street
 * @property string $between_first
 * @property string $between_second

 * Los siguientes son las relaciones de este modelo :

 * @property Town $town
 * @property Housing[] $arrayhousing
 */

class Housing_address extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'housing_address';
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
			[['id_town','number_housing','main_street'],'required'],
			[['id_housing_address','id_town'],'integer'],
			[['number_housing'], 'string', 'max'=>10],
			[['main_street','between_first','between_second'], 'string', 'max'=>20],
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
	     'id_housing_address'=>'Id Housing Address',
	     'id_town'=>'Id Town',
	     'length'=>'Length',
	     'latitude'=>'Latitude',
	     'number_housing'=>'Number Housing',
	     'main_street'=>'Main Street',
	     'between_first'=>'Between First',
	     'between_second'=>'Between Second',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getTown()
		{
			return $this->hasOne(Town::className(), ['id_town' => 'id_town']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing()
		{
			return $this->hasMany(Housing::className(), ['id_housing_address' => 'id_housing_address']);
		}

 	 /**
     * @inheritdoc
     * @return Housing_addressQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Housing_addressQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Housing_address::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Housing_address::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
