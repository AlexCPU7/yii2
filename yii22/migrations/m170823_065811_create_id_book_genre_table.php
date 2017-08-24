<?php

use yii\db\Migration;

/**
 * Handles the creation of table `id_book_genre`.
 */
class m170823_065811_create_id_book_genre_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('id_book_genre', [
            'id' => $this->primaryKey(),
            'id_book' => $this->integer(),
            'id_genre' => $this->integer(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('id_book_genre');
    }
}
