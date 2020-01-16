<?php namespace WebsiteGlobal\AusStoreLocator\Components;

use Cms\Classes\ComponentBase;

class AusStoreLocator extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Aus Store Locator Map',
            'description' => 'Google Maps with store location pins'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->addCss('/plugins/websiteglobal/ausstorelocator/assets/css/store-locator.css');
    }
}
