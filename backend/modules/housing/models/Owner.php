<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:50 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla owner.
 *
 * Los siguientes son los campos de la tabla 'owner':

 * @property integer $id_owner
 * @property string $name_owner
 * @property string $lastname_owner
 * @property date $datebirth
 * @property string $email
 * @property string $phone
 * @property date $createdat
 * @property string $identification
 * @property string $name_owner_incharge
 * @property string $lastname_owner_incharge
 * @property string $bank_account
 * @property string $photo

 * Los siguientes son las relaciones de este modelo :

 * @property Housing[] $arrayhousing
 * @property Owner_user[] $arrayowner_user
 * @property Usuario[] $arrayusuario
 * @property Usuario[] $arrayusuario
 */

class Owner extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'owner';
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
			[['name_owner','lastname_owner','email','phone','createdat','identification'],'required'],
			[['id_owner'],'integer'],
			[['datebirth','createdat'],'safe'],
			[['name_owner','lastname_owner','email','phone','name_owner_incharge','lastname_owner_incharge'], 'string', 'max'=>100],
			[['identification'], 'string', 'max'=>15],
			[['bank_account'], 'string', 'max'=>50],
			[['photo'], 'string', 'max'=>150],
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
	     'id_owner'=>'Id Owner',
	     'name_owner'=>'Name Owner',
	     'lastname_owner'=>'Lastname Owner',
	     'datebirth'=>'Datebirth',
	     'email'=>'Email',
	     'phone'=>'Phone',
	     'createdat'=>'Createdat',
	     'identification'=>'Identification',
	     'name_owner_incharge'=>'Name Owner Incharge',
	     'lastname_owner_incharge'=>'Lastname Owner Incharge',
	     'bank_account'=>'Bank Account',
	     'photo'=>'Photo',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing()
		{
			return $this->hasMany(Housing::className(), ['id_owner' => 'id_owner']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayowner_user()
		{
			return $this->hasMany(Owner_user::className(), ['id_owner' => 'id_owner']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayusuario()
		{
			return $this->hasMany(Usuario::className(), ['id_usuario' => 'id_usuario'])->viaTable(Owner_user::className(), ['id_owner' => 'id_owner']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayusuario()
		{
			return $this->hasMany(Usuario::className(), ['id_owner' => 'id_owner']);
		}

 	 /**
     * @inheritdoc
     * @return OwnerQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new OwnerQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Owner::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Owner::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
