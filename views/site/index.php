<?php

/* @var $this yii\web\View */

$this->title = 'Airbnb Analysis';
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Airbnb Analysis</h1>
        <div class="input-group col-lg-4 col-lg-offset-4">
            <input type="text" class="form-control" placeholder="NewYork, NY" aria-describedby="basic-addon2">
            <span class="input-group-addon" id="basic-addon2">Search</span>
        </div>

    </div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?= Yii::$app->request->baseUrl ?>/img/show.jpg" >
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="<?= Yii::$app->request->baseUrl ?>/img/show.jpg" >
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="<?= Yii::$app->request->baseUrl ?>/img/show.jpg" >
                <div class="carousel-caption">

                </div>
            </div>

        </div>

        <!-- Controls -->

    </div>



    </div>
</div>
