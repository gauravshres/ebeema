<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

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
         'css/site3.css',
        'css/site2.css',
        'css/jquery.nstSlider.css',
        
       
        'source/flexslider.css',
        'css/font-awesome.min.css',
        'css/fancybox.css',
        
        
        
    ];
    public $js = [
        'source/jquery.nstSlider.js',
        'source/jquery.flexslider.js',
        'source/jquery.fancybox.pack.js',
        'source/angular-slider.js',
        'source/rangeInputSupported.js',

        'source/scirpt.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
