jQuery(function() {
    console.log("Pizza Pronto Real-time");

    var updateEta = function(){
        
        var min = Math.ceil(1);
        var max = Math.floor(45);
        var rando = Math.floor(Math.random() * (max - min)) + min;
        
        String.prototype.format = function(){
            var a = this, b;
            for(b in arguments){
                a = a.replace(/%[a-z]/,arguments[b]);
            }
            return a; // Make chainable
        };
        
        var formatString = $("#text_in_minutes").text();
        
        $(".estimatedWaitForDelivery").text(formatString.format(rando));
    };

    window.setInterval(updateEta, 1000);

});