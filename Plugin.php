<?php namespace ChiragPatel\BootstrapCollapse;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'ChiragPatel\BootstrapCollapse\Components\Collapse' => 'bootstrapCollapse'
        ];
    }

    public function registerSettings()
    {
    }
}
