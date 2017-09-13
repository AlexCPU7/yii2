<?php

use yii\db\Migration;

/**
 * Handles the creation of table `id_book_genre`.
 * Has foreign keys to the tables:
 *
 * - `book`
 * - `genre`
 */
class m170908_081912_create_id_book_genre_table extends Migration
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

        // creates index for column `id_book`
        $this->createIndex(
            'idx-id_book_genre-id_book',
            'id_book_genre',
            'id_book'
        );

        // add foreign key for table `book`
        $this->addForeignKey(
            'fk-id_book_genre-id_book',
            'id_book_genre',
            'id_book',
            'book',
            'id',
            'CASCADE'
        );

        // creates index for column `id_genre`
        $this->createIndex(
            'idx-id_book_genre-id_genre',
            'id_book_genre',
            'id_genre'
        );

        // add foreign key for table `genre`
        $this->addForeignKey(
            'fk-id_book_genre-id_genre',
            'id_book_genre',
            'id_genre',
            'genre',
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
            'fk-id_book_genre-id_book',
            'id_book_genre'
        );

        // drops index for column `id_book`
        $this->dropIndex(
            'idx-id_book_genre-id_book',
            'id_book_genre'
        );

        // drops foreign key for table `genre`
        $this->dropForeignKey(
            'fk-id_book_genre-id_genre',
            'id_book_genre'
        );

        // drops index for column `id_genre`
        $this->dropIndex(
            'idx-id_book_genre-id_genre',
            'id_book_genre'
        );

        $this->dropTable('id_book_genre');
    }
}
