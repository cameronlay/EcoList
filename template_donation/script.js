function myMap() {
    
    var myCenter = new google.maps.LatLng(49.237704,-123.075846);
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: myCenter,
        zoom: 10,
    };
        
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
        position:myCenter,
        optimized:false
    });
    
    
    var myCenter1 = new google.maps.LatLng(49.2,-123.075846);
    var marker1 = new google.maps.Marker({
        position:myCenter1,
        optimized:false
    });
    
    var myCenter2 = new google.maps.LatLng(49.25342,-123.075846);
    var marker2 = new google.maps.Marker({
        position:myCenter2,
        optimized:false
    });
    

    var bounceTimer;
    google.maps.event.addListener(marker1, 'mouseover', function() {
        if (this.getAnimation() == null || typeof this.getAnimation() === 'undefined') {
            
            clearTimeout(bounceTimer);
            var this_marker = this;
             
            bounceTimer = setTimeout(function(){
                 this_marker.setAnimation(google.maps.Animation.BOUNCE);
            },500);
        }
    });
    
    
    google.maps.event.addListener(marker1, 'mouseout', function() {
        
        if (this.getAnimation() != null) {
           this.setAnimation(null);
        }
        clearTimeout(bounceTimer);
        
    });   
    
    marker.setMap(map);
    marker1.setMap(map);
    marker2.setMap(map);
}
