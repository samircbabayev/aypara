<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m211108_140505_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer()->null(),
            'name' => $this->string(),
            'note' => $this->text(),

            'status' => $this->tinyInteger()->defaultValue(1)->notNull(),
            'order' => $this->integer(11)->defaultValue(1)->notNull(),
        ]);

        $this->createTable('{{%category_l10n}}', [
            'id' => $this->primaryKey(),
            'fk_ref' => $this->integer()->notNull(),
            'lang' => $this->string(4)->notNull(),

            'name' => $this->string(),
            'note' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
        $this->dropTable('{{%category_l10n}}');
    }
}
