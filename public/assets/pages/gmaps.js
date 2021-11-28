/*
 Template Name: Veltrix - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Google Maps
 */

var map;
$(document).ready(function(){
  // Markers
  map = new GMaps({
    div: '#gmaps-markers',
    lat: -12.043333,
    lng: -77.028333
  });
  map.addMarker({
    lat: -12.043333,
    lng: -77.03,
    title: 'Lima',
    details: {
      database_id: 42,
      author: 'HPNeo'
    },
    click: function(e){
      if(console.log)
        console.log(e);
      alert('You clicked in this marker');
    }
  });

  // Overlays
  map = new GMaps({
    div: '#gmaps-overlay',
    lat: -12.043333,
    lng: -77.028333
  });
  map.drawOverlay({
    lat: map.getCenter().lat(),
    lng: map.getCenter().lng(),
    content: '<div class="gmaps-overlay">Lima<div class="gmaps-overlay_arrow above"></div></div>',
    verticalAlign: 'top',
    horizontalAlign: 'center'
  });

  //panorama
  map = GMaps.createPanorama({
    el: '#panorama',
    lat : 42.3455,
    lng : -71.0983
  });

  //Map type
  map = new GMaps({
    div: '#gmaps-types',
    lat: -12.043333,
    lng: -77.028333,
    mapTypeControlOptions: {
      mapTypeIds : ["hybrid", "roadmap", "satellite", "terrain", "osm"]
    }
  });
  map.addMapType("osm", {
    getTileUrl: function(coord, zoom) {
      return "https://a.tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
    },
    tileSize: new google.maps.Size(256, 256),
    name: "OpenStreetMap",
    maxZoom: 18
  });
  map.setMapTypeId("osm");
});