<?php
/**
 * @link      http://hiqdev.com/hipanel-theme-adminlte
 * @license   BSD 3-clause
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hipanel\themes\adminlte;

/**
 * Class for this theme.
 */
class AdminLteTheme extends \hiqdev\themes\adminlte\Theme
{
    public $label = 'AdminLte v2';

    public $assets = [
        'frontend\assets\AppAsset',
        'hiqdev\assets\adminlte\AdminLteAsset',
        'hipanel\themes\adminlte\HipanelAsset',
    ];
}
