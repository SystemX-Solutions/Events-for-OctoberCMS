<?php namespace XavieR\Events;

use Lang;
use Backend;
use Controller;
use System\Classes\PluginBase;

/**
 * MenuManager Plugin Information File
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
            'name'        => 'Events',
            'description' => 'Plugin to enable management of events within October CMS',
            'author'      => 'XavieR Lis',
            'icon'        => 'icon-calendar'
        ];
    }

    /**
     * Create the navigation items for this plugin
     *
     * @return array
     */
   /* public function registerNavigation()
    {
        return [
            'events' => [
                'label' => 'Афиша',
                'url'   => Backend::url('xavier/events/cities'),
                'icon'  => 'icon-calendar',
                'order' => 500,
                'sideMenu' => [
                    'edit' => [
                        'label'       => 'Города',
                        'icon'        => 'icon-list-alt',
                        'url'         => Backend::url('xavier/events/cities')
                    ],
                    /*'reorder' => [
                        'label' => 'Reorder Menus',
                        'icon' => 'icon-exchange',
                        'url' => Backend::url('benfreke/menumanager/menus/reorder')
                    ]
                ]
            ]
        ];
    }*/
    public function registerSettings()
    {
        return [
            'location' => [
                'label'       => Lang::get('xavier.events::lang.setting.label'),
                'description' => Lang::get('xavier.events::lang.setting.desc'),
                'category'    => Lang::get('xavier.events::lang.setting.category'),
                'icon'        => 'icon-globe',
                'url'         => Backend::url('xavier/events/cities'),
                'sort'        => 100
            ]
        ];
    }
    /**
     * Register the front end component
     *
     * @return array
     */
   /* public function registerComponents()
    {
        return [
            '\BenFreke\MenuManager\Components\Menu' => 'menu',
        ];
    }*/

}
