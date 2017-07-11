<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Wed May 25 11:59:12 EDT 2016*/

namespace backend\modules\nomenclature\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * Availability_stateSearch representa la clase busqueda del modeloAvailability_state
 */
class Availability_stateSearch extends Availability_state{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_availability_state'],'integer'],
			[['availability_state'],'safe'],
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
        $query = Availability_state::find();
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
            'id_availability_state' => $this->id_availability_state,
            'availability_state' => $this->availability_state
        ]);

        $query->andFilterWhere(['like', 'id_availability_state', $this->id_availability_state])
            ->andFilterWhere(['like', 'availability_state', $this->availability_state]);
        return $dataProvider;
    }
}
