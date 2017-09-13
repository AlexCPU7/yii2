<?php

use yii\db\Migration;

/**
 * Handles the creation of table `id_book_author`.
 * Has foreign keys to the tables:
 *
 * - `book`
 * - `author`
 */
class m170908_081805_create_id_book_author_table extends Migration
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

        // creates index for column `id_book`
        $this->createIndex(
            'idx-id_book_author-id_book',
            'id_book_author',
            'id_book'
        );

        // add foreign key for table `book`
        $this->addForeignKey(
            'fk-id_book_author-id_book',
            'id_book_author',
            'id_book',
            'book',
            'id',
            'CASCADE'
        );

        // creates index for column `id_author`
        $this->createIndex(
            'idx-id_book_author-id_author',
            'id_book_author',
            'id_author'
        );

        // add foreign key for table `author`
        $this->addForeignKey(
            'fk-id_book_author-id_author',
            'id_book_author',
            'id_author',
            'author',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        // drops foreign key for table `book`
        $this->dropForeignKey(
            'fk-id_book_author-id_book',
            'id_book_author'
        );

        // drops index for column `id_book`
        $this->dropIndex(
            'idx-id_book_author-id_book',
            'id_book_author'
        );

        // drops foreign key for table `author`
        $this->dropForeignKey(
            'fk-id_book_author-id_author',
            'id_book_author'
        );

        // drops index for column `id_author`
        $this->dropIndex(
            'idx-id_book_author-id_author',
            'id_book_author'
        );

        $this->dropTable('id_book_author');
    }
}
