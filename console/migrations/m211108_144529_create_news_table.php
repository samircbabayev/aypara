<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m211108_144529_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),

            'org_id' => $this->text(),
            'org_category_name' => $this->string(),

            'title' => $this->string(),
            'text' => $this->text(),

            'watched_count' => $this->integer(),

            'resource_name' => $this->string(),
            'resource_link' => $this->text(),

            'image' => $this->string(),

            'org_created_at' => $this->dateTime(),
            'created_at' => $this->dateTime(),

            'status' => $this->tinyInteger()->defaultValue(1)->notNull(),
            'order' => $this->integer(11)->defaultValue(1)->notNull(),
        ]);

        $this->createTable('{{%news_l10n}}', [
            'id' => $this->primaryKey(),
            'fk_ref' => $this->integer()->notNull(),
            'lang' => $this->string(4)->notNull(),

            'title' => $this->string(),
            'text' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
        $this->dropTable('{{%news_l10n}}');
    }
}
