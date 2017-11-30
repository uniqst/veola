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
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css',

        'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',

        'css/slider.css',
        'css/site.css',

    ];
    public $js = [
        'https://code.jquery.com/jquery-3.2.1.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js',

        'http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js',
        'http://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/SplitText.min.js',

        'js/slider.js',
        'js/js.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
