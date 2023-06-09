<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset011 extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'template011/css/core.css',
        'template011/css/components.css',
        'template011/css/icons.css',
        'template011/css/pages.css',
        'template011/css/responsive.css',
    ];
    public $js = [
        'template011/js/modernizr.min.js',
        'template011/js/bootstrap.min.js',
        'template011/js/detect.js',
        'template011/js/fastclick.js',
        'template011/js/jquery.slimscroll.js',
        'template011/js/jquery.blockUI.js',
        'template011/js/waves.js',
        'template011/js/wow.min.js',
        'template011/js/jquery.nicescroll.js',
        'template011/js/jquery.scrollTo.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}