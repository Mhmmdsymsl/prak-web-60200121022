<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mata_kuliah".
 *
 * @property int $kode_mk
 * @property int $nim
 * @property string $nama_mahasiswa
 * @property string $kelas
 */
class MataKuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mata_kuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_mk', 'nim', 'nama_mahasiswa', 'kelas'], 'required'],
            [['kode_mk', 'nim'], 'integer'],
            [['nama_mahasiswa'], 'string', 'max' => 50],
            [['kelas'], 'string', 'max' => 11],
            [['kode_mk'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_mk' => 'Kode Mk',
            'nim' => 'Nim',
            'nama_mahasiswa' => 'Nama Mahasiswa',
            'kelas' => 'Kelas',
        ];
    }
}
