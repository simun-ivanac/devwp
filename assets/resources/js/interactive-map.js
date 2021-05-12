var InteractiveMap = (function() {
    // CONFIGURE AND DISPLAY INTERACTIVE MAP (on scroll)

    // if not found, return early
    var map_holder = $('#map-holder');
    if (!map_holder.length) return;

    var is_configured = false;


    // CONFIGURATION
    function configMap() {
        if (is_configured) return;
        var scrolling_position = checkElementViewportPosition(map_holder, 800);
        if (scrolling_position != 'in_view') return;


        // set options
        var zoom = 9;
        var map = new L.map('map-holder', {
            scrollWheelZoom: false,
            dragging: true,
        }).setView([45.83381143, 17.38545184], zoom);

        // set visuals
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 11,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1Ijoic2ltYWxpbWEiLCJhIjoiY2s2bWs1OTRuMGZoczNqcnV6bDBpczJjYiJ9.uoJAIBl3YwaB5gSsVMzsYw'
        }).addTo(map);

        // marker
        var marker = L.marker([45.83381143, 17.38545184]).addTo(map);
        marker.bindPopup('Address 20, <br>Virovitica').openPopup();


        // only once can be configured
        is_configured = true;
    }


    // call function on scroll, in interval of 50ms
    var resizeTimer;

    $(window).scroll(function() {
        if (is_configured) return;

        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            configMap();
        }, 50);
    });

    configMap();


})(); // !InteractiveMap
