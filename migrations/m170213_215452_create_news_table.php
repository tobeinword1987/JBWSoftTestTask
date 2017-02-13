<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m170213_215452_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
        ]);

        $this->insert('news', [
            'title' => 'test 1',
            'content' => 'content 1',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('news', ['id' => 1]);
        
        $this->dropTable('news');
    }
}
