<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:30 GMT-05:00 2016*/

namespace backend\modules\localization\models;


/** 
*  Esta es  ActiveQuery clase de [[Town]].
 *
 * @see Town
 */
/**
 * TownQuery representa la clase de Consulta del modeloTown
 */
class TownQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Town[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Town|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
