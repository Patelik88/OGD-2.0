// global variables
var mapname = 'mapbox.light';
// streets, satellite
var dataLayerName = 'none';
var wmsLayer = '';
var maplayer = '';

var pm10 = document.getElementById('imgpm10');
var no2 = document.getElementById('imgno2');
var info = document.getElementById('infotext');

function hidepm10() {
    no2.style.display = 'block';
    pm10.style.display = 'none';
    info.style.display = 'none';
}

function hideno2() {
    no2.style.display = 'none';
    pm10.style.display = 'block';
    info.style.display = 'none';
}

// get the modal
var modal = document.getElementById('id01');

// when the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


// restrict view of map
const maxBounds = L.latLngBounds(
    L.latLng(47.7157, 8.6538),
    L.latLng(47.3730, 9.47)
);

var map = L.map('graph', {
    maxBounds: maxBounds,
    maxZoom: 14,
    minZoom: 11,
    zoomControl: false,
    attributionControl: false,
}).setView([47.54, 9.075], 11);

// change map style
function changeMapStyle(name) {
    if (dataLayerName !== '') {
        // add new layer to map
        maplayer = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
            id: name,
            format: 'images/png',
            accessToken: 'pk.eyJ1IjoiamFub2JlMiIsImEiOiJjam00b3Vpa2wzZjNoM3BxbmJtams3Z2U0In0.ZOdhoX3gBfEJkGy0-w8Bwg'
        }).addTo(map);

        // add data layer over ground layer
        if (wmsLayer !== '')
            wmsLayer.addTo(map);
    }
}

function changeLayer(thisId) {
    // remove data layer & legend
    if (wmsLayer !== '') {
        map.removeLayer(wmsLayer);
    }

    if (dataLayerName !== '') {
        dataLayerName = thisId;
    }

    wmsLayer = L.tileLayer.wms('http://map.geo.tg.ch//proxy/geofy_chsdi3/luftbelastung-stickstoff?access_key=YoW2syIQ4xe0ccJA&', {
        version: '1.3.0',
        format: 'image/png',
        crs: L.CRS.EPSG4326,
        opacity: 1,
        tileSize: 2500,
        tiled: false,
        transparent: true,
        identify: true,
        layers: dataLayerName
    }).addTo(map);
}

// scale bar
L.control.scale().addTo(map);

// generate map
changeMapStyle(mapname);