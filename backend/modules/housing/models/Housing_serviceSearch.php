<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:35 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * Housing_serviceSearch representa la clase busqueda del modeloHousing_service
 */
class Housing_serviceSearch extends Housing_service{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_service'],'integer'],
			[['name_service','description_service'],'safe'],
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
        $query = Housing_service::find();
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
            'id_service' => $this->id_service,
            'name_service' => $this->name_service,
            'description_service' => $this->description_service
        ]);

        $query->andFilterWhere(['like', 'id_service', $this->id_service])
            ->andFilterWhere(['like', 'name_service', $this->name_service])
            ->andFilterWhere(['like', 'description_service', $this->description_service]);
        return $dataProvider;
    }
}
