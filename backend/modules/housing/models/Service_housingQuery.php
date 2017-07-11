<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:34 GMT-05:00 2016*/

namespace backend\modules\housing\models;


/** 
*  Esta es  ActiveQuery clase de [[Service_housing]].
 *
 * @see Service_housing
 */
/**
 * Service_housingQuery representa la clase de Consulta del modeloService_housing
 */
class Service_housingQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Service_housing[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Service_housing|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
