<?php

/* @var $this \yii\web\View */

/* @var $content string */


use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<br data-gr-c-s-loaded="true">
<?php $this->beginBody() ?>
<header class="header header--style-one sticky-top">
    <div class="main-nav">
        <div class="container">
            <div class="row u-flex--item-center">
                <div class="col-lg-2 col-6">
                    <div class="site-logo">
                        <a href="<?= Url::to(['/']) ?>"><img src="<?= Url::to(['img/logo.png']) ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-1 col-6">
                    <div class="header__search has-menubar text-right">
                        <button id="JS-openButton" class="header__menubar d-lg-none d-xl-none"><i class="ico-bar"></i></button>
                        <!--header search area -->
                        <div class="header__search__form">
                                <button class="close-btn JS-form-close"><i class="ico-close"></i></button>
                        </div><!--//header search end-->
                    </div>
                </div>
                <div class="col-lg-9 d-none d-lg-block u-padding-r-0">
                    <nav class="header__nav text-right">
                        <ul>
                            <li><a href="<?=Url::to(['/']) ?>">Trang Chủ</a>
                            </li>
                            <li><a href="<?= Url::to(['/vleague']) ?>">V-league</a>
                            </li>
                            <li><a href="<?= Url::to(['/doi-tuyen']) ?>">Đội Tuyển Quốc Gia</a></li>
                             <li>   <a href="<?=Url::to(['/about']) ?>">About Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-menu-area">
    <nav class="mobile-menu">
        <ul>
            <li><a class="no-child" href="<?=Url::to(['/']) ?>">Trang Chủ</a></li>
            <li><a class="no-child" href="<?= Url::to(['/vleague']) ?>">V-League</a></li>
            <li><a class="no-child" href="<?= Url::to(['/doi-tuyen']) ?>">Đội Tuyển Việt Nam</a></li>
            <li><a class="no-child" href="<?=Url::to(['/about']) ?>">About Us</a></li>
        </ul>
    </nav>
    <div class="btn-wrap">
        <button id="JS-closeButton"><i class="ico-close"></i></button>
    </div>
    <div class="social-links">
        <ul>
            <li><a href="#"><span class="ion-social-facebook"></span></a></li>
            <li><a href="#"><span class="ion-social-twitter"></span></a></li>
            <li><a href="#"><span class="ion-social-googleplus"></span></a></li>
            <li><a href="#"><span class="ion-social-tumblr"></span></a></li>
        </ul>
    </div>
</div>
<div class="content">
<?= $content ?>
</div>
</br> </br>
<footer class="footer">
    <div class="footer__widgets style-1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="widget social text-center">
                        <div class="logo">
                            <a href="#"><img src="<?= Url::to(['img/logo.png']) ?>" alt=""></a>
                        </div>
                        <ul class="social--circle social--color">
                            <li><a class="social__facebook" href="https://www.facebook.com/tinhtran001"><i
                                            class="fa fa-facebook"></i></a></li>
                            <li><a class="social__twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="social__google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <div class="widget about">
                            <div class="widget__title">
                                <div class="a-block">
                                    <li>
                                        <h6>Bản quyền thuộc về Football.vn &copy; Copyright by Football.vn</h6>
                                        <p>
                                            <span>Email Address : support@football.com</span>
                                            <span>Mobile : (+84) 143453564 </span>
                                            <a href=<?= Url::to(['backend/wed'])?>>Login Admin</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

</footer>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
