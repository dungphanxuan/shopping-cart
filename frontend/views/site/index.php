<?php
/* @var $this yii\web\View */
$this->title = Yii::$app->name;

$bundle = \frontend\assets\StoreAsset::register($this);
?>
<div class="row">
    <div class="space-30">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?= $this->assetManager->getAssetUrl($bundle, 'images/slide-show1.jpg')?>" alt="First slide">
                </div>
                <div class="item">
                    <img src="<?= $this->assetManager->getAssetUrl($bundle, 'images/slide-show2.jpg')?>" alt="First slide">
                </div>
                <div class="item">
                    <img src="<?= $this->assetManager->getAssetUrl($bundle, 'images/slide-show3.jpg')?>" alt="First slide">
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- End slide Show -->
</div>
<!-- End row -->
<div class="products box-shadow space-30">
    <div class="col-md-2 cat-title">
        <h3>Big Cooling Days Offers</h3>
        <a href="#" title="View All">View All</a>
    </div>
    <div class="col-md-10">
        <div class="product-slide">
            <div class="product">
                <div class="images">
                    <a href="#" title="images"><img src="<?= $this->assetManager->getAssetUrl($bundle, 'images/product1.jpg')?>" alt="images"></a>
                </div>
                <div class="text">
                    <a href="#" class="product-title" title="Chemistry">Chemistry</a>
                    <p class="price">50.23$</p>
                </div>
            </div>
            <!-- End product -->
            <div class="product">
                <div class="images">
                    <a href="#" title="images"><img src="<?= $this->assetManager->getAssetUrl($bundle, 'images/product2.jpg')?>" alt="images"></a>
                </div>
                <div class="text">
                    <a href="#" class="product-title" title="Chemistry">Chemistry</a>
                    <p class="price">40.09$</p>
                </div>
            </div>
            <!-- End product -->
            <div class="product">
                <div class="images">
                    <a href="#" title="images"><img src="<?= $this->assetManager->getAssetUrl($bundle, 'images/product3.jpg')?>" alt="images"></a>
                </div>
                <div class="text">
                    <a href="#" class="product-title" title="Chemistry">Chemistry</a>
                    <p class="price">50.25$</p>
                </div>
            </div>
            <!-- End product -->
            <div class="product">
                <div class="images">
                    <a href="#" title="images"><img src="<?= $this->assetManager->getAssetUrl($bundle, 'images/product4.jpg')?>" alt="images"></a>
                </div>
                <div class="text">
                    <a href="#" class="product-title" title="Chemistry">Chemistry</a>
                    <p class="price">46.56$</p>
                </div>
            </div>
            <!-- End product -->
            <div class="product">
                <div class="images">
                    <a href="#" title="images"><img src="<?= $this->assetManager->getAssetUrl($bundle, 'images/product5.jpg')?>" alt="images"></a>
                </div>
                <div class="text">
                    <a href="#" class="product-title" title="Chemistry">Chemistry</a>
                    <p class="price">46.56$</p>
                </div>
            </div>
            <!-- End product -->
            <div class="product">
                <div class="images">
                    <a href="#" title="images"><img src="<?= $this->assetManager->getAssetUrl($bundle, 'images/product5.jpg')?>" alt="images"></a>
                </div>
                <div class="text">
                    <a href="#" class="product-title" title="Chemistry">Chemistry</a>
                    <p class="price">46.56$</p>
                </div>
            </div>
            <!-- End product -->
        </div>
        <!-- End product-slide -->
    </div>
</div>
<!-- End product -->

