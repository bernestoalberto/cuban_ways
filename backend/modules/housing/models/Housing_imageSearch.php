<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:35 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * Housing_imageSearch representa la clase busqueda del modeloHousing_image
 */
class Housing_imageSearch extends Housing_image{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_housing_image','id_housing'],'integer'],
			[['image'],'safe'],
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
        $query = Housing_image::find();
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
            'id_housing_image' => $this->id_housing_image,
            'image' => $this->image,
            'id_housing' => $this->id_housing
        ]);

        $query->andFilterWhere(['like', 'id_housing_image', $this->id_housing_image])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'id_housing', $this->id_housing]);
        return $dataProvider;
    }
}
