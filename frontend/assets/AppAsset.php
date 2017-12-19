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
        'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css',

        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',
        'http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css',
        'css/slider.css',
        'css/rating.css',
        'css/site.css',

    ];
    public $js = [
        'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js',

        'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js',
        'http://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/SplitText.min.js',
        'http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js',
        'js/slider.js',
        'js/rating.js',
        'js/js.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
