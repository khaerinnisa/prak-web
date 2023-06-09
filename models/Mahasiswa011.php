<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa011".
 *
 * @property int $id011
 * @property string $no_induk_mahasiswa011
 * @property string $nama_mahasiswa011
 * @property string $kelas011
 * @property string $status011
 */
class Mahasiswa011 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa011';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_induk_mahasiswa011', 'nama_mahasiswa011', 'kelas011', 'status011'], 'required'],
            [['no_induk_mahasiswa011'], 'string', 'max' => 20],
            [['nama_mahasiswa011'], 'string', 'max' => 50],
            [['kelas011'], 'string', 'max' => 3],
            [['status011'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id011' => 'Id011',
            'no_induk_mahasiswa011' => 'No Induk Mahasiswa011',
            'nama_mahasiswa011' => 'Nama Mahasiswa011',
            'kelas011' => 'Kelas011',
            'status011' => 'Status011',
        ];
    }
}
