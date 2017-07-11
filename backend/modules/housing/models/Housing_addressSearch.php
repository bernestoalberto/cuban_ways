<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:49 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * Housing_addressSearch representa la clase busqueda del modeloHousing_address
 */
class Housing_addressSearch extends Housing_address{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_housing_address','id_town'],'integer'],
			[['length','latitude','number_housing','main_street','between_first','between_second'],'safe'],
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
        $query = Housing_address::find();
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
            'id_housing_address' => $this->id_housing_address,
            'id_town' => $this->id_town,
            'length' => $this->length,
            'latitude' => $this->latitude,
            'number_housing' => $this->number_housing,
            'main_street' => $this->main_street,
            'between_first' => $this->between_first,
            'between_second' => $this->between_second
        ]);

        $query->andFilterWhere(['like', 'id_housing_address', $this->id_housing_address])
            ->andFilterWhere(['like', 'id_town', $this->id_town])
            ->andFilterWhere(['like', 'length', $this->length])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'number_housing', $this->number_housing])
            ->andFilterWhere(['like', 'main_street', $this->main_street])
            ->andFilterWhere(['like', 'between_first', $this->between_first])
            ->andFilterWhere(['like', 'between_second', $this->between_second]);
        return $dataProvider;
    }
}
