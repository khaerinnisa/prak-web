<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fakultas011".
 *
 * @property int $id
 * @property string $nama_resmi
 * @property string $alamat
 * @property string $nama_singkat
 */
class Fakultas011 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fakultas011';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_resmi', 'alamat', 'nama_singkat'], 'required'],
            [['nama_resmi', 'alamat', 'nama_singkat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_resmi' => 'Nama Resmi',
            'alamat' => 'Alamat',
            'nama_singkat' => 'Nama Singkat',
        ];
    }
}
