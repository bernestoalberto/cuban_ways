<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:30 GMT-05:00 2016*/

namespace backend\modules\localization\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla province.
 *
 * Los siguientes son los campos de la tabla 'province':

 * @property integer $id_province
 * @property string $name_province
 * @property integer $id_country

 * Los siguientes son las relaciones de este modelo :

 * @property Country $country
 * @property Town[] $arraytown
 */

class Province extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'province';
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
			[['name_province','id_country'],'required'],
			[['id_province','id_country'],'integer'],
			[['name_province'], 'string', 'max'=>100],
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
	     'id_province'=>'Id Province',
	     'name_province'=>'Name Province',
	     'id_country'=>'Id Country',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getCountry()
		{
			return $this->hasOne(Country::className(), ['id_country' => 'id_country']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArraytown()
		{
			return $this->hasMany(Town::className(), ['id_province' => 'id_province']);
		}

 	 /**
     * @inheritdoc
     * @return ProvinceQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new ProvinceQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Province::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Province::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
