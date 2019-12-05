<?php

namespace frontend\models\CommemtDetail;

use frontend\models\User\User;
use Yii;

/**
 * This is the model class for table "commemt_detail".
 *
 * @property int $id
 * @property int $commemt_id
 * @property int $user_id
 *
 * @property User $user
 * @property Comment $commemt
 */
class CommemtDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'commemt_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'commemt_id', 'user_id'], 'integer'],
            [['id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['commemt_id'], 'exist', 'skipOnError' => true, 'targetClass' => Comment::className(), 'targetAttribute' => ['commemt_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'commemt_id' => 'Commemt ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getCommemt()
//    {
//        return $this->hasOne(Comment::className(), ['id' => 'commemt_id']);
//    }
}
