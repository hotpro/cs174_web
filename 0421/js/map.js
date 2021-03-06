var map;

function init()
{
    var mapOptions = {"zoom": 18};

    map = new google.maps.Map(document.getElementById("map-canvas"),
                              mapOptions);

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(positionMap,
                                                 cannotPositionMap);
    }
    else {
        handleNoGeolocation(false);
    }
}

function positionMap(position)
{
    var pos = new google.maps.LatLng(position.coords.latitude,
                                     position.coords.longitude);

    var infowindow = new google.maps.InfoWindow(
                        {"map":      map,
                         "position": pos,
                         "content":  "Location found using HTML5."});

    map.setCenter(pos);
}

function cannotPositionMap()
{
    handleNoGeolocation(true);
}

function handleNoGeolocation(errorFlag)
{
    if (errorFlag) {
        var content = "Error: The Geolocation service failed.";
    }
    else {
        var content = "Error: Your browser doesn't support geolocation.";
    }

    var options = {"map":      map,
                   "position": new google.maps.LatLng(60, 105),
                   "content":  content};

    var infowindow = new google.maps.InfoWindow(options);
    map.setCenter(options.position);
}

google.maps.event.addDomListener(window, "load", init);
