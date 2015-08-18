<?php

/*
 * AdminLte Theme for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-theme-adminlte
 * @package   hipanel-theme-adminlte
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2015, HiQDev (https://hiqdev.com/)
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
