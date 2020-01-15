<?php namespace WebsiteGlobal\AusStoreLocator;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Aus Store Locator',
            'description' => 'Manage and display your store locations on Google Maps',
            'author'      => 'Website Global',
            'icon'        => 'icon-map-marker',
            'homepage'    => ''
        ];
    }

    public function registerComponents()
    {
        return [
            'WebsiteGlobal\AusStoreLocator\Components\AusStoreLocator' => 'ausStoreLocator',
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'WebsiteGlobal\AusStoreLocator\FormWidgets\AusAddressFinder' => [
                'label' => 'Address Finder',
                'code'  => 'ausaddressfinder'
            ]
        ];
    }

    public function registerSettings()
    {
    }

    
}
