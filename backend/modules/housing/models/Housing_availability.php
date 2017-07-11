<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:33 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla housing_availability.
 *
 * Los siguientes son los campos de la tabla 'housing_availability':

 * @property integer $id_housing_availability
 * @property string $description_housing_availability
 * @property date $date_start
 * @property date $date_end
 * @property integer $id_availability_state
 * @property integer $id_housing
 * @property integer $id_usuario

 * Los siguientes son las relaciones de este modelo :

 * @property Availability_state $availability_state
 * @property Housing $housing
 * @property Usuario $usuario
 */

class Housing_availability extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'housing_availability';
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
			[['description_housing_availability','date_start','id_usuario'],'required'],
			[['id_housing_availability','id_availability_state','id_housing','id_usuario'],'integer'],
			[['date_start','date_end'],'safe'],
			[['description_housing_availability'], 'string', 'max'=>2147483647],
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
	     'id_housing_availability'=>'Id Housing Availability',
	     'description_housing_availability'=>'Description Housing Availability',
	     'date_start'=>'Date Start',
	     'date_end'=>'Date End',
	     'id_availability_state'=>'Id Availability State',
	     'id_housing'=>'Id Housing',
	     'id_usuario'=>'Id Usuario',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getAvailability_state()
		{
			return $this->hasOne(Availability_state::className(), ['id_availability_state' => 'id_availability_state']);
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
	  public function getUsuario()
		{
			return $this->hasOne(Usuario::className(), ['id_usuario' => 'id_usuario']);
		}

 	 /**
     * @inheritdoc
     * @return Housing_availabilityQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Housing_availabilityQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Housing_availability::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Housing_availability::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
