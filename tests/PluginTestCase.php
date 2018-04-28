<?php namespace GivingTeam\Blog\Tests;

use PluginTestCase as BasePluginTestCase;

abstract class PluginTestCase extends BasePluginTestCase
{
    /**
     * @var array   Plugins to refresh between tests.
     */
    protected $refreshPlugins = [
        'GivingTeam.Blog',
        'RainLab.Blog',
    ];

    /**
     * Creates the application.
     * 
     * @return Symfony\Component\HttpKernel\HttpKernelInterface
     */
    public function createApplication()
    {
        $app = parent::createApplication();

        require __DIR__.'/../routes.php';

        return $app;
    }
}