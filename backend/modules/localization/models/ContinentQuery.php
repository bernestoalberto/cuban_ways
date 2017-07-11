<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Wed May 25 11:59:12 EDT 2016*/

namespace backend\modules\localization\models;


/** 
*  Esta es  ActiveQuery clase de [[Continent]].
 *
 * @see Continent
 */
/**
 * ContinentQuery representa la clase de Consulta del modeloContinent
 */
class ContinentQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Continent[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Continent|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
