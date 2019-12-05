<?php

namespace backend\models\BaiViet;

use backend\models\LoaiTin\LoaiTin;
use frontend\models\BinhLuan\BinhLuan;
use Yii;

/**
 * This is the model class for table "baiviet".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $thumbnail
 * @property string $posttime
 * @property int $idloaitin
 *
 * @property Loaitin $loaitin
 * @property Binhluan[] $binhluans
 */
class BaiViet extends \yii\db\ActiveRecord
{
    public $tenloaitin;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'baiviet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'content', 'thumbnail','tenloaitin'], 'string'],
            //[['posttime'], 'safe'],
            [['idloaitin'], 'integer'],
            [['idloaitin'], 'exist', 'skipOnError' => true, 'targetClass' => Loaitin::className(), 'targetAttribute' => ['idloaitin' => 'id']],
            [['imageFile'], 'file', 'extensions' => 'png, jpg'],
        ];
    }
    public $imageFile;

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Tiêu Đề',
            'description' => 'Mô Tả',
            'content' => 'Nội Dung',
            'thumbnail' => 'Ảnh Đại Diện ',
            'posttime' => 'Ngày Đăng',
            'tenloaitin' => 'Loại Tin',
            'viewcount' => 'Lượt Xem'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoaitin()
    {
        return $this->hasOne(Loaitin::className(), ['id' => 'idloaitin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBinhluans()
    {
        return $this->hasMany(Binhluan::className(), ['idbaiviet' => 'id']);
    }
}
