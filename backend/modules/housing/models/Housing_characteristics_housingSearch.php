<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:28 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * Housing_characteristics_housingSearch representa la clase busqueda del modeloHousing_characteristics_housing
 */
class Housing_characteristics_housingSearch extends Housing_characteristics_housing{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_housing_characteristics','id_housing','count_housing_characteristics','id_housing_characteristics_housing'],'integer'],
			[['cancelled'],'safe'],
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
        $query = Housing_characteristics_housing::find();
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
            'id_housing_characteristics' => $this->id_housing_characteristics,
            'id_housing' => $this->id_housing,
            'count_housing_characteristics' => $this->count_housing_characteristics,
            'cancelled' => $this->cancelled,
            'id_housing_characteristics_housing' => $this->id_housing_characteristics_housing
        ]);

        $query->andFilterWhere(['like', 'id_housing_characteristics', $this->id_housing_characteristics])
            ->andFilterWhere(['like', 'id_housing', $this->id_housing])
            ->andFilterWhere(['like', 'count_housing_characteristics', $this->count_housing_characteristics])
            ->andFilterWhere(['like', 'cancelled', $this->cancelled])
            ->andFilterWhere(['like', 'id_housing_characteristics_housing', $this->id_housing_characteristics_housing]);
        return $dataProvider;
    }
}
