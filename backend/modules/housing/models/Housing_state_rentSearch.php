<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:34 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * Housing_state_rentSearch representa la clase busqueda del modeloHousing_state_rent
 */
class Housing_state_rentSearch extends Housing_state_rent{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_housing_state_rent'],'integer'],
			[['name_housing_state_rent'],'safe'],
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
        $query = Housing_state_rent::find();
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
            'id_housing_state_rent' => $this->id_housing_state_rent,
            'name_housing_state_rent' => $this->name_housing_state_rent
        ]);

        $query->andFilterWhere(['like', 'id_housing_state_rent', $this->id_housing_state_rent])
            ->andFilterWhere(['like', 'name_housing_state_rent', $this->name_housing_state_rent]);
        return $dataProvider;
    }
}
