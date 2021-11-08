<?php

namespace backend\models\Query;

/**
 * This is the ActiveQuery class for [[\backend\models\Category]].
 *
 * @see \backend\models\Category
 */
class CategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \backend\models\Category[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \backend\models\Category|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
