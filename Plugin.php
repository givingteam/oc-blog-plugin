<?php namespace GivingTeam\Blog;

use Backend;
use System\Classes\PluginBase;

/**
 * Blog Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * @var array   Dependencies
     */
    public $require = [
        'RainLab.Blog',
    ];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'author'      => 'Giving Team',
            'description' => 'HTTP API for RainLab.Blog',
            'icon'        => 'icon-leaf',
            'name'        => 'Blog',
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }
}
