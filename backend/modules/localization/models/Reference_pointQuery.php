<?php 
/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 12:22:46 GMT-05:00 2016*/

namespace backend\modules\localization\models;


/** 
*  Esta es  ActiveQuery clase de [[Reference_point]].
 *
 * @see Reference_point
 */
/**
 * Reference_pointQuery representa la clase de Consulta del modeloReference_point
 */
class Reference_pointQuery extends \yii\db\ActiveQuery{
/*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Reference_point[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Reference_point|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
