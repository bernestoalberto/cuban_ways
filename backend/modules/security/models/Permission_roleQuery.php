<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:27 GMT-05:00 2016*/

namespace backend\modules\security\models;


/** 
*  Esta es  ActiveQuery clase de [[Permission_role]].
 *
 * @see Permission_role
 */
/**
 * Permission_roleQuery representa la clase de Consulta del modeloPermission_role
 */
class Permission_roleQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Permission_role[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Permission_role|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
