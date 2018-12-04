// global variables
var mapname = 'mapbox.light';
// streets, satellite
var dataLayerName = 'Immissionen_PM10_2020';
var wmsLayer = '';
var maplayer = '';

// restrict view of map
const topLeftCorner = L.latLng(47.7157, 8.6538);
const bottomRightCorner = L.latLng(47.3730, 9.47);
const maxBounds = L.latLngBounds(topLeftCorner, bottomRightCorner);

var mymap = L.map('graph', {
    maxBounds: maxBounds,
    maxZoom: 14,
    minZoom: 11,
    zoomControl: false,
    attributionControl: false
}).setView([47.54, 9.075], 11);

// handle zooming / scrolling
mymap.scrollWheelZoom.disable();

// control that shows state info on hover
var info = L.control({position: 'topleft'});

// add zoom control
var zoom = L.control.zoom({
    position: 'topright'
});
zoom.addTo(mymap);

// change map style
function changeMapStyle(name) {
    // remove every layer on the map
    if (maplayer !== '')
        mymap.removeLayer(maplayer);
    if (wmsLayer !== '')
        mymap.removeLayer(wmsLayer);

    if (dataLayerName !== '') {
        // add new layer to map
        maplayer = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: name,
            format: 'images/png',
            accessToken: 'pk.eyJ1IjoiamFub2JlMiIsImEiOiJjam00b3Vpa2wzZjNoM3BxbmJtams3Z2U0In0.ZOdhoX3gBfEJkGy0-w8Bwg'
        }).addTo(mymap);

        // add data layer over ground layer
        if (wmsLayer !== '')
            wmsLayer.addTo(mymap);
    }
}

function changeLayer(thisId) {

    // remove data layer & legend
    if (wmsLayer !== '')
        mymap.removeLayer(wmsLayer);

    if (dataLayerName !== '') {
        dataLayerName = thisId;

        wmsLayer = L.tileLayer.wms('http://map.geo.tg.ch/proxy/geofy_chsdi3/luftbelastung-stickstoff?access_key=YoW2syIQ4xe0ccJA&', {
            version: '1.3.0',
            format: 'image/png',
            transparent: true,
            crs: L.CRS.EPSG4326,
            opacity: 0.9,
            
            identify: false,
            layers: dataLayerName
        }).addTo(mymap);
    }
}

// generate map
changeMapStyle(mapname);