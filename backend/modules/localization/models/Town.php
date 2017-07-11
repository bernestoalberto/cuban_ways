<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:30 GMT-05:00 2016*/

namespace backend\modules\localization\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla town.
 *
 * Los siguientes son los campos de la tabla 'town':

 * @property integer $id_town
 * @property string $name_town
 * @property integer $id_province

 * Los siguientes son las relaciones de este modelo :

 * @property Province $province
 * @property Housing_address[] $arrayhousing_address
 */

class Town extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'town';
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
			[['name_town','id_province'],'required'],
			[['id_town','id_province'],'integer'],
			[['name_town'], 'string', 'max'=>100],
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
	     'id_town'=>'Id Town',
	     'name_town'=>'Name Town',
	     'id_province'=>'Id Province',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getProvince()
		{
			return $this->hasOne(Province::className(), ['id_province' => 'id_province']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing_address()
		{
			return $this->hasMany(Housing_address::className(), ['id_town' => 'id_town']);
		}

 	 /**
     * @inheritdoc
     * @return TownQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new TownQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Town::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Town::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
