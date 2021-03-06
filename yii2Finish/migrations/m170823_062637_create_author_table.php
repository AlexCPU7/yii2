<?php

use yii\db\Migration;

/**
 * Handles the creation of table `author`.
 */
class m170823_062637_create_author_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('author', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('author');
    }
}
