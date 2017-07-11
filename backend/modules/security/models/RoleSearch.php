<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 23 16:48:09 EDT 2016*/

namespace backend\modules\security\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * RoleSearch representa la clase busqueda del modeloRole
 */
class RoleSearch extends Role{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_role'],'integer'],
			[['name_role'],'safe'],
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
        $query = Role::find();
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
            'id_role' => $this->id_role,
            'name_role' => $this->name_role
        ]);

        $query->andFilterWhere(['like', 'id_role', $this->id_role])
            ->andFilterWhere(['like', 'name_role', $this->name_role]);
        return $dataProvider;
    }
}
