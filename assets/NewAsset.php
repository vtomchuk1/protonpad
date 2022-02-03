<?php


namespace app\assets;

use \yii\web\AssetBundle;


class NewAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "/assets/css/bootstrap.min.css",
        "/assets/css/icons.min.css",
        "/assets/css/app.min.css"
    ];
    public $js = [
        //"/assets/libs/jquery/jquery.min.js",
        "/assets/libs/bootstrap/js/bootstrap.bundle.min.js",
        "/assets/libs/metismenu/metisMenu.min.js",
        "/assets/libs/simplebar/simplebar.min.js",
        "/assets/libs/node-waves/waves.min.js",
        "/assets/js/app.js"
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap4\BootstrapAsset',
    ];
}