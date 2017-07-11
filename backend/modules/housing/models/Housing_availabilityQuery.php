<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:33 GMT-05:00 2016*/

namespace backend\modules\housing\models;


/** 
*  Esta es  ActiveQuery clase de [[Housing_availability]].
 *
 * @see Housing_availability
 */
/**
 * Housing_availabilityQuery representa la clase de Consulta del modeloHousing_availability
 */
class Housing_availabilityQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Housing_availability[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Housing_availability|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
