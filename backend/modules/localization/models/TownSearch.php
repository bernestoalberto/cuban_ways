<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:30 GMT-05:00 2016*/

namespace backend\modules\localization\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * TownSearch representa la clase busqueda del modeloTown
 */
class TownSearch extends Town{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_town','id_province'],'integer'],
			[['name_town'],'safe'],
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
        $query = Town::find();
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
            'id_town' => $this->id_town,
            'name_town' => $this->name_town,
            'id_province' => $this->id_province
        ]);

        $query->andFilterWhere(['like', 'id_town', $this->id_town])
            ->andFilterWhere(['like', 'name_town', $this->name_town])
            ->andFilterWhere(['like', 'id_province', $this->id_province]);
        return $dataProvider;
    }
}
