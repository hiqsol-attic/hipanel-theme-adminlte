<?php
/**
 * @link        http://hiqdev.com/hipanel-theme-adminlte
 * @license     BSD 3-clause
 * @copyright   Copyright (c) 2015 HiQDev
 */

namespace hipanel\themes\adminlte;

class AdminLteAsset extends \yii\web\AssetBundle
{
    public $css = [
        '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
        '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'frontend\assets\AppAsset',
        'hiqdev\assets\adminlte\AdminLteAsset',
        'hiqdev\assets\select2_bootstrap3_css\Select2Bootstrap3CssAsset',
    ];
}
