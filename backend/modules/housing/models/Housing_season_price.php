<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon Jun 06 13:39:34 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla housing_season_price.
 *
 * Los siguientes son los campos de la tabla 'housing_season_price':

 * @property integer $id_housing_season_price
 * @property float $price_housing_season
 * @property float $comition
 * @property date $cretedat
 * @property integer $id_housing
 * @property integer $id_season
 * @property integer $id_coin_type
 * @property float $comition_for_publicitiy
 * @property date $date_start_publicity
 * @property date $date_end_publicity
 * @property float $booking_deposit
 * @property date $date_start
 * @property date $date_end

 * Los siguientes son las relaciones de este modelo :

 * @property Coin_type $coin_type
 * @property Housing $housing
 * @property Season $season
 */

class Housing_season_price extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'housing_season_price';
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
			[['price_housing_season','cretedat','id_housing','id_season','id_coin_type'],'required'],
			[['id_housing_season_price','id_housing','id_season','id_coin_type'],'integer'],
			[['cretedat','date_start_publicity','date_end_publicity','date_start','date_end'],'safe'],
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
	     'id_housing_season_price'=>'Id Housing Season Price',
	     'price_housing_season'=>'Price Housing Season',
	     'comition'=>'Comition',
	     'cretedat'=>'Cretedat',
	     'id_housing'=>'Id Housing',
	     'id_season'=>'Id Season',
	     'id_coin_type'=>'Id Coin Type',
	     'comition_for_publicitiy'=>'Comition For Publicitiy',
	     'date_start_publicity'=>'Date Start Publicity',
	     'date_end_publicity'=>'Date End Publicity',
	     'booking_deposit'=>'Booking Deposit',
	     'date_start'=>'Date Start',
	     'date_end'=>'Date End',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getCoin_type()
		{
			return $this->hasOne(Coin_type::className(), ['id_coin_type' => 'id_coin_type']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getHousing()
		{
			return $this->hasOne(Housing::className(), ['id_housing' => 'id_housing']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getSeason()
		{
			return $this->hasOne(Season::className(), ['id_season' => 'id_season']);
		}

 	 /**
     * @inheritdoc
     * @return Housing_season_priceQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Housing_season_priceQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Housing_season_price::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Housing_season_price::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
