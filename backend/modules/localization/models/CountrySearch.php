<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Wed May 25 11:59:12 EDT 2016*/

namespace backend\modules\localization\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * CountrySearch representa la clase busqueda del modeloCountry
 */
class CountrySearch extends Country{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_country','prefix','id_continent'],'integer'],
			[['name_country','ie_code_country','code_country','subcontinent','iso_money','money_name'],'safe'],
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
        $query = Country::find();
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
            'id_country' => $this->id_country,
            'name_country' => $this->name_country,
            'ie_code_country' => $this->ie_code_country,
            'code_country' => $this->code_country,
            'prefix' => $this->prefix,
            'id_continent' => $this->id_continent,
            'subcontinent' => $this->subcontinent,
            'iso_money' => $this->iso_money,
            'money_name' => $this->money_name
        ]);

        $query->andFilterWhere(['like', 'id_country', $this->id_country])
            ->andFilterWhere(['like', 'name_country', $this->name_country])
            ->andFilterWhere(['like', 'ie_code_country', $this->ie_code_country])
            ->andFilterWhere(['like', 'code_country', $this->code_country])
            ->andFilterWhere(['like', 'prefix', $this->prefix])
            ->andFilterWhere(['like', 'id_continent', $this->id_continent])
            ->andFilterWhere(['like', 'subcontinent', $this->subcontinent])
            ->andFilterWhere(['like', 'iso_money', $this->iso_money])
            ->andFilterWhere(['like', 'money_name', $this->money_name]);
        return $dataProvider;
    }
}
