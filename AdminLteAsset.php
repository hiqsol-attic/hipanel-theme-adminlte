<?php
/**
 * @link    http://hiqdev.com/hipanel-theme-adminlte2
 * @license http://hiqdev.com/hipanel-theme-adminlte2/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hipanel\themes\adminlte2;

class AdminLteAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/admin-lte';
    public $css = [
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'dist/css/AdminLTE.css',
        'dist/css/skins/_all-skins.css',
    ];
    public $js = [
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/fastclick/fastclick.min.js',
        'dist/js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'frontend\assets\AppAsset',
        'hiqdev\yii2-asset-select2-bootstrap-css\Asset'
    ];
}
