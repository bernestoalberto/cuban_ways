<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:50 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * OwnerSearch representa la clase busqueda del modeloOwner
 */
class OwnerSearch extends Owner{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_owner'],'integer'],
			[['name_owner','lastname_owner','datebirth','email','phone','createdat','identification','name_owner_incharge','lastname_owner_incharge','bank_account','photo'],'safe'],
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
        $query = Owner::find();
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
            'id_owner' => $this->id_owner,
            'name_owner' => $this->name_owner,
            'lastname_owner' => $this->lastname_owner,
            'datebirth' => $this->datebirth,
            'email' => $this->email,
            'phone' => $this->phone,
            'createdat' => $this->createdat,
            'identification' => $this->identification,
            'name_owner_incharge' => $this->name_owner_incharge,
            'lastname_owner_incharge' => $this->lastname_owner_incharge,
            'bank_account' => $this->bank_account,
            'photo' => $this->photo
        ]);

        $query->andFilterWhere(['like', 'id_owner', $this->id_owner])
            ->andFilterWhere(['like', 'name_owner', $this->name_owner])
            ->andFilterWhere(['like', 'lastname_owner', $this->lastname_owner])
            ->andFilterWhere(['like', 'datebirth', $this->datebirth])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'createdat', $this->createdat])
            ->andFilterWhere(['like', 'identification', $this->identification])
            ->andFilterWhere(['like', 'name_owner_incharge', $this->name_owner_incharge])
            ->andFilterWhere(['like', 'lastname_owner_incharge', $this->lastname_owner_incharge])
            ->andFilterWhere(['like', 'bank_account', $this->bank_account])
            ->andFilterWhere(['like', 'photo', $this->photo]);
        return $dataProvider;
    }
}
