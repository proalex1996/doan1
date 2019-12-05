<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
//    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'pub/bootstrap/css/bootstrap.min.css',
        'pub/font-awesome/css/font-awesome.min.css',
        'pub/custom-icon/style.css',
        'flexmenu/owl.carousel.min.css',
        'flexmenu/owl.theme.default.css',
    ];
    public $js = [
        'js/custom-js.js',
        'flexmenu/owl.carousel.min.js',
        'js/flexmenu.min.js',
        'js/stylejs.js',
//        'pub/bootstrap/css/bootstrap.min.js',
//        'pub/bootstrap/css/popper.min.js',
    ];
    public $depends = [
//       'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
