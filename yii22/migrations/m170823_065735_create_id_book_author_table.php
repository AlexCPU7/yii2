<?php

use yii\db\Migration;

/**
 * Handles the creation of table `id_book_author`.
 */
class m170823_065735_create_id_book_author_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('id_book_author', [
            'id' => $this->primaryKey(),
            'id_book' => $this->integer(),
            'id_author' => $this->integer(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('id_book_author');
    }
}
