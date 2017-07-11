<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:35 GMT-05:00 2016*/

namespace backend\modules\housing\models;


/** 
*  Esta es  ActiveQuery clase de [[Housing_service]].
 *
 * @see Housing_service
 */
/**
 * Housing_serviceQuery representa la clase de Consulta del modeloHousing_service
 */
class Housing_serviceQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Housing_service[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Housing_service|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
