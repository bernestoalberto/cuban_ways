<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 23 16:48:09 EDT 2016*/

namespace backend\modules\security\models;
use common\models\User;
use Yii;

/** 
 * Este es la clase modelo para la tabla usuario.
 *
 * Los siguientes son los campos de la tabla 'usuario':

 * @property integer $id_usuario
 * @property string $username
 * @property string $pass
 * @property string $word_pass
 * @property string $email
 * @property string $foto
 * @property string $auth_key
 * @property integer $active
 * @property date $created_at
 * @property date $updated_at
 * @property string $type_user
 * @property string $state
 * @property integer $id_role


 * Los siguientes son las relaciones de este modelo :


 * @property Role $role
 * @property Housing_availability[] $arrayhousing_availability
 * @property Slip_for_rent[] $arrayslip_for_rent
 */

class Usuario extends User
{

	/** 
	 * @return string the associated database table name
	 */
	/**
     * @inheritdoc 
     */
	public static function tableName()
	{
		return 'usuario';
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
			[['username','pass','word_pass','email','state','id_role'],'required'],
			[['id_usuario','active','id_role','id_owner'],'integer'],
			[['username','email'], 'string', 'max'=>45],
			[['pass','auth_key','type_user'], 'string', 'max'=>255],
			[['word_pass'], 'string', 'max'=>100],
			[['foto'], 'string', 'max'=>150],
			[['state'], 'string', 'max'=>20],
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
	     'id_usuario'=>'Id Usuario',
	     'username'=>'Username',
	     'pass'=>'Pass',
	     'word_pass'=>'Word Pass',
	     'email'=>'Email',
	     'foto'=>'Foto',
	     'auth_key'=>'Auth Key',
	     'active'=>'Active',
	     'created_at'=>'Created At',
	     'updated_at'=>'Updated At',
	     'type_user'=>'Type User',
	     'state'=>'State',
	     'id_role'=>'Id Role',
	   ];
	}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getRole()
		{
			return $this->hasOne(Role::className(), ['id_role' => 'id_role']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayhousing_availability()
		{
			return $this->hasMany(Housing_availability::className(), ['id_usuario' => 'id_usuario']);
		}

	 /**
     * @return \yii\db\ActiveQuery
     */
	  public function getArrayslip_for_rent()
		{
			return $this->hasMany(Slip_for_rent::className(), ['id_usuario' => 'id_usuario']);
		}

 	 /**
     * @inheritdoc
     * @return UsuarioQuery the active query used by this AR class.
     */
    	public static function find()
    	{
        return new UsuarioQuery(get_called_class());
    	}
/** 
*  Function to find by unique parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findByUK($condition)	{

		$query=Usuario::find()->where($condition);
		return $query->asArray()->one();
	
	}
/** 
*  Function to find all by parameters.
   @parameters  Array of each value on the unique Key*
 */
	public  static function findAllByCondition($condition)	{

		$query=Usuario::find()->where($condition);
		return $query->asArray();
	
	}

    public function validatePassword($password)
    {
//       return Yii::$app->security->validatePassword($password, $this->password_hash);
        return $password==$this->pass;
    }


    public  static function findByUsername($username)
    {
        $condition=  array(
            'username'=>$username,
            'active'=>1
        );
        $query=Usuario::find()->where($condition)->join('INNER JOIN','role','role.id_role=usuario.id_role');
//        $query->where('role.name_role="Administrador"');
        $usuario=$query->asArray()->one();
        if($usuario!=null) {
            $user= new Usuario();
            $user->setAttributes($usuario);
            $user->setAttribute('id_usuario',$usuario['id_usuario']);
            $user->oldAttributes=$usuario;
            return $user;
        }
        return null;

    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id_usuario' => $id]);
    }
    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
}
 ?>
