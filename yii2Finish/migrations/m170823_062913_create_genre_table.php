<?php

use yii\db\Migration;

/**
 * Handles the creation of table `genre`.
 */
class m170823_062913_create_genre_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('genre', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('genre');
    }
}
