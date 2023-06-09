<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%fakultas011}}`.
 */
class m230524_073154_create_fakultas011_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%fakultas011}}', [
            'id' => $this->primaryKey(),
            'nama_resmi' => $this->string()->notNull(),
            'alamat' => $this->string()->notNull(),
            'nama_singkat' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%fakultas011}}');
    }
}
