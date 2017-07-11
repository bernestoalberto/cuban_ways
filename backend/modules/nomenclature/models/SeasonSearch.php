<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 11:07:04 GMT-05:00 2016*/

namespace backend\modules\nomenclature\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * SeasonSearch representa la clase busqueda del modeloSeason
 */
class SeasonSearch extends Season{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_season'],'integer'],
			[['name_season'],'safe'],
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
        $query = Season::find();
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
            'id_season' => $this->id_season,
            'name_season' => $this->name_season
        ]);

        $query->andFilterWhere(['like', 'id_season', $this->id_season])
            ->andFilterWhere(['like', 'name_season', $this->name_season]);
        return $dataProvider;
    }
}
