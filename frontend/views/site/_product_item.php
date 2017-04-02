<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

/* @var $model common\models\store\Product */

$bundle = \frontend\assets\StoreAsset::register($this);

?>
<div class="product">
    <div class="images">
        <a href="#" title="images"><img src="<?= $this->assetManager->getAssetUrl($bundle, 'images/product1.jpg')?>" alt="images"></a>
    </div>
    <div class="text">
        <a href="#" class="product-title" title="Chemistry"><?=$model->name?></a>
        <p class="price">50.23$</p>
    </div>
</div>
