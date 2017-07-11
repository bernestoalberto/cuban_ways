<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:34 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla slip_for_rent.
 *
 * Los siguientes son los campos de la tabla 'slip_for_rent':

 * @property integer $id_slip_for_rent
 * @property string $code_slip_for_rent
 * @property string $description_slip_for_rent
 * @property date $createdat
 * @property integer $id_housing
 * @property integer $id_usuario

 * Los siguientes son las relaciones de este modelo :

 * @property Housing $housing
 * @property Usuario $usuario
 */

class Slip_for_rent extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'slip_for_rent';
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
			[['code_slip_for_rent','description_slip_for_rent','createdat','id_housing','id_usuario'],'required'],
			[['id_slip_for_rent','id_housing','id_usuario'],'integer'],
			[['createdat'],'safe'],
			[['code_slip_for_rent'], 'string', 'max'=>100],
			[['description_slip_for_rent'], 'string', 'max'=>2147483647],
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
	     'id_slip_for_rent'=>'Id Slip For Rent',
	     'code_slip_for_rent'=>'Code Slip For Rent',
	     'description_slip_for_rent'=>'Description Slip For Rent',
	     'createdat'=>'Createdat',
	     'id_housing'=>'Id Housing',
	     'id_usuario'=>'Id Usuario',
		];
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
     * @return Slip_for_rentQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Slip_for_rentQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Slip_for_rent::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Slip_for_rent::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
