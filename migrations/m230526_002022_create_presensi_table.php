<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%presensi}}`.
 */
class m230526_002022_create_presensi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%presensi}}', [
            'id' => $this->primaryKey(),
            'id_matakuliah'=> $this->integer()->notNull(),
            'tanggal_presensi'=>$this->date()->notNull(),
            'metode_pembelajaran'=>$this->string()->notNull(),
             
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%presensi}}');
    }
}
