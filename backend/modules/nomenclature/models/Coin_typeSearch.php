<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Wed May 25 11:59:12 EDT 2016*/

namespace backend\modules\nomenclature\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * Coin_typeSearch representa la clase busqueda del modeloCoin_type
 */
class Coin_typeSearch extends Coin_type{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_coin_type'],'integer'],
			[['name_coin','abbrv_coin'],'safe'],
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
        $query = Coin_type::find();
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
            'id_coin_type' => $this->id_coin_type,
            'name_coin' => $this->name_coin,
            'abbrv_coin' => $this->abbrv_coin
        ]);

        $query->andFilterWhere(['like', 'id_coin_type', $this->id_coin_type])
            ->andFilterWhere(['like', 'name_coin', $this->name_coin])
            ->andFilterWhere(['like', 'abbrv_coin', $this->abbrv_coin]);
        return $dataProvider;
    }
}
