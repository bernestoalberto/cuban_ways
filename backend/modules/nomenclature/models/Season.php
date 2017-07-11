<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 11:07:04 GMT-05:00 2016*/

namespace backend\modules\nomenclature\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla season.
 *
 * Los siguientes son los campos de la tabla 'season':

 * @property integer $id_season
 * @property string $name_season

 * Los siguientes son las relaciones de este modelo :

 * @property Housing_season_price[] $arrayhousing_season_price
 */

class Season extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'season';
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
			[['name_season'],'required'],
			[['id_season'],'integer'],
			[['name_season'], 'string', 'max'=>100],
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
	     'id_season'=>'Id Season',
	     'name_season'=>'Name Season',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing_season_price()
		{
			return $this->hasMany(Housing_season_price::className(), ['id_season' => 'id_season']);
		}

 	 /**
     * @inheritdoc
     * @return SeasonQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new SeasonQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Season::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Season::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
