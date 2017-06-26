$(document).ready(function() { 
    var _location = null; 
    var hasUserGrantedLocationPermission = null;
    var googleMapsApiKey = "AIzaSyD8HVOplZ8Qo5riXiK4XJYxTKxsm-E_Zb4";
    var reverseGeoUrlTemplate = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=%f,%f&key=' + googleMapsApiKey;
    
    String.prototype.format = function(){
        var a = this, b;
        for(b in arguments){
            a = a.replace(/%[a-z]/,arguments[b]);
        }
        return a; // Make chainable
    };    
    
    var geo_options = {
      enableHighAccuracy: true,
      maximumAge: 5000,
      timeout: 4000
    };
    
    function initiateUserLocationPermissionCheck(){
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(x){}, function(error){
            console.log("hasLocationPermission " + error.message);
            switch(error.code){
              case 3:  //timeout
                hasUserGrantedLocationPermission = true;
                console.log("LocationPermission granted");
                getLocation();
                break;
              case 1: //user denied
                hasUserGrantedLocationPermission = false;
                break;
            }
          },
          { timeout: 1 }
        );
      } else {
          console.log("Geolocation is not supported by this browser.");
          hasUserGrantedLocationPermission = -1;
      }
    }

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(geosuccess, geofail, geo_options);
        } else {
            console.log("Geolocation is not supported by this browser.");
        }
    }

    function startLocation() {
      //gpsWakeLock = window.navigator.requestWakeLock('gps');  //for FireFox OS

      initiateUserLocationPermissionCheck();
      setTimeout(function(){
        if(hasUserGrantedLocationPermission === null){
            //this means the share location dialog is prompting
            console.log("Prompting for location...(we think)");
        }else{
          if(hasUserGrantedLocationPermission){
            getLocation();
          }else{
            console.log("User has not granted location permission");
            //don't bother doing any more, setting cannot be reset until page reload
            //TODO: consider a cookie for next load to ask the user to reconsider
          }
        }
      }, 100);
    }
    
    
    var foundZipcode = false;
    function geosuccess(position) {
        _location = position;
        console.log(position);
        var tryForStreetAddress = false;
        if(position.coords.accuracy > 100){
            console.log("cannot determine street address due to poor accuracy");
        }else{
            console.log("we might be able to get the street address");
            tryForStreetAddress = true;
        }
        var url = reverseGeoUrlTemplate.format(
            position.coords.latitude,
            position.coords.longitude
        );

        console.log(url);
        $.get(url,function(data, status){
            console.log("Google Api call returned: " + status);
            if(status === 'success'){
                $("#reverse_geocode").text(JSON.stringify(data));
            }
            var address_components = data.results[0].address_components;
            var maps_street_number = '';
            var maps_route = '';
            var maps_locality = '';
            var maps_postal_code = '';
            var maps_administrative_area_level_1 = '';
            if(tryForStreetAddress){
                $.each(address_components, function(i, v) {
                    if(v.hasOwnProperty("types")){
                        if(v.types.indexOf("street_number") > -1){
                            maps_street_number = v.short_name;
                        }
                        if(v.types.indexOf("route") > -1){
                            maps_route = v.short_name;
                        }
                        if(v.types.indexOf("locality") > -1){
                            maps_locality = v.short_name;
                        }
                        if(v.types.indexOf("administrative_area_level_1") > -1){
                            maps_administrative_area_level_1 = v.short_name;
                        }
                        if(v.types.indexOf("postal_code") > -1){
                            maps_postal_code = v.short_name;
                        }
                    }
                });
                
                // only set if NOT logged in.  Logged in users already have an address
                // TODO: fix this as it does not support localization
                var isLoggedIn = true;
                if($('.text-info').text().startsWith("Already have an account")){
                    isLoggedIn = false;
                }
                if(!isLoggedIn){
                    var street_address = maps_street_number + " " + maps_route;
                    $('input[name="address[0][address_1]"]').val(street_address);
                    $('input[name="address[0][city]"]').val(maps_locality);
                    $('input[name="address[0][state]"]').val(maps_administrative_area_level_1);
                    $('input[name="address[0][postcode]"]').val(maps_postal_code);                    
                }
            }
            $.each(address_components, function(i, v) {
                if(v.hasOwnProperty("types")){
                    if(v.types.indexOf("postal_code") > -1){
                        if(foundZipcode){
                            return;
                        }
                        console.log(v.short_name);
                        foundZipcode = true;
                        
                        searchLocal(v.short_name);
                        
                        console.log("back from searchLocal");
                        
                        return;
                    }
                }
            });
            
        });
    }

    var retries = 0;
    function geofail(msg) {
      console.log(msg);
      if(msg.hasOwnProperty("message")){
        if(msg.message === "User denied Geolocation"){
          //TODO: report for data purposes
        }else{
          //try again
          retries++;
          setTimeout(getLocation, 5000);
        }
      }else{
        //try again
            retries++;
          setTimeout(getLocation, 5000);
      }
      if(retries > 1){
          openLocalSearch();
      }
    }    
    
    startLocation();
    
});