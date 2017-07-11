<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:34 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * Service_housingSearch representa la clase busqueda del modeloService_housing
 */
class Service_housingSearch extends Service_housing{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_service_housing','id_service','id_housing'],'integer'],
			[['price','canceled'],'safe'],
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
        $query = Service_housing::find();
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
            'id_service_housing' => $this->id_service_housing,
            'price' => $this->price,
            'canceled' => $this->canceled,
            'id_service' => $this->id_service,
            'id_housing' => $this->id_housing
        ]);

        $query->andFilterWhere(['like', 'id_service_housing', $this->id_service_housing])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'canceled', $this->canceled])
            ->andFilterWhere(['like', 'id_service', $this->id_service])
            ->andFilterWhere(['like', 'id_housing', $this->id_housing]);
        return $dataProvider;
    }
}
