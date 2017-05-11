var marker;
var marker1;
var marker2;
var bounceTimer;
var count = 2;

function myMap() {
    
    var myCenter = new google.maps.LatLng(49.209631, -122.928385);
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: myCenter,
        zoom: 11,
    };
        
    var map = new google.maps.Map(mapCanvas, mapOptions);
    marker = new google.maps.Marker({
        position:myCenter,
        optimized:false
    });
    
    
    var myCenter1 = new google.maps.LatLng(49.1977, -122.8487);
    marker1 = new google.maps.Marker({
        position:myCenter1,
        optimized:false
    });
    
    var myCenter2 = new google.maps.LatLng(49.25342,-123.0000086);
    marker2 = new google.maps.Marker({
        position:myCenter2,
        optimized:false
    });
    

    
    google.maps.event.addListener(marker, 'mouseover', function() {
        if (this.getAnimation() == null || typeof this.getAnimation() === 'undefined') {
            
            clearTimeout(bounceTimer);
            var this_marker = this;
             
            bounceTimer = setTimeout(function(){
                 this_marker.setAnimation(google.maps.Animation.BOUNCE);
            },500);
           
        }
    });
    
    google.maps.event.addListener(marker,'dblclick',function() {
        map.setZoom(map.getZoom() + count);
        map.setCenter(marker.getPosition());
    });
    
    
    google.maps.event.addListener(marker, 'mouseout', function() {
        
        if (this.getAnimation() != null) {
           this.setAnimation(null);
        }
        clearTimeout(bounceTimer);
        
        
    });
    google.maps.event.addListener(marker1, 'mouseover', function() {
        if (this.getAnimation() == null || typeof this.getAnimation() === 'undefined') {
            
            clearTimeout(bounceTimer);
            var this_marker = this;
             
            bounceTimer = setTimeout(function(){
                 this_marker.setAnimation(google.maps.Animation.BOUNCE);
            },500);
             
            document.getElementById("1").style.color="red";
        }
    });
    
    
    google.maps.event.addListener(marker1, 'mouseout', function() {
        
        if (this.getAnimation() != null) {
           this.setAnimation(null);
        }
        clearTimeout(bounceTimer);
        document.getElementById("1").style.color="black";
        
    }); 
    
    google.maps.event.addListener(marker2, 'mouseover', function() {
        if (this.getAnimation() == null || typeof this.getAnimation() === 'undefined') {
            
            clearTimeout(bounceTimer);
            var this_marker = this;
             
            bounceTimer = setTimeout(function(){
                 this_marker.setAnimation(google.maps.Animation.BOUNCE);
            },500);
        }
    });
    
    
    google.maps.event.addListener(marker2, 'mouseout', function() {
        
        if (this.getAnimation() != null) {
           this.setAnimation(null);
        }
        clearTimeout(bounceTimer);
        
    });
    
    marker.setMap(map);
    marker1.setMap(map);
    marker2.setMap(map);
}


function bounceMarker(x) {
    if (x == 'li1') {
            clearTimeout(bounceTimer);
             
            bounceTimer = setTimeout(function(){
                 marker.setAnimation(google.maps.Animation.BOUNCE);
            },500);
}
    else if(x == 'li2'){
            clearTimeout(bounceTimer);
             
            bounceTimer = setTimeout(function(){
                 marker1.setAnimation(google.maps.Animation.BOUNCE);
            },500);
    }         
  
  else if(x == 'li3') {
           clearTimeout(bounceTimer);
             
            bounceTimer = setTimeout(function(){
                 marker2.setAnimation(google.maps.Animation.BOUNCE);
            },500);
       
}
}
function stopBounce() {
    
    if (marker.getAnimation() != null) {
           marker.setAnimation(null);
    }
    
    if (marker1.getAnimation() != null) {
           marker1.setAnimation(null);
    }
    if (marker2.getAnimation() != null) {
           marker2.setAnimation(null);
    }
    clearTimeout(bounceTimer);
    
}







