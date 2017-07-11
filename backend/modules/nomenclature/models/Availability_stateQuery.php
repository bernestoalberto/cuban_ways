<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Wed May 25 11:59:12 EDT 2016*/

namespace backend\modules\nomenclature\models;


/** 
*  Esta es  ActiveQuery clase de [[Availability_state]].
 *
 * @see Availability_state
 */
/**
 * Availability_stateQuery representa la clase de Consulta del modeloAvailability_state
 */
class Availability_stateQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Availability_state[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Availability_state|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
