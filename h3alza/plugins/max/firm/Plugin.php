<?php namespace Max\Firm;

use Backend;
use System\Classes\PluginBase;

/**
 * Firm Plugin Information File
 */
class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Firm',
            'description' => 'No description provided yet...',
            'author'      => 'Max',
            'icon'        => 'icon-leaf'
        ];
    }


    public function registerNavigation()
    {
        return [
            'firm' => [
                'label'       => 'Firm',
                'url'         => Backend::url('max/firm/firms'),
                'icon'        => 'icon-leaf',
                'permissions' => ['max.firm.*'],
                'order'       => 500,
            ],
        ];
    }
}
