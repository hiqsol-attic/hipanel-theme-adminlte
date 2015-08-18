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

/**
 * Class for this theme.
 */
class AdminLteTheme extends \hiqdev\themes\adminlte\Theme
{
    public $label = 'AdminLte v2';

    public $assets = [
        'hiqdev\assets\adminlte\AdminLteAsset',
        'hipanel\themes\adminlte\HipanelAsset',
    ];
}
