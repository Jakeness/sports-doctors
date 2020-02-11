/*
 * Copyright 2017 Google Inc. All rights reserved.
 *
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this
 * file except in compliance with the License. You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under
 * the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF
 * ANY KIND, either express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

// Style credit: https://snazzymaps.com/style/1/pale-dawn

  
  var map;
  var markers = [];
  var infoWindow;
  var locationList = '';
  var mapEl = document.getElementById("map");
  var zipEl = parent.document.getElementById("addressInput");
  var radiusEl = parent.document.getElementById('radius');
  var listEl = parent.document.getElementById('locations');
  
  function initMap() {
    radiusEl.value = 100000;
    zipEl.value = 4000; //(or any other default zip )
    searchLocations();
    zipEl.focus();
    var auscenter = {lat: -28.018045, lng: 133.586334};
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        map.setCenter(pos);
      }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
      });
    } else {
      handleLocationError(false, infoWindow, map.getCenter());
    }
  
  
    map = new google.maps.Map(mapEl, {
      center: auscenter,
      zoom: 4,
    });
    infoWindow = new google.maps.InfoWindow();
  
    map.addListener('idle', function() {
        var boundsChange = true;
        searchLocationsNear(map.getCenter(), boundsChange);
    });
  
    radiusEl.onchange = searchLocations;
    zipEl.oninput = function() {
      if(zipEl.value.length == 5 && isNum(zipEl.value)) {
        searchLocations();
      }
    };
    zipEl.onkeyup =  function(event) {
      event.preventDefault();
      if (event.keyCode === 13) {
        searchLocations();
      }
    };
  }
  
  function searchLocations() {
    var zip = zipEl.value;
    var geocoder = new google.maps.Geocoder();
    var country = isNum(zip) ? 'US' : 'UK';
    geocoder.geocode({address: zip, country:  country}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        searchLocationsNear(results[0].geometry.location);
      } else {
        console.log('Address not found');
      }
    });
  }
  
  function isNum($val){
    return/^\d+$/.test($val)
  }
  
  function clearLocations() {
    infoWindow.close();
    for (var i = 0; i < markers.length; i++) {
      markers[i].setMap(null);
    }
    markers.length = 0;
    locationList = '';
  }
  
  function searchLocationsNear(center, boundsChange = false) {
  
    var radius = radiusEl.value;
    var searchUrl = '/api/locations.json';
  
    if(! boundsChange) {
      clearLocations();
      searchUrl += '?lat=' + center.lat() + '&lng=' + center.lng() + '&radius=' + radius;
    } else {
      var bounds = map.getBounds();
      var sw = bounds.getSouthWest();
      var ne = bounds.getNorthEast();
      searchUrl += '?a=' + sw.lat() + '&b=' + sw.lng() + '&c=' + ne.lat() + '&d=' + ne.lng();
    }
  
    downloadUrl(searchUrl, function(data) {
      var markerNodes = JSON.parse(data);
      var bounds = new google.maps.LatLngBounds();
      var locationList = [];
      for (m of markerNodes) {
        var latlng = new google.maps.LatLng(parseFloat(m.lat), parseFloat(m.lng));
        createMarker(latlng, m.name, m.address, m.phone);
        bounds.extend(latlng);
        locationList.push(m);
      }
      if(! boundsChange) {
        map.fitBounds(bounds);
      }
    var htmlList = '';
    for(m of locationList) {
      htmlList += '<div class="col-item">' +
      '<h4 class="detail-headline">' + m.name + '</h4>' +
      '<p>' +
      m.address_1 + '<br>' +
      m.address_2 + '<br>' +
      m.city + ', ' + m.state + ', ' + m.zip + '<br>' +
      m.phone + '<br>' +
      (m.website ? ('<a href="' + m.website + '">' + m.website + '</a>') : '') + '<br>' +
      m.hours +
      '</p>' +
      '</div>';
    }
  
    listEl.innerHTML = htmlList;
    });
  }
  
  function createMarker(latlng, name, address, phone) {
    var html = '<b>' + name + '</b><br>' + address + '<br>' + phone;
    var marker = new google.maps.Marker({
      map: map,
      position: latlng,
      icon: '/plugins/websiteglobal/ausstorelocator/assets/images/icon-marker.png',
    });
    google.maps.event.addListener(marker, 'click', function() {
      infoWindow.setContent(html);
      infoWindow.open(map, marker);
    });
    markers.push(marker);
  }
  
  function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
      new ActiveXObject('Microsoft.XMLHTTP') :
      new XMLHttpRequest;
  
    request.onreadystatechange = function() {
      if (request.readyState == 4) {
        request.onreadystatechange = doNothing;
        callback(request.responseText, request.status);
      }
    };
  
    request.open('GET', url, true);
    request.send(null);
  }
  
  function parseXml(str) {
    if (window.ActiveXObject) {
      var doc = new ActiveXObject('Microsoft.XMLDOM');
      doc.loadXML(str);
      return doc;
    } else if (window.DOMParser) {
      return (new DOMParser).parseFromString(str, 'text/xml');
    }
  }
  
  function doNothing() {}
  
  function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
      'Error: The Geolocation service failed.' :
      'Error: Your browser doesn\'t support geolocation.');
    infoWindow.open(map);
  }