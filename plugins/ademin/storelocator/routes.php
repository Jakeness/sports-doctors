<?php

namespace ADemin\StoreLocator;

use ADemin\StoreLocator\Models\Store;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

Route::get('/api/stores.json', function () {
    return get('lat')
        ? Store::distance(get('lat'), get('lng'), get('radius'))
        : Store::withinBounds( get('a'), get('b'), get('c'), get('d') );
});

Route::get('/map', function () {
    $html = file_get_contents('plugins/ademin/storelocator/components/storelocator/map.htm');
    $apiKey = Config::get('ademin.storelocator::googleMapsKey');
    return str_replace('%api_key%', $apiKey, $html) ;
});