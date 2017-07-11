<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:49 GMT-05:00 2016*/

namespace backend\modules\housing\models;


/** 
*  Esta es  ActiveQuery clase de [[Housing_address]].
 *
 * @see Housing_address
 */
/**
 * Housing_addressQuery representa la clase de Consulta del modeloHousing_address
 */
class Housing_addressQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Housing_address[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Housing_address|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
