<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:33 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * Housing_availabilitySearch representa la clase busqueda del modeloHousing_availability
 */
class Housing_availabilitySearch extends Housing_availability{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_housing_availability','id_availability_state','id_housing','id_usuario'],'integer'],
			[['description_housing_availability','date_start','date_end'],'safe'],
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
        $query = Housing_availability::find();
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
            'id_housing_availability' => $this->id_housing_availability,
            'description_housing_availability' => $this->description_housing_availability,
            'date_start' => $this->date_start,
            'date_end' => $this->date_end,
            'id_availability_state' => $this->id_availability_state,
            'id_housing' => $this->id_housing,
            'id_usuario' => $this->id_usuario
        ]);

        $query->andFilterWhere(['like', 'id_housing_availability', $this->id_housing_availability])
            ->andFilterWhere(['like', 'description_housing_availability', $this->description_housing_availability])
            ->andFilterWhere(['like', 'date_start', $this->date_start])
            ->andFilterWhere(['like', 'date_end', $this->date_end])
            ->andFilterWhere(['like', 'id_availability_state', $this->id_availability_state])
            ->andFilterWhere(['like', 'id_housing', $this->id_housing])
            ->andFilterWhere(['like', 'id_usuario', $this->id_usuario]);
        return $dataProvider;
    }
}
