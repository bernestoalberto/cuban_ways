<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:27 GMT-05:00 2016*/

namespace backend\modules\security\models;


/** 
*  Esta es  ActiveQuery clase de [[Owner_user]].
 *
 * @see Owner_user
 */
/**
 * Owner_userQuery representa la clase de Consulta del modeloOwner_user
 */
class Owner_userQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Owner_user[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Owner_user|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
