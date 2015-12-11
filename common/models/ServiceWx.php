<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;
use trntv\filekit\behaviors\UploadBehavior;
use Yii;

/**
 * This is the model class for table "{{%service_wx}}".
 *
 * @property string $id
 * @property string $nickname
 * @property string $wx
 * @property integer $type
 * @property integer $sort
 * @property integer $status
 * @property string $qrcode_url
 * @property string $qrcode
 * @property string $create_time
 * @property string $update_time
 */
class ServiceWx extends \yii\db\ActiveRecord
{
    public $qrcode_file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%service_wx}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wx', 'type', 'sort', 'status'], 'required'],
            [['type', 'sort', 'status', 'create_time', 'update_time'], 'integer'],
            [['nickname', 'wx'], 'string', 'max' => 25],
            [['qrcode_url', 'qrcode'], 'string', 'max' => 255],
            [['qrcode_file'],'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'create_time',
                'updatedAtAttribute' => 'update_time',
            ],
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'qrcode_file',
                'pathAttribute' => 'qrcode',
                'baseUrlAttribute' => 'qrcode_url',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nickname' => Yii::t('app', 'Nickname'),
            'wx' => Yii::t('app', 'Wx'),
            'type' => Yii::t('app', 'Type'),
            'sort' => Yii::t('app', 'Sort'),
            'status' => Yii::t('app', 'Status'),
            'qrcode_url' => Yii::t('app', 'Qrcode Url'),
            'qrcode' => Yii::t('app', 'Qrcode'),
            'create_time' => Yii::t('app', 'Create Time'),
            'update_time' => Yii::t('app', 'Update Time'),
        ];
    }
}
