<?php

namespace frontend\models\BaiViet;

use frontend\models\BinhLuan\BinhLuan;
use frontend\models\LoaiTin\LoaiTin;
use Yii;
use yii\data\ActiveDataProvider;

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
            [['idloaitin'], 'integer'],
            [['title', 'description', 'content', 'thumbnail'], 'string'],
            [['posttime'], 'safe'],
            [['idloaitin'], 'exist', 'skipOnError' => true, 'targetClass' => Loaitin::className(), 'targetAttribute' => ['idloaitin' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Title',
            'description' => 'Description',
            'content' => 'Content',
            'thumbnail' => 'Thumbnail',
            'posttime' => 'Posttime',
            'idloaitin' => 'Idloaitin',
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

    public function getListBaiViet($idLoaiTin){
        //'select * from baiviet where idloaditin = 2'
        $listBaiViet = self::find()->where(['idloaitin' => $idLoaiTin])->orderBy('posttime DESC')->all();
        return $listBaiViet;
    }
    public function getlistID($listID){
        $listID = self::find()->where(['idloaitin' => $listID])->orderBy('posttime DESC')->all();
        return $listID;
    }
    public function getTrangChu()
    {
        $listTrangChu = self::find()->orderBy('posttime DESC')->all();

        return $listTrangChu;
    }
    public function getTrending()
    {
       $listTrending = self::find()->orderBy('viewcount DESC')->all();
       return $listTrending;
    }


    public function getChiTietBaiViet($id){
        $dataBaiViet = self::findOne(['id' => $id]);
        return $dataBaiViet;
    }
}
