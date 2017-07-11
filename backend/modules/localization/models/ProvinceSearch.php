<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:30 GMT-05:00 2016*/

namespace backend\modules\localization\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * ProvinceSearch representa la clase busqueda del modeloProvince
 */
class ProvinceSearch extends Province{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_province','id_country'],'integer'],
			[['name_province'],'safe'],
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
        $query = Province::find();
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
            'id_province' => $this->id_province,
            'name_province' => $this->name_province,
            'id_country' => $this->id_country
        ]);

        $query->andFilterWhere(['like', 'id_province', $this->id_province])
            ->andFilterWhere(['like', 'name_province', $this->name_province])
            ->andFilterWhere(['like', 'id_country', $this->id_country]);
        return $dataProvider;
    }
}
