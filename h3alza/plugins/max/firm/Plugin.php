<?php namespace Max\Firm;

use Backend;
use System\Classes\PluginBase;

/**
 * Firm Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Firm',
            'description' => 'No description provided yet...',
            'author'      => 'Max',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Max\Firm\Components\MyComponent' => 'myComponent',
        ];
    }

    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'max.firm.some_permission' => [
                'tab' => 'Firm',
                'label' => 'Some permission'
            ],
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
