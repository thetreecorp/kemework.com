

var property_add_map;
const mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(16.463623, 107.595239),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    fullscreenControl: false,

    mapTypeControl: true,
    mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
        position: google.maps.ControlPosition.RIGHT_BOTTOM,
        mapTypeIds: ["roadmap", "satellite"],
    },
    streetViewControl: false,
    styles: [
        {
            featureType: "poi",
            stylers: [{ visibility: "off" }],
        },
    ],
};

const mapAddPropertyOptions = {
    zoom: 12,
    center: new google.maps.LatLng(26.820553, 30.802498),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    fullscreenControl: false,

    mapTypeControl: true,
};

// let map = new google.maps.Map(
//     document.getElementById("map_canvas"),
//     mapOptions
// );
//window.addEventListener("load", initialize);

property_add_map    = new google.maps.Map(document.getElementById("map_canvas_add_property"), mapAddPropertyOptions);
var marker = new google.maps.Marker({
    map: property_add_map,
    draggable: true,
    position: new google.maps.LatLng(26.820553, 30.802498),
});
marker.addListener('drag', handleDragMarkerEvent);

// Find lat and lng when change select

function findAddressViaGoogle(address) {
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            updateLatLngInput(results[0].geometry.location.lat(), results[0].geometry.location.lng());
            // update google map and input
            updateMapLocation(results[0].geometry.location.lat(), results[0].geometry.location.lng(), 'map_canvas_add_property');
        } else {
            alert("Unable to find address: " + status);
        }
    });
}

function updateLatLngInput(lat, lng) {
    document.getElementById('lat').value = lat;
    document.getElementById('lng').value = lng;
}

function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPositionAddProperty);
    } else {
      alert("Geolocation is not supported by this browser.");
    }
}
function showPositionAddProperty(position) {
    let lat = position.coords.latitude;
    let lng = position.coords.longitude;
    if(document.getElementById("lat").value)
        lat = document.getElementById("lat").value;
    if(document.getElementById("lng").value)
        lng = document.getElementById("lng").value;
    updateLatLngInput(lat, lng);
    updateMapLocation(lat, lng, 'map_canvas_add_property');
}

function handleDragMarkerEvent(event) {
    // document.getElementById('lat').value = event.latLng.lat();
    // document.getElementById('lng').value = event.latLng.lng();
    updateLatLngInput(event.latLng.lat(), event.latLng.lng());
    marker.setPosition( property_add_map.getCenter());
    
    setTimeout(() => {
        property_add_map.setCenter(new google.maps.LatLng(event.latLng.lat(), event.latLng.lng()));  
    }, 1000);
    
    
}


function updateMapLocation(lat, lng, mapId) {
    updateLatLngInput(lat, lng);
    property_add_map = new google.maps.Map(document.getElementById(mapId), {
        zoom: 12,
        center: new google.maps.LatLng(lat, lng),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: true
    });
    marker = new google.maps.Marker({
        map: property_add_map,
        draggable: true,
        position: new google.maps.LatLng(lat, lng),
    });
   marker.addListener('drag', handleDragMarkerEvent);
   
}

function showActionBar() {
    document.getElementById("draw-action-js").classList.remove("d-none");
}

function hiddenActionBar() {
    document.getElementById("draw-action-js").classList.add("d-none");
    hideMarkers();
    emptyMarkerArray();
    loadAllPlace();
    clearPolygon();
}

function clearPolygon() {
    poly.setMap(null);
    poly = null;
}

function addMarker(value, infowindow) {
    const marker = new google.maps.Marker({
        position: value.latLng,
        map,
        title: value.name,
    });


    marker.addListener("mouseover", function () {
        infowindow.open(map, this);
    });

    marker.addListener("mouseout", function () {
        infowindow.close();
    });

    markers.push(marker);
    return marker;
}

function setMapOnAll(map) {
    for (let i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
}

function hideMarkers() {
    setMapOnAll(null);
}

function showMarkers() {
    setMapOnAll(map);
}

function emptyMarkerArray() {
    markers = [];
}

function itemSideBar(value, infowindow, markerItem) {
    document.getElementById("list-side-bar-js").insertAdjacentHTML(
        "beforeend",
        `<div class="col-6 p-3" id="item-side-bar-js${value.id}">
            <div class="card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;" >
                <div class="card-body">
                    <img style="width: 100%;"
                    src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Hue%2C_le_pont_Trang_Tien.jpg"
                    alt="">
                    <p class="my-text p-0 m-0" style="min-height: 50px;">Name: ${value.name}</p>
                    <p class="my-text p-0 m-0">Lat: ${value.latLng.lat}</p>
                    <p class="my-text p-0 m-0">Lng: ${value.latLng.lng}</p>
                </div>
            </div>
        </div>`
    );
    let item = document.getElementById(`item-side-bar-js${value.id}`);
    item.addEventListener("mouseover", () => {
        openInfoWindow(infowindow, markerItem);
    });
    item.addEventListener("mouseout", () => {
        hideInfoWindow(infowindow);
    });
}

function emptyItemSideBar() {
    document.getElementById("list-side-bar-js").innerHTML = "";
}

function itemInfoWindow(value) {
    return `<div class="row">
                <div class="col-5 pr-2">
                    <img class="w-100" src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Hue%2C_le_pont_Trang_Tien.jpg" alt="">
                </div>
                <div class="col-7 p-0">
                    <p class="my-text">${value.name}</p>
                </div>
            </div>`;
}

function openInfoWindow(infowindow, marker) {
    infowindow.open(map, marker);
}

function hideInfoWindow(infowindow) {
    infowindow.close();
}

async function initialize() {
    addEventFreeHand(map);
    await getListPlace();
    loadAllPlace();
}

function disable(map) {
    map.setOptions({
        draggable: false,
        zoomControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: false,
    });
}

function enable(map) {
    map.setOptions({
        draggable: true,
        zoomControl: true,
        scrollwheel: true,
        disableDoubleClickZoom: true,
    });
}

function addEventFreeHand(map) {
    $("#drawpoly").click(function (e) {
        hideMarkers();
        e.preventDefault();
        disable(map);

        showActionBar();
        google.maps.event.addListener(map, "mousedown", function (e) {
            drawFreeHand(map);
        });
    });
}

function drawFreeHand(map) {
    if (poly) clearPolygon();
    poly = new google.maps.Polyline({
        map: map,
        clickable: false,
    });

    google.maps.event.addListener(map, "mousemove", function (e) {
        poly.getPath().push(e.latLng);
    });

    google.maps.event.addListener(map, "mouseup", function (e) {
        google.maps.event.clearListeners(map, "mousemove");
        const path = poly.getPath();

        poly.setMap(null);
        poly = new google.maps.Polygon({
            map: map,
            path: path,
        });

        google.maps.event.clearListeners(map, "mouseup");
        google.maps.event.clearListeners(map, "mousedown");

        enable(map);
    });
}

function getLocationByPolygon() {
    emptyItemSideBar();
    places.forEach((value) => {
        const isContaint = google.maps.geometry.poly.containsLocation(
            value.latLng,
            poly
        );
        if (isContaint) {
            const infowindow = renderInfoWindowItem(value);
            let markerItem = addMarker(value, infowindow);
            itemSideBar(value, infowindow, markerItem);
        }
    });
}

function loadAllPlace() {
    emptyItemSideBar();
    places.forEach((value) => {
        const infowindow = renderInfoWindowItem(value);
        let markerItem = addMarker(value, infowindow);
        itemSideBar(value, infowindow, markerItem);
    });
}

function renderInfoWindowItem(value) {
    const infowindow = new google.maps.InfoWindow({
        content: itemInfoWindow(value),
        maxWidth: 200,
        ariaLabel: "Uluru",
    });
    return infowindow;
}

async function getListPlace() {
    try {
        const response = await axios({
            method: "get",
            url: `/api/places?is_paginate=false`,
            data: {},
        });
        places = response.data.data.data;
    } catch (error) {
        console.log(error);
    }
}