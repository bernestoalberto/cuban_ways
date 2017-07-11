<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Wed May 25 11:59:12 EDT 2016*/

namespace backend\modules\localization\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla continent.
 *
 * Los siguientes son los campos de la tabla 'continent':

 * @property integer $id_continent
 * @property string $name_continent

 * Los siguientes son las relaciones de este modelo :

 * @property Country[] $arraycountry
 */

class Continent extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'continent';
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
			[['name_continent'],'required'],
			[['id_continent'],'integer'],
			[['name_continent'], 'string', 'max'=>20],
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
	     'id_continent'=>'Id Continent',
	     'name_continent'=>'Name Continent',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArraycountry()
		{
			return $this->hasMany(Country::className(), ['id_continent' => 'id_continent']);
		}

 	 /**
     * @inheritdoc
     * @return ContinentQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new ContinentQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Continent::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Continent::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
