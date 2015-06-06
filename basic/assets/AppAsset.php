<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'lib/owl.carousel/owl-carousel/owl.carousel.css',
        'lib/owl.carousel/owl-carousel/owl.theme.css',
        'lib/owl.carousel/owl-carousel/owl.transitions.css',
        'css/scrolling-nav.css',
        'lib/pretty/css/prettyPhoto.css',
    ];
    public $js = [
       
        'lib/owl.carousel/owl-carousel/owl.carousel.js',
        'js/jquery.easing.min.js',
        'js/scrolling-nav.js',
        'js/publico.js',
        'lib/pretty/js/jquery.prettyPhoto.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
