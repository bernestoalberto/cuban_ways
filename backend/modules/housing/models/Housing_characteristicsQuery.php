<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:34 GMT-05:00 2016*/

namespace backend\modules\housing\models;


/** 
*  Esta es  ActiveQuery clase de [[Housing_characteristics]].
 *
 * @see Housing_characteristics
 */
/**
 * Housing_characteristicsQuery representa la clase de Consulta del modeloHousing_characteristics
 */
class Housing_characteristicsQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Housing_characteristics[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Housing_characteristics|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
