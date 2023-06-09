<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_011".
 *
 * @property int $id
 * @property string $id_mahasiswa
 * @property string $foto_profil
 */
class Profil011 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_011';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'foto_profil'], 'required'],
            [['id_mahasiswa'], 'string', 'max' => 7],
            [['foto_profil'], 'string', 'max' => 100],
            [['id_mahasiswa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profil' => 'Foto Profil',
        ];
    }
}
