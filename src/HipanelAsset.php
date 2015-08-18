<?php
/**
 * @link        http://hiqdev.com/hipanel-theme-adminlte
 * @license     BSD 3-clause
 * @copyright   Copyright (c) 2015 HiQDev
 */

namespace hipanel\themes\adminlte;

class HipanelAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@hipanel/themes/adminlte/assets';

    public $css = [
        'css/hipanel.php',
    ];

    public $depends = [
        'hiqdev\assets\hipanel\HipanelAsset',
    ];
}
