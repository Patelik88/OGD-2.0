// global variables
var mapname = '';
var dataLayerName = 'none';
var wmsLayer = '';
var maplayer = '';

// modal content
var pm10 = document.getElementById('imgpm10');
var no2 = document.getElementById('imgno2');
var info = document.getElementById('infotext');

// hide the legend for pm10 data when clicking on a no2 button
function hidepm10() {
    no2.style.display = 'block';
    pm10.style.display = 'none';
    info.style.display = 'none';
}

// hide the legend for no2 data when clicking on a pm10 button
function hideno2() {
    no2.style.display = 'none';
    pm10.style.display = 'block';
    info.style.display = 'none';
}

// restrict view of map
var maxBounds = L.latLngBounds(L.latLng(47.7157, 8.6538), L.latLng(47.3730, 9.47));

// set the map
var map = L.map('graph', {
    maxBounds: maxBounds,
    maxZoom: 14,
    minZoom: 11,
    zoomControl: false,
    attributionControl: false,
    gestureHandling: true,
}).setView([47.54, 9.075], 11);

// change map style
function changeMapStyle(name) {

    // remove previous layer on the map
    if (maplayer !== '') {
        map.removeLayer(maplayer);
    }

    // baselayer
    L.tileLayer('https://{s}.tiles.mapbox.com/v3/{key}/{z}/{x}/{y}.png', {
        format: 'images/png',
        key: 'lrqdo.me2bng9n',
    }).addTo(map);

    // move wmslayer to front
    if (wmsLayer !== '') {
        wmsLayer.bringToFront();
    }
}

// change the layer of the map
function changeLayer(thisId) {
    // remove data layer & legend
    if (wmsLayer !== '') {
        map.removeLayer(wmsLayer);
    }

    if (dataLayerName !== '') {
        dataLayerName = thisId;
    }

    // hahahahahahahaha
    wmsLayer = L.WMS.overlay('http://map.geo.tg.ch//proxy/geofy_chsdi3/luftbelastung-stickstoff?access_key=YoW2syIQ4xe0ccJA&', {
        version: '1.3.0',
        format: 'image/png',
        crs: L.CRS.EPSG4326,
        opacity: 1,
        transparent: true,
        layers: dataLayerName,
    }).addTo(map);
}

// disable scroll wheel
map.scrollWheelZoom.disable();

// zoom control
var zoom = L.control.zoom({
    position: 'topright'
});
zoom.addTo(map);

// generate map
changeMapStyle(mapname);