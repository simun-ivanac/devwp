var InteractiveMap = (function() {
    /*
     * LEAFLET API: interactive earth map
     * It takes latitude and longitude from frontend which are inserted by user
     * in admin dashboard. Default values point to Virovitica (Croatia).
     */


    // if not found, return early
    var mapHolder = $('#map-holder');
    if (!mapHolder.length) return;

    var map = mapHolder.closest('.js-map');
    var mapData = map.find('.js-map-data');

    // address marker
    var address = mapData.attr('data-address');
    if (!address.length) address = 'Address 20, Virovitica';

    // location coordinates: latitude
    var latitude = mapData.attr('data-lat');
    if (!latitude.length) latitude = 45.83381143;

    // location coordinates: longitude
    var longitude = mapData.attr('data-long');
    if (!longitude.length) longitude = 17.38545184;


    /*
     * MAP CONFIGURATION
     *
     * @param {string} element = selector where to load map
     * @param {bool} wheelZoom = enable/disable wheel zooming
     * @param {int} maxZoom = maximum available zoom
     */
    function configMap(element, wheelZoom, maxZoom) {
        var zoom = 9;

        // initialize
        var mapInit = new L.map(element, {
            scrollWheelZoom: wheelZoom,
            dragging: true,
        }).setView([latitude, longitude], zoom);

        // set visuals
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: maxZoom,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1Ijoic2ltYWxpbWEiLCJhIjoiY2s2bWs1OTRuMGZoczNqcnV6bDBpczJjYiJ9.uoJAIBl3YwaB5gSsVMzsYw'
        }).addTo(mapInit);

        // marker
        var marker = L.marker([45.83381143, 17.38545184]).addTo(mapInit);
        marker.bindPopup(address).openPopup();
    }


    // configure VISIBLE map
    configMap('map-holder', false, 11);
    map.find('.js-map-preloader').addClass('hidden');




    // if FULLSCREEN map configured?
    var isFullConfigured = false;

    // on click - open FULLSCREEN
    map.on('click', '.js-map-fullsize', function() {
        $('body').addClass('is-locked');

        map.find('.js-overlay-container').addClass('is-opened');
        map.find('.js-map-close').removeClass('hidden');
        map.find('.js-map-preloader').removeClass('hidden');

        // if not initialized, configure it
        if (!isFullConfigured) {
            configMap('map-holder-fullscreen', true, 20);
            isFullConfigured = true;
        }

    });


    // on click - close FULLSCREEN
    map.on('click', '.js-map-close', function() {
        $('body').removeClass('is-locked');

        map.find('.js-overlay-container').removeClass('is-opened');
        map.find('.js-map-close').addClass('hidden');
        map.find('.js-map-preloader').addClass('hidden');
    });



})(); // !InteractiveMap
