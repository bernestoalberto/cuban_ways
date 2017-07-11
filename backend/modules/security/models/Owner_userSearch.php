<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:27 GMT-05:00 2016*/

namespace backend\modules\security\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * Owner_userSearch representa la clase busqueda del modeloOwner_user
 */
class Owner_userSearch extends Owner_user{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_owner_user','id_owner','id_usuario'],'integer'],
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
        $query = Owner_user::find();
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
            'id_owner_user' => $this->id_owner_user,
            'id_owner' => $this->id_owner,
            'id_usuario' => $this->id_usuario
        ]);

        $query->andFilterWhere(['like', 'id_owner_user', $this->id_owner_user])
            ->andFilterWhere(['like', 'id_owner', $this->id_owner])
            ->andFilterWhere(['like', 'id_usuario', $this->id_usuario]);
        return $dataProvider;
    }
}
