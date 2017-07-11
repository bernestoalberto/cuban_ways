<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Wed Jun 01 22:39:38 CDT 2016*/

namespace backend\modules\security\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * UsuarioSearch representa la clase busqueda del modeloUsuario
 */
class UsuarioSearch extends Usuario{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_usuario','active','id_role'],'integer'],
			[['username','pass','word_pass','email','foto','auth_key','created_at','updated_at','type_user','state'],'safe'],
 		];
 	}

  	 /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }


	 /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider

     */

    public function search($params)
    {
        $query = Usuario::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');

           return $dataProvider;
        }

        $query->andFilterWhere([
            'id_usuario' => $this->id_usuario,
            'username' => $this->username,
            'pass' => $this->pass,
            'word_pass' => $this->word_pass,
            'email' => $this->email,
            'foto' => $this->foto,
            'auth_key' => $this->auth_key,
            'active' => $this->active,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'type_user' => $this->type_user,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'id_usuario', $this->id_usuario])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'pass', $this->pass])
            ->andFilterWhere(['like', 'word_pass', $this->word_pass])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'active', $this->active])
            ->andFilterWhere(['like', 'created_at', $this->created_at])
            ->andFilterWhere(['like', 'updated_at', $this->updated_at])
            ->andFilterWhere(['like', 'type_user', $this->type_user])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'id_role', $this->id_role]);
        return $dataProvider;
    }
}
