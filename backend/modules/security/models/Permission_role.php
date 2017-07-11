<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:27 GMT-05:00 2016*/

namespace backend\modules\security\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla permission_role.
 *
 * Los siguientes son los campos de la tabla 'permission_role':

 * @property integer $id_permission_role
 * @property integer $id_role
 * @property integer $id_permission

 * Los siguientes son las relaciones de este modelo :

 * @property Permission $permission
 * @property Role $role
 */

class Permission_role extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'permission_role';
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
			[['id_role','id_permission'],'required'],
			[['id_permission_role','id_role','id_permission'],'integer'],
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
	     'id_permission_role'=>'Id Permission Role',
	     'id_role'=>'Id Role',
	     'id_permission'=>'Id Permission',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getPermission()
		{
			return $this->hasOne(Permission::className(), ['id_permission' => 'id_permission']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getRole()
		{
			return $this->hasOne(Role::className(), ['id_role' => 'id_role']);
		}

 	 /**
     * @inheritdoc
     * @return Permission_roleQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new Permission_roleQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Permission_role::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Permission_role::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
