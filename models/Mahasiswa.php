<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 * @property string $Nim
 * @property string $Nama
 * @property string $Kelas
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nim', 'Nama', 'Kelas'], 'required'],
            [['Kelas'], 'string'],
            [['Nim'], 'string', 'max' => 12],
            [['Nama'], 'string', 'max' => 30],
            [['Nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Nim' => 'Nim',
            'Nama' => 'Nama',
            'Kelas' => 'Kelas',
        ];
    }
    public function getprofil()
    {
        return $this->hasOne(profil::className(), ['id_mahasiswa' => 'id']);
    }
}
