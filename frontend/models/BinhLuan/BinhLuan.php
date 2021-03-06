<?php

namespace frontend\models\BinhLuan;

use frontend\models\BaiViet\BaiViet;
use Yii;

/**
 * This is the model class for table "binhluan".
 *
 * @property int $id
 * @property int $idbaiviet
 * @property string $commenter
 * @property string $email
 *
 * @property Baiviet $baiviet
 * @property Commentdetail[] $commentdetails
 */
class BinhLuan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'binhluan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'idbaiviet'], 'integer'],
            [['commenter'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 30],
            [['id'], 'unique'],
            [['idbaiviet'], 'exist', 'skipOnError' => true, 'targetClass' => Baiviet::className(), 'targetAttribute' => ['idbaiviet' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idbaiviet' => 'Idbaiviet',
            'commenter' => 'Commenter',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBaiviet()
    {
        return $this->hasOne(Baiviet::className(), ['id' => 'idbaiviet']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommentdetails()
    {
        return $this->hasMany(Commentdetail::className(), ['idcomment' => 'id']);
    }
}
