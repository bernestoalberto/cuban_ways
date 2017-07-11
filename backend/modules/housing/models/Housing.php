<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Thu Jun 02 01:07:54 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla housing.
 *
 * Los siguientes son los campos de la tabla 'housing':

 * @property integer $id_housing
 * @property string $name_housing
 * @property string $keywords_housing
 * @property string $announce
 * @property string $description
 * @property integer $id_housing_type
 * @property integer $id_housing_state_rent
 * @property date $createdat
 * @property integer $id_housing_address
 * @property integer $id_owner

 * Los siguientes son las relaciones de este modelo :

 * @property Housing_address $housing_address
 * @property Housing_state_rent $housing_state_rent
 * @property Housing_type $housing_type
 * @property Owner $owner
 * @property Housing_availability[] $arrayhousing_availability
 * @property Housing_characteristics_housing[] $arrayhousing_characteristics_housing
 * @property Housing_characteristics[] $arrayhousing_characteristics
 * @property Housing_image[] $arrayhousing_image
 * @property Housing_season_price[] $arrayhousing_season_price
 * @property Service_housing[] $arrayservice_housing
 * @property Slip_for_rent[] $arrayslip_for_rent
 */

class Housing extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'housing';
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
			[['name_housing','announce','description','id_housing_type','id_housing_state_rent','id_owner'],'required'],
			[['id_housing','id_housing_type','id_housing_state_rent','id_housing_address','id_owner'],'integer'],
			[['createdat'],'safe'],
			[['name_housing','keywords_housing','announce'], 'string', 'max'=>100],
			[['description'], 'string', 'max'=>2147483647],
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
	     'id_housing'=>'Id Housing',
	     'name_housing'=>'Name Housing',
	     'keywords_housing'=>'Keywords Housing',
	     'announce'=>'Announce',
	     'description'=>'Description',
	     'id_housing_type'=>'Id Housing Type',
	     'id_housing_state_rent'=>'Id Housing State Rent',
	     'createdat'=>'Createdat',
	     'id_housing_address'=>'Id Housing Address',
	     'id_owner'=>'Id Owner',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getHousing_address()
		{
			return $this->hasOne(Housing_address::className(), ['id_housing_address' => 'id_housing_address']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getHousing_state_rent()
		{
			return $this->hasOne(Housing_state_rent::className(), ['id_housing_state_rent' => 'id_housing_state_rent']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getHousing_type()
		{
			return $this->hasOne(Housing_type::className(), ['id_housing_type' => 'id_housing_type']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getOwner()
		{
			return $this->hasOne(Owner::className(), ['id_owner' => 'id_owner']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing_availability()
		{
			return $this->hasMany(Housing_availability::className(), ['id_housing' => 'id_housing']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing_characteristics_housing()
		{
			return $this->hasMany(Housing_characteristics_housing::className(), ['id_housing' => 'id_housing']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing_characteristics()
		{
			return $this->hasMany(Housing_characteristics::className(), ['id_housing_characteristics' => 'id_housing_characteristics'])->viaTable(Housing_characteristics_housing::className(), ['id_housing' => 'id_housing']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing_image()
		{
			return $this->hasMany(Housing_image::className(), ['id_housing' => 'id_housing']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing_season_price()
		{
			return $this->hasMany(Housing_season_price::className(), ['id_housing' => 'id_housing']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayservice_housing()
		{
			return $this->hasMany(Service_housing::className(), ['id_housing' => 'id_housing']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayslip_for_rent()
		{
			return $this->hasMany(Slip_for_rent::className(), ['id_housing' => 'id_housing']);
		}

 	 /**
     * @inheritdoc
     * @return HousingQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new HousingQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Housing::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Housing::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
