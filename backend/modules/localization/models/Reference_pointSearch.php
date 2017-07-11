<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 12:22:46 GMT-05:00 2016*/

namespace backend\modules\localization\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * Reference_pointSearch representa la clase busqueda del modeloReference_point
 */
class Reference_pointSearch extends Reference_point{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_reference_point'],'integer'],
			[['name_reference_point','latitude','length','image'],'safe'],
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
        $query = Reference_point::find();
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
            'id_reference_point' => $this->id_reference_point,
            'name_reference_point' => $this->name_reference_point,
            'latitude' => $this->latitude,
            'length' => $this->length,
            'image' => $this->image
        ]);

        $query->andFilterWhere(['like', 'id_reference_point', $this->id_reference_point])
            ->andFilterWhere(['like', 'name_reference_point', $this->name_reference_point])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'length', $this->length])
            ->andFilterWhere(['like', 'image', $this->image]);
        return $dataProvider;
    }
}
