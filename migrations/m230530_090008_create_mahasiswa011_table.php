<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa011}}`.
 */
class m230530_090008_create_mahasiswa011_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa011}}', [
            'id011' => $this->primaryKey(),
            'no_induk_mahasiswa011' => $this->string(20)->notNull(),
            'nama_mahasiswa011' => $this->string(50)->notNull(),
            'kelas011'  => $this->char(3)->notNull(),
            'status011' => $this->string(12)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa011}}');
    }
}
