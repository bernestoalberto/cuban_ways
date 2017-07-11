<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:34 GMT-05:00 2016*/

namespace backend\modules\housing\models;


/** 
*  Esta es  ActiveQuery clase de [[Housing_type]].
 *
 * @see Housing_type
 */
/**
 * Housing_typeQuery representa la clase de Consulta del modeloHousing_type
 */
class Housing_typeQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Housing_type[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Housing_type|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
