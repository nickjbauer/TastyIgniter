jQuery(function() {
    
    String.prototype.format = function(){
        var a = this, b;
        for(b in arguments){
            a = a.replace(/%[a-z]/,arguments[b]);
        }
        return a; // Make chainable
    };
    
    function pulsate() {
      $(".estimatedWaitForDelivery").
      css({"font-weight": "bolder"}).
      animate({opacity: 0.5, "font-weight": "lighter", "font-size": "80%"}, 100, 'linear').
      animate({opacity: 0.75, "font-weight": "bolder", "font-size": "120%"}, 100, 'linear').
      animate({opacity: 1, "font-weight": "normal", "font-size": "100%"}, 100, 'linear');
      
//        css({opacity: 0.2, 'font-weight':"bolder", 'font-size': "300%"}). 
//        animate({opacity: 1, 'font-size': "150%"}, 750, 'linear');
    }

    var updateEta = function(){
        
        var min = Math.ceil(1);
        var max = Math.floor(45);
        var rando = Math.floor(Math.random() * (max - min)) + min;
        

        
        var formatString = $("#text_in_minutes").text();
        
        $(".estimatedWaitForDelivery").text(formatString.format(rando));
        pulsate();
    };
    
    window.setInterval(updateEta, 5000);

});