<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:34 GMT-05:00 2016*/

namespace backend\modules\housing\models;


/** 
*  Esta es  ActiveQuery clase de [[Slip_for_rent]].
 *
 * @see Slip_for_rent
 */
/**
 * Slip_for_rentQuery representa la clase de Consulta del modeloSlip_for_rent
 */
class Slip_for_rentQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Slip_for_rent[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Slip_for_rent|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
