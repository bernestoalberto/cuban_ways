<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Wed May 25 11:59:12 EDT 2016*/

namespace backend\modules\nomenclature\models;


/** 
*  Esta es  ActiveQuery clase de [[Coin_type]].
 *
 * @see Coin_type
 */
/**
 * Coin_typeQuery representa la clase de Consulta del modeloCoin_type
 */
class Coin_typeQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Coin_type[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Coin_type|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
