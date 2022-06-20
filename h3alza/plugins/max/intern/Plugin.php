<?php namespace Max\Intern;

use Backend;
use System\Classes\PluginBase;

/**
 * Intern Plugin Information File
 */
class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Intern',
            'description' => 'No description provided yet...',
            'author'      => 'Max',
            'icon'        => 'icon-leaf'
        ];
    }


    public function registerNavigation()
    {
        return [
            'intern' => [
                'label'       => 'Intern',
                'url'         => Backend::url('max/intern/interns'),
                'icon'        => 'icon-leaf',
                'permissions' => ['max.intern.*'],
                'order'       => 500,
            ],
        ];
    }
}
