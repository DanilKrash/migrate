<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m230921_151519_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(30),
            'body' => $this->text(),
            'image' => $this->string(30),
            'category_id' => $this->integer(11)->defaultValue(1)
        ]);

        $this->createIndex(
            'idx-cat',
            'news',
            'category_id'
        );

        $this->addForeignKey(
            'fk-cat',
            'news',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-cat',
            'news'
        );

        $this->dropIndex(
            'idx-cat',
            'news'
        );

        $this->dropTable('{{%news}}');
    }
}
