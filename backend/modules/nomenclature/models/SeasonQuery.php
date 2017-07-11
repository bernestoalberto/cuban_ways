<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 11:07:04 GMT-05:00 2016*/

namespace backend\modules\nomenclature\models;


/** 
*  Esta es  ActiveQuery clase de [[Season]].
 *
 * @see Season
 */
/**
 * SeasonQuery representa la clase de Consulta del modeloSeason
 */
class SeasonQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Season[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Season|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
