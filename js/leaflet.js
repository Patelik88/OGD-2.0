var map = L.map('graph', {
    center: [47.533336, 9.183335],
    zoom: 11
});

L.tileLayer('https://map.geo.tg.ch/proxy/geofy_chsdi3/luftbelastung-stickstoff?', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">',
}).addTo(map);

var wmsLayer = L.tileLayer.wms('https://demo.boundlessgeo.com/geoserver/ows?', {
    layers: 'ne:ne'
}).addTo(map);
