<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon Jun 06 13:39:34 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * Housing_season_priceSearch representa la clase busqueda del modeloHousing_season_price
 */
class Housing_season_priceSearch extends Housing_season_price{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_housing_season_price','id_housing','id_season','id_coin_type'],'integer'],
			[['price_housing_season','comition','cretedat','comition_for_publicitiy','date_start_publicity','date_end_publicity','booking_deposit','date_start','date_end'],'safe'],
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
        $query = Housing_season_price::find();
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
            'id_housing_season_price' => $this->id_housing_season_price,
            'price_housing_season' => $this->price_housing_season,
            'comition' => $this->comition,
            'cretedat' => $this->cretedat,
            'id_housing' => $this->id_housing,
            'id_season' => $this->id_season,
            'id_coin_type' => $this->id_coin_type,
            'comition_for_publicitiy' => $this->comition_for_publicitiy,
            'date_start_publicity' => $this->date_start_publicity,
            'date_end_publicity' => $this->date_end_publicity,
            'booking_deposit' => $this->booking_deposit,
            'date_start' => $this->date_start,
            'date_end' => $this->date_end
        ]);

        $query->andFilterWhere(['like', 'id_housing_season_price', $this->id_housing_season_price])
            ->andFilterWhere(['like', 'price_housing_season', $this->price_housing_season])
            ->andFilterWhere(['like', 'comition', $this->comition])
            ->andFilterWhere(['like', 'cretedat', $this->cretedat])
            ->andFilterWhere(['like', 'id_housing', $this->id_housing])
            ->andFilterWhere(['like', 'id_season', $this->id_season])
            ->andFilterWhere(['like', 'id_coin_type', $this->id_coin_type])
            ->andFilterWhere(['like', 'comition_for_publicitiy', $this->comition_for_publicitiy])
            ->andFilterWhere(['like', 'date_start_publicity', $this->date_start_publicity])
            ->andFilterWhere(['like', 'date_end_publicity', $this->date_end_publicity])
            ->andFilterWhere(['like', 'booking_deposit', $this->booking_deposit])
            ->andFilterWhere(['like', 'date_start', $this->date_start])
            ->andFilterWhere(['like', 'date_end', $this->date_end]);
        return $dataProvider;
    }
}
