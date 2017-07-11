<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 17:46:39 GMT-05:00 2016*/

namespace backend\modules\security\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;



/**
 * PermissionSearch representa la clase busqueda del modeloPermission
 */
class PermissionSearch extends Permission{

	/**
	 * @return array validation rules for model attributes.
	 */	/**
     * @inheritdoc 
     */

	public function rules()
	{
	
		return [
			[['id_permission'],'integer'],
			[['name_permission','url'],'safe'],
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
        $query = Permission::find();
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
            'id_permission' => $this->id_permission,
            'name_permission' => $this->name_permission,
            'url' => $this->url
        ]);

        $query->andFilterWhere(['like', 'id_permission', $this->id_permission])
            ->andFilterWhere(['like', 'name_permission', $this->name_permission])
            ->andFilterWhere(['like', 'url', $this->url]);
        return $dataProvider;
    }
}
