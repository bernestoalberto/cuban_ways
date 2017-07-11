<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:33 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * HousingSearch representa la clase busqueda del modeloHousing
 */
class HousingSearch extends Housing{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_housing','id_housing_type','id_housing_state_rent','id_housing_address','id_owner'],'integer'],
			[['name_housing','keywords_housing','announce','description','createdat'],'safe'],
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
        $query = Housing::find();
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
            'id_housing' => $this->id_housing,
            'name_housing' => $this->name_housing,
            'keywords_housing' => $this->keywords_housing,
            'announce' => $this->announce,
            'description' => $this->description,
            'id_housing_type' => $this->id_housing_type,
            'id_housing_state_rent' => $this->id_housing_state_rent,
            'createdat' => $this->createdat,
            'id_housing_address' => $this->id_housing_address,
            'id_owner' => $this->id_owner
        ]);

        $query->andFilterWhere(['like', 'id_housing', $this->id_housing])
            ->andFilterWhere(['like', 'name_housing', $this->name_housing])
            ->andFilterWhere(['like', 'keywords_housing', $this->keywords_housing])
            ->andFilterWhere(['like', 'announce', $this->announce])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'id_housing_type', $this->id_housing_type])
            ->andFilterWhere(['like', 'id_housing_state_rent', $this->id_housing_state_rent])
            ->andFilterWhere(['like', 'createdat', $this->createdat])
            ->andFilterWhere(['like', 'id_housing_address', $this->id_housing_address])
            ->andFilterWhere(['like', 'id_owner', $this->id_owner]);
        return $dataProvider;
    }
}
