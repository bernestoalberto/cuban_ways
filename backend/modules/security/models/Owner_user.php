<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:27 GMT-05:00 2016*/

namespace backend\modules\security\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla owner_user.
 *
 * Los siguientes son los campos de la tabla 'owner_user':

 * @property integer $id_owner_user
 * @property integer $id_owner
 * @property integer $id_usuario

 * Los siguientes son las relaciones de este modelo :

 * @property Owner $owner
 * @property Usuario $usuario
 */

class Owner_user extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'owner_user';
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
			[['id_owner','id_usuario'],'required'],
			[['id_owner_user','id_owner','id_usuario'],'integer'],
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
	     'id_owner_user'=>'Id Owner User',
	     'id_owner'=>'Id Owner',
	     'id_usuario'=>'Id Usuario',
		];
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
	  public function getUsuario()
		{
			return $this->hasOne(Usuario::className(), ['id_usuario' => 'id_usuario']);
		}

 	 /**
     * @inheritdoc
     * @return Owner_userQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Owner_userQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Owner_user::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Owner_user::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
