<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:27 GMT-05:00 2016*/

namespace backend\modules\security\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * Permission_roleSearch representa la clase busqueda del modeloPermission_role
 */
class Permission_roleSearch extends Permission_role{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_permission_role','id_role','id_permission'],'integer'],
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
        $query = Permission_role::find();
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
            'id_permission_role' => $this->id_permission_role,
            'id_role' => $this->id_role,
            'id_permission' => $this->id_permission
        ]);

        $query->andFilterWhere(['like', 'id_permission_role', $this->id_permission_role])
            ->andFilterWhere(['like', 'id_role', $this->id_role])
            ->andFilterWhere(['like', 'id_permission', $this->id_permission]);
        return $dataProvider;
    }
}
