<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    //    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       'css/sb-admin.css',
       'css/all.css'
    ];
    public $js = [
        'js/sb-admin.js',
        'js/bootstrap.bundle.js',
        'js/chartjs/chart.js',
        'js/demo/chart-area-demo.js',
        'js/ckeditor/ckeditor.js'
    ];
    public $depends = [
       'yii\web\YiiAsset',
       //'yii\bootstrap\BootstrapAsset',
    ];
}
