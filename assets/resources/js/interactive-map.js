var InteractiveMap = (function() {
    // CONFIGURE AND DISPLAY INTERACTIVE MAP, WHEN CLICKED ON MAP IMAGE

    // if not found, return
    var map_holder = $('#home-map-holder');
    if (!map_holder.length) return;

    var is_configured = false;


    // CONFIGURATION
    function configMap() {
        if (is_configured) return;
        var scrolling_position = checkElementViewportPosition(map_holder, 800);
        if (scrolling_position != 'in_view') return;


        // set options
        var zoom = 9;
        var map = new L.map('home-map-holder', {
            scrollWheelZoom: true,
            // dragging: false,
            // tap: false,
            touchZoom: true
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





    // CONFIGURATION OF INTERACTIVE MAP
    // location.on('click', '.placeholder-image', function(e) {
    //     e.stopPropagation();
    //
    //     // open overlay
    //     ScreenOverlay.display(location.find('#leaflet-map'));
    //     map_holder.addClass('active');
    //
    //     // if map is already initialized, skip configuration
    //     if (map_holder.children().length) return;
    //
    //
    //     var window_width = $(window).width();
    //     var window_height = $(window).height();
    //
    // });



    // CLOSE INTERACTIVE MAP
    // $(window).click(function() {
    //
    //     // if map is not opened, return
    //     if (!map_holder.hasClass('active')) return;
    //     if (!map_holder.children().length) return;
    //
    //     // if clicked outside map, close overlay
    //     if (!$(event.target).closest(map_holder).length) {
    //         ScreenOverlay.hide();
    //         map_holder.removeClass('active');
    //     }
    // });


})(); // !InteractiveMap
