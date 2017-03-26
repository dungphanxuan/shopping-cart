<?php

namespace common\models\store;

use common\models\ProductAttachment;
use trntv\filekit\behaviors\UploadBehavior;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property integer $category_id
 * @property string $description
 * @property string $price
 * @property string $image_base_url
 * @property string $image_base_path
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @var array
     */
    public $product_image;

    /**
     * @var array
     */
    public $attachments;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            BlameableBehavior::className(),
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'attachments',
                'multiple' => true,
                'uploadRelation' => 'productAttachments',
                'pathAttribute' => 'path',
                'baseUrlAttribute' => 'base_url',
                'orderAttribute' => 'order',
                'typeAttribute' => 'type',
                'sizeAttribute' => 'size',
                'nameAttribute' => 'name',
            ],
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'product_image',
                'pathAttribute' => 'image_base_path',
                'baseUrlAttribute' => 'image_base_url'
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'category_id'], 'required'],
            [['category_id', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['name', 'slug', 'image_base_url', 'image_base_path'], 'string', 'max' => 255],
            [['product_image'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên sản phẩm',
            'slug' => 'Bí danh',
            'category_id' => 'Danh mục',
            'description' => 'Mô tả',
            'price' => 'Giá',
            'image_base_url' => 'Image Base Url',
            'image_base_path' => 'Image Base Path',
            'product_image' => 'Ảnh sản phẩm',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductAttachments()
    {
        return $this->hasMany(\common\models\store\ProductAttachment::className(), ['article_id' => 'id']);
    }
}
