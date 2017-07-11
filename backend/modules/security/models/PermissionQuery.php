<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 17:46:39 GMT-05:00 2016*/

namespace backend\modules\security\models;


/** 
*  Esta es  ActiveQuery clase de [[Permission]].
 *
 * @see Permission
 */
/**
 * PermissionQuery representa la clase de Consulta del modeloPermission
 */
class PermissionQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Permission[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Permission|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
