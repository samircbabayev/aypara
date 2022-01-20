<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/normalize.css",
        "css/owl.carousel.min.css",
        "css/owl.theme.default.min.css",
        "css/style.css",
    ];
    public $js = [
        "js/jquery-3.3.1.min.js",
        "js/owl.carousel.min.js",
        "js/script.js",
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
