<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon Jun 06 13:39:34 GMT-05:00 2016*/

namespace backend\modules\housing\models;


/** 
*  Esta es  ActiveQuery clase de [[Housing_season_price]].
 *
 * @see Housing_season_price
 */
/**
 * Housing_season_priceQuery representa la clase de Consulta del modeloHousing_season_price
 */
class Housing_season_priceQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Housing_season_price[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Housing_season_price|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
