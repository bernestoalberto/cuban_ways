<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 23 16:48:09 EDT 2016*/

namespace backend\modules\security\models;


/** 
*  Esta es  ActiveQuery clase de [[Role]].
 *
 * @see Role
 */
/**
 * RoleQuery representa la clase de Consulta del modeloRole
 */
class RoleQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Role[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Role|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
