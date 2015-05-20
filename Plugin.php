<?php
/**
 * @link    http://hiqdev.com/hipanel-theme-adminlte2
 * @license http://hiqdev.com/hipanel-theme-adminlte2/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hipanel\themes\adminlte2;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'themes' => [
            'adminlte2' => [
                'class' => 'hipanel\themes\adminlte2\Theme',
            ],
        ],
    ];

}
