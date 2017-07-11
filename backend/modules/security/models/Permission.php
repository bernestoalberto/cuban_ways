<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 17:46:39 GMT-05:00 2016*/

namespace backend\modules\security\models;

use Yii;

/** 
 * Este es la clase modelo para la tabla permission.
 *
 * Los siguientes son los campos de la tabla 'permission':

 * @property integer $id_permission
 * @property string $name_permission
 * @property string $url

 * Los siguientes son las relaciones de este modelo :

 */

class Permission extends \yii\db\ActiveRecord
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'permission';
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
			[['name_permission','url'],'required'],
			[['id_permission'],'integer'],
			[['name_permission','url'], 'string', 'max'=>100],
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
	     'id_permission'=>'Id Permission',
	     'name_permission'=>'Name Permission',
	     'url'=>'Url',
		];
	}

 	 /**
     * @inheritdoc
     * @return PermissionQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new PermissionQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Permission::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Permission::find()->where($condition);
		return $query->asArray();
	
	}
}
 ?>
