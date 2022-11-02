const options = {
    key: '8dK3QmIFbZ1qdZL6G0N7LIamw16t8s1H', // REPLACE WITH YOUR KEY !!!
    lat: 15.326027,
    lon: 119.969383,
    zoom: 5,

    // timestamp: Date.now() + 2 * 24 * 60 * 60 * 1000,
    hourFormat: '12h',
};

windyInit(options, windyAPI => {
    // All the params are stored in windyAPI.store
    const { overlays, broadcast } = windyAPI;

    const windMetric = overlays.wind.metric;
    console.log(windMetric);
    'kt'

    overlays.wind.listMetrics();
    ['kt', 'bft', 'm/s', 'km/h', 'mph']

    overlays.wind.setMetric('km/h');

    broadcast.on('metricChanged', (overlay, newMetric) => {
        console.log(overlay, newMetric);
    });
});