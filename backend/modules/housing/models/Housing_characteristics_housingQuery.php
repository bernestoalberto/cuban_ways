<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:28 GMT-05:00 2016*/

namespace backend\modules\housing\models;


/** 
*  Esta es  ActiveQuery clase de [[Housing_characteristics_housing]].
 *
 * @see Housing_characteristics_housing
 */
/**
 * Housing_characteristics_housingQuery representa la clase de Consulta del modeloHousing_characteristics_housing
 */
class Housing_characteristics_housingQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Housing_characteristics_housing[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Housing_characteristics_housing|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
