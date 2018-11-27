// https://map.geo.tg.ch/proxy/geofy_chsdi3/luftbelastung-stickstoff?access_key=YoW2syIQ4xe0ccJA&Service=WMS&Version=1.3.0&Request=GetCapabilities

var map = new L.Map('graph', {
    layers: [
        new L.TileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        )
    ]
});

map.setView([47.533336, 9.183335], 11);

var basemaps = {
    AAAAAAAAAAAAAAAAAAAAAAAA: L.tileLayer.wms('http://www.opengis.net/wms', {
        layers: 'https://map.geo.tg.ch/proxy/geofy_chsdi3/luftbelastung-stickstoff?',
        tiled: true,
        crs: L.CRS.EPSG4326,
        format: 'image/png',
    })
};

L.control.layers(basemaps).addTo(map);

basemaps.Countries.addTo(map);

