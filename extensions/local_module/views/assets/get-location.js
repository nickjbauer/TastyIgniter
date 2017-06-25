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
        if(position.coords.accuracy > 100){
            console.log("cannot determine street address due to poor accuracy");
        }
        var url = reverseGeoUrlTemplate.format(
            position.coords.latitude,
            position.coords.longitude
        );

        console.log(url);
        $.get(url,function(data, status){
            console.log("Google Api call returned: " + status);
            
            var address_components = data.results[0].address_components;
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