<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:34 GMT-05:00 2016*/

namespace backend\modules\housing\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * Slip_for_rentSearch representa la clase busqueda del modeloSlip_for_rent
 */
class Slip_for_rentSearch extends Slip_for_rent{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_slip_for_rent','id_housing','id_usuario'],'integer'],
			[['code_slip_for_rent','description_slip_for_rent','createdat'],'safe'],
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
        $query = Slip_for_rent::find();
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
            'id_slip_for_rent' => $this->id_slip_for_rent,
            'code_slip_for_rent' => $this->code_slip_for_rent,
            'description_slip_for_rent' => $this->description_slip_for_rent,
            'createdat' => $this->createdat,
            'id_housing' => $this->id_housing,
            'id_usuario' => $this->id_usuario
        ]);

        $query->andFilterWhere(['like', 'id_slip_for_rent', $this->id_slip_for_rent])
            ->andFilterWhere(['like', 'code_slip_for_rent', $this->code_slip_for_rent])
            ->andFilterWhere(['like', 'description_slip_for_rent', $this->description_slip_for_rent])
            ->andFilterWhere(['like', 'createdat', $this->createdat])
            ->andFilterWhere(['like', 'id_housing', $this->id_housing])
            ->andFilterWhere(['like', 'id_usuario', $this->id_usuario]);
        return $dataProvider;
    }
}
