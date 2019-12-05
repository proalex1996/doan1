<?php

namespace frontend\models\LoaiTin;

use Yii;

/**
 * This is the model class for table "loaitin".
 *
 * @property int $id
 * @property string $tenloaitin
 *
 * @property Baiviet[] $baiviets
 */
class LoaiTin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'loaitin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['tenloaitin'], 'string', 'max' => 20],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tenloaitin' => 'Tenloaitin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBaiviets()
    {
        return $this->hasMany(Baiviet::className(), ['idloaitin' => 'id']);
    }
}
