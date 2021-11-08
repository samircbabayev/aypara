<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string|null $name
 * @property string|null $note
 * @property int $status
 * @property int $order
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'status', 'order'], 'integer'],
            [['note'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
            'note' => 'Note',
            'status' => 'Status',
            'order' => 'Order',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \backend\models\Query\CategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\Query\CategoryQuery(get_called_class());
    }
}
