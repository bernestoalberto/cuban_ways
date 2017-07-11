<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Wed May 25 11:59:12 EDT 2016*/

namespace backend\modules\localization\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * ContinentSearch representa la clase busqueda del modeloContinent
 */
class ContinentSearch extends Continent{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_continent'],'integer'],
			[['name_continent'],'safe'],
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
        $query = Continent::find();
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
            'id_continent' => $this->id_continent,
            'name_continent' => $this->name_continent
        ]);

        $query->andFilterWhere(['like', 'id_continent', $this->id_continent])
            ->andFilterWhere(['like', 'name_continent', $this->name_continent]);
        return $dataProvider;
    }
}
