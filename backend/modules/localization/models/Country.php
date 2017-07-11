<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Wed May 25 11:59:12 EDT 2016*/

namespace backend\modules\localization\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla country.
 *
 * Los siguientes son los campos de la tabla 'country':

 * @property integer $id_country
 * @property string $name_country
 * @property string $ie_code_country
 * @property string $code_country
 * @property integer $prefix
 * @property integer $id_continent
 * @property string $subcontinent
 * @property string $iso_money
 * @property string $money_name

 * Los siguientes son las relaciones de este modelo :

 * @property Continent $continent
 * @property Province[] $arrayprovince
 */

class Country extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'country';
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
			[['name_country','ie_code_country','code_country','prefix','id_continent'],'required'],
			[['id_country','prefix','id_continent'],'integer'],
			[['name_country','money_name'], 'string', 'max'=>100],
			[['subcontinent'], 'string', 'max'=>32],
			[['iso_money'], 'string', 'max'=>3],
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
	     'id_country'=>'Id Country',
	     'name_country'=>'Name Country',
	     'ie_code_country'=>'Ie Code Country',
	     'code_country'=>'Code Country',
	     'prefix'=>'Prefix',
	     'id_continent'=>'Id Continent',
	     'subcontinent'=>'Subcontinent',
	     'iso_money'=>'Iso Money',
	     'money_name'=>'Money Name',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getContinent()
		{
			return $this->hasOne(Continent::className(), ['id_continent' => 'id_continent']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayprovince()
		{
			return $this->hasMany(Province::className(), ['id_country' => 'id_country']);
		}

 	 /**
     * @inheritdoc
     * @return CountryQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new CountryQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Country::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Country::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
