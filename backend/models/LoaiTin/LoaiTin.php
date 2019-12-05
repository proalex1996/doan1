<?php

namespace backend\models\LoaiTin;

use backend\models\BaiViet\BaiViet;
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
            [['tenloaitin'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tenloaitin' => 'Tên Loại Tin',
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
