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

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'disabled_themes' => [
            'adminlte' => [
                'class' => 'hipanel\themes\adminlte\AdminLteTheme',
            ],
        ],
    ];
}
