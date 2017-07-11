<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Wed May 25 11:59:12 EDT 2016*/

namespace backend\modules\nomenclature\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla coin_type.
 *
 * Los siguientes son los campos de la tabla 'coin_type':

 * @property integer $id_coin_type
 * @property string $name_coin
 * @property string $abbrv_coin

 * Los siguientes son las relaciones de este modelo :

 * @property Housing_season_price[] $arrayhousing_season_price
 */

class Coin_type extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'coin_type';
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
			[['name_coin','abbrv_coin'],'required'],
			[['id_coin_type'],'integer'],
			[['name_coin','abbrv_coin'], 'string', 'max'=>100],
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
	     'id_coin_type'=>'Id Coin Type',
	     'name_coin'=>'Name Coin',
	     'abbrv_coin'=>'Abbrv Coin',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing_season_price()
		{
			return $this->hasMany(Housing_season_price::className(), ['id_coin_type' => 'id_coin_type']);
		}

 	 /**
     * @inheritdoc
     * @return Coin_typeQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Coin_typeQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Coin_type::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Coin_type::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
