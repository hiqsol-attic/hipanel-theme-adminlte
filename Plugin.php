<?php
/**
 * @link    http://hiqdev.com/hipanel-theme-adminlte
 * @license http://hiqdev.com/hipanel-theme-adminlt2/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hipanel\themes\adminlte;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'themes' => [
            'adminlte' => [
                'class' => 'hipanel\themes\adminlte\Theme',
            ],
        ],
    ];

}
