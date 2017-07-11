<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 23 16:48:09 EDT 2016*/

namespace backend\modules\security\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla role.
 *
 * Los siguientes son los campos de la tabla 'role':

 * @property integer $id_role
 * @property string $name_role

 * Los siguientes son las relaciones de este modelo :

 * @property Permission[] $arraypermission
 * @property Usuario[] $arrayusuario
 */

class Role extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'role';
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
			[['name_role'],'required'],
			[['id_role'],'integer'],
			[['name_role'], 'string', 'max'=>100],
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
	     'id_role'=>'Id Role',
	     'name_role'=>'Name Role',
		];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArraypermission()
		{
			return $this->hasMany(Permission::className(), ['id_role' => 'id_role']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayusuario()
		{
			return $this->hasMany(Usuario::className(), ['id_role' => 'id_role']);
		}

 	 /**
     * @inheritdoc
     * @return RoleQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new RoleQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Role::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Role::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
