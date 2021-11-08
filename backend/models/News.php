<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property int|null $category_id
 * @property string|null $org_id
 * @property string|null $org_category_name
 * @property string|null $title
 * @property string|null $text
 * @property int|null $watched_count
 * @property string|null $resource_name
 * @property string|null $resource_link
 * @property string|null $image
 * @property string|null $org_created_at
 * @property string|null $created_at
 * @property int $status
 * @property int $order
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'watched_count', 'status', 'order'], 'integer'],
            [['org_id', 'text', 'resource_link'], 'string'],
            [['org_created_at', 'created_at'], 'safe'],
            [['org_category_name', 'title', 'resource_name', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'org_id' => 'Org ID',
            'org_category_name' => 'Org Category Name',
            'title' => 'Title',
            'text' => 'Text',
            'watched_count' => 'Watched Count',
            'resource_name' => 'Resource Name',
            'resource_link' => 'Resource Link',
            'image' => 'Image',
            'org_created_at' => 'Org Created At',
            'created_at' => 'Created At',
            'status' => 'Status',
            'order' => 'Order',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \backend\models\Query\NewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\Query\NewsQuery(get_called_class());
    }
}
