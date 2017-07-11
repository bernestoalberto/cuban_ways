<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:50 GMT-05:00 2016*/

namespace backend\modules\housing\models;


/** 
*  Esta es  ActiveQuery clase de [[Owner]].
 *
 * @see Owner
 */
/**
 * OwnerQuery representa la clase de Consulta del modeloOwner
 */
class OwnerQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Owner[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Owner|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
