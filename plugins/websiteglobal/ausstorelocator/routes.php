<?php

namespace WebsiteGlobal\AusStoreLocator;

use WebsiteGlobal\AusStoreLocator\Models\Location;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

Route::get('/api/locations.json', function () {
    return get('lat')
        ? Location::distance(get('lat'), get('lng'), get('radius'))
        : Location::withinBounds( get('a'), get('b'), get('c'), get('d') );
});

Route::get('/map-aus', function () {
    $html = file_get_contents('plugins/websiteglobal/ausstorelocator/components/ausstorelocator/map.htm');
    $apiKey = Config::get('websiteglobal.ausstorelocator::googleMapsKey');
    return str_replace('%api_key%', $apiKey, $html) ;
});