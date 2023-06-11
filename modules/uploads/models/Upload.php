<?php

namespace app\modules\uploads\models;

use Yii;

/**
 * This is the model class for table "upload".
 *
 * @property int $upload_id
 * @property string|null $upload_ref
 * @property string|null $upload_filename
 * @property string|null $upload_path
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class Upload extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'upload';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['upload_ref', 'upload_filename', 'upload_path'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'upload_id' => Yii::t('app', 'Upload ID'),
            'upload_ref' => Yii::t('app', 'Upload Ref'),
            'upload_filename' => Yii::t('app', 'Upload Filename'),
            'upload_path' => Yii::t('app', 'Upload Path'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
}
