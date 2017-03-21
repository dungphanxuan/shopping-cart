<?php

namespace api\controllers;

use api\components\AccessTokenAuth;
use common\models\store\ProductCategory;
use yii\filters\AccessControl;

class ProductCategoryController extends ApiController
{

    public function actionIndex()
    {
        $model = ProductCategory::find()->asArray()->all();
        $this->msg = 'Product Category';
        $this->data = $model;
    }

}
